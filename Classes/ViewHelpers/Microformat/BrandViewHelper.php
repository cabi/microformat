<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class BrandValueViewHelper
 *
 * @see http://schema.org/Brand
 */
class BrandValueViewHelper extends IntangibleViewHelper
{
    const TYPE = 'Brand';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('logo', 'string', 'An associated logo.');
    }
}
