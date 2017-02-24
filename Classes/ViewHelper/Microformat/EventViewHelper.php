<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class EventViewHelper
 *
 * @see http://schema.org/Event
 */
class EventViewHelper extends ThingViewHelper
{
    const TYPE = 'Event';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('doorTime', 'string', 'The time admission will commence.');
        $this->registerArgument('duration', 'string', 'The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.');
        $this->registerArgument('endDate', 'string', 'The end date and time of the item (in ISO 8601 date format).');
        $this->registerArgument('inLanguage', 'string', 'The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.');
        $this->registerArgument('isAccessibleForFree', 'boolean', 'A flag to signal that the publication is accessible for free. Supersedes free.');
        $this->registerArgument('location', 'string', 'The location of for example where the event is happening, an organization is located, or where an action takes place.');
        $this->registerArgument('previousStartDate', 'string', 'Used in conjunction with eventStatus for rescheduled or cancelled events. This property contains the previously scheduled start date. For rescheduled events, the startDate property should be used for the newly scheduled start date. In the (rare) case of an event that has been postponed and rescheduled multiple times, this field may be repeated.');
        $this->registerArgument('startDate', 'string', 'The start date and time of the item (in ISO 8601 date format).');
        $this->registerArgument('typicalAgeRange', 'string', 'The typical expected age range, e.g. \'7-9\', \'11-\'.');
    }
}
