<?php
/**
 *
 * @author     Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Format;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class TrimViewHelper
 */
class TrimViewHelper extends AbstractViewHelper
{

    /**
     * Trim the content.
     *
     * Remove newlines and whitespaces on demand.
     *
     * @param string $content
     * @param bool   $removeNewline
     * @param bool   $removeWhitespace
     *
     * @return string
     */
    public function render($content = null, $removeNewline = true, $removeWhitespace = true)
    {
        if ($content === null) {
            $content = $this->renderChildren();
        }

        if ($removeNewline) {
            $content = preg_replace('~[\r\n]+~', '', $content);
        }

        if ($removeWhitespace) {
            $content = preg_replace('/\s+/', ' ', $content);
        }
        return trim($content);
    }
}
