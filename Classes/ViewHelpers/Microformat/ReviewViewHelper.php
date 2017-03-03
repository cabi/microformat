<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class ReviewViewHelper
 *
 * @see http://schema.org/Review
 */
class ReviewViewHelper extends CreativeWorkViewHelper
{
    const TYPE = 'Review';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('reviewBody', 'string', 'The actual body of the review.');
    }
}
