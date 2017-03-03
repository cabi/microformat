<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class RatingValueViewHelper
 *
 * @see http://schema.org/Rating
 */
class RatingViewHelper extends IntangibleViewHelper
{
    const TYPE = 'Rating';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('bestRating', 'string', 'The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.');
        $this->registerArgument('ratingValue', 'string', 'The rating for the content.');
        $this->registerArgument('worstRating', 'string', 'The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.');
    }
}
