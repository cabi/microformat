<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class AggregateRatingViewHelper
 *
 * @see http://schema.org/AggregateRating
 */
class AggregateRatingViewHelper extends RatingViewHelper
{
    const TYPE = 'AggregateRating';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('ratingCount', 'string', 'The count of total number of ratings.');
        $this->registerArgument('reviewCount', 'string', 'The count of total number of reviews.');
    }
}
