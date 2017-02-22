<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class ImageObjectViewHelper
 */
class ImageObjectViewHelper extends MediaObjectViewHelper
{
    const TYPE = 'ImageObject';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments() {
        parent::initializeArguments();


        $this->registerArgument('caption', 'string', 'The caption for this object.');
        $this->registerArgument('exifData', 'string', 'exif data for this object.');
        $this->registerArgument('representativeOfPage', 'boolean', 'Indicates whether this image is representative of the content of the page.');
    }
}
