<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

use HDNET\Microformat\ViewHelpers\Format\JsonLdViewHelper;
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

        $this->renderChildren();

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

    /**
     *
     */
    protected function createEmptyElementOnStack()
    {
        $element = [];
        /**
        * @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(JsonLdViewHelper::class, 'stack');
        $stack->push($element);
        $this->viewHelperVariableContainer->addOrUpdate(JsonLdViewHelper::class, 'stack', $stack);
    }

    /**
     * @param $element
     */
    protected function pushOnStack($element)
    {
        /**
        * @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(JsonLdViewHelper::class, 'stack');
        $stack->push($element);
        $this->viewHelperVariableContainer->addOrUpdate(JsonLdViewHelper::class, 'stack', $stack);
    }

    /**
     * @return mixed
     */
    protected function popFromStack()
    {
        /**
        * @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(JsonLdViewHelper::class, 'stack');
        $element = $stack->pop();
        $this->viewHelperVariableContainer->addOrUpdate(JsonLdViewHelper::class, 'stack', $stack);

        return $element;
    }

    /**
     * @param string  $key
     * @param        $element
     */
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

    /**
     * @param $preArray
     */
    protected function setContextAndType(&$preArray)
    {
        $preArray['@context'] = $this::CONTEXT;
        $preArray['@type'] = $this::TYPE;
    }

    /**
     * @param array $preArray
     */
    protected function processArguments(&$preArray)
    {
        $keys = array_keys($this->arguments);

        foreach ($keys as $key) {
            if ($key == 'key') {
                continue;
            }
            if ($this->hasArgument($key) && trim($this->arguments[$key]) != '') {
                $preArray[$key] = $this->arguments[$key];
            }
        }

    }

    /**
     * @param string $path
     * @param array  $microformatStorage
     * @param        $array
     */
    protected function mergeArrayByPath($path, &$microformatStorage, $array)
    {
        if ($path) {
            $microformatStorage[$path] = array_merge($microformatStorage[$path], $array);
        } else {
            $microformatStorage = array_merge($microformatStorage, $array);
        }
    }
}
