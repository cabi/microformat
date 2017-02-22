<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

use HDNET\Microformat\ViewHelper\Format\JsonLdViewHelper;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class AbstractMicroformatViewHelper
 */
abstract class AbstractMicroformatViewHelper extends AbstractViewHelper
{

    const CONTEXT = 'http://schema.org';

    /**
     * @param string $key
     */
    public function render($key = null)
    {
        // add new level on stack
        $this->createEmptyElementOnStack();

        $children = $this->renderChildren();

        // get highest level from stack
        // drop highest level on stack
        $high = $this->popFromStack();

        $array = [];
        $this->setContextAndType($array);
        $this->processArguments($array);

        $element = array_merge($high, $array);

        // update highest level on stack
        $this->updateLastElementOnStack($key, $element);

    }


    protected function createEmptyElementOnStack()
    {
        $element = [];
        /** @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(JsonLdViewHelper::class, 'stack');
        $stack->push($element);
        $this->viewHelperVariableContainer->addOrUpdate(JsonLdViewHelper::class, 'stack', $stack);
    }

    /**
     *
     */
    protected function pushOnStack($element)
    {
        /** @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(JsonLdViewHelper::class, 'stack');
        $stack->push($element);
        $this->viewHelperVariableContainer->addOrUpdate(JsonLdViewHelper::class, 'stack', $stack);
    }

    /**
     * @return mixed
     */
    protected function popFromStack()
    {
        /** @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(JsonLdViewHelper::class, 'stack');
        $element = $stack->pop();
        $this->viewHelperVariableContainer->addOrUpdate(JsonLdViewHelper::class, 'stack', $stack);

        return $element;
    }

    protected function updateLastElementOnStack($key, $element)
    {
        $stackElement = $this->popFromStack();
        if (isset($stackElement[$key])) {
            $doubleElement = $stackElement[$key];
            if (isset($doubleElement['@context'])) {
                $stackElement[$key] = [];
                $stackElement[$key][] = $doubleElement;
            }
            $stackElement[$key][] = $element;

            $newElement = $stackElement;
        } else {
            $newElement = array_merge($stackElement, [$key => $element]);
        }
        $this->pushOnStack($newElement);
    }

    protected function setContextAndType(&$preArray)
    {
        $preArray['@context'] = $this::CONTEXT;
        $preArray['@type'] = $this::TYPE;
    }

    protected function processArguments(&$preArray)
    {
        $keys = array_keys($this->arguments);

        foreach ($keys as $key) {
            if ($key == 'key') {
                continue;
            }
            if ($this->hasArgument($key)) {
                $preArray[$key] = $this->arguments[$key];
            }
        }

    }

    protected function mergeArrayByPath($path, &$microformatStorage, $array)
    {
        if ($path) {
            $microformatStorage[$path] = array_merge($microformatStorage[$path], $array);
        } else {
            $microformatStorage = array_merge($microformatStorage, $array);
        }
    }
}
