<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Format;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * JsonLdViewHelper
 */
class JsonLdViewHelper extends AbstractViewHelper
{

    /**
     * @param bool $showInHead
     * @param bool $jsonPrettyPrint
     * @param bool $jsonUnescapedUnicode
     * @param bool $jsonUnescapedSlashes
     *
     * @return string
     */
    public function render(
        $showInHead = true,
        $jsonPrettyPrint = false,
        $jsonUnescapedUnicode = true,
        $jsonUnescapedSlashes = true
    ) {
        $this->createStack();

        $children = $this->renderChildren();


        $stack = $this->getStack();
        $array = $stack->pop();
        $jsonBase = $array[''];

        $options = $this->buildJsonOptions($jsonPrettyPrint, $jsonUnescapedUnicode, $jsonUnescapedSlashes);
        $content = '<script type="application/ld+json">' . "\n";
        $content .= json_encode($jsonBase, $options);
        $content .= "\n" . '</script>';

        if ($showInHead) {
            static $counter = 0;
            $GLOBALS['TSFE']->additionalHeaderData['microformat' . $counter++] = $content;
            return '';
        }

        return $content;
    }

    /**
     * @param bool $jsonPrettyPrint
     * @param bool $jsonUnescapedUnicode
     * @param bool $jsonUnescapedSlashes
     *
     * @return int
     */
    protected function buildJsonOptions($jsonPrettyPrint, $jsonUnescapedUnicode, $jsonUnescapedSlashes)
    {
        $options = 0;

        if ($jsonPrettyPrint) {
            $options = $options | JSON_PRETTY_PRINT;
        }

        if ($jsonUnescapedUnicode) {
            $options = $options | JSON_UNESCAPED_UNICODE;
        }

        if ($jsonUnescapedSlashes) {
            $options = $options | JSON_UNESCAPED_SLASHES;
        }

        return $options;
    }

    /**
     * Create the Stack to save all the microformat information.
     *
     */
    protected function createStack()
    {
        $stack = new \SplStack();
        $stack->push([]);
        $this->viewHelperVariableContainer->add(self::class, 'stack', $stack);
    }

    /**
     * @return \SplStack
     */
    protected function getStack()
    {
        /** @var \SplStack $stack */
        $stack = $this->viewHelperVariableContainer->get(self::class, 'stack');
        return $stack;
    }
}
