<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class MediaObjectViewHelper
 */
class MediaObjectViewHelper extends CreativeWorkViewHelper
{
    const TYPE = 'MediaObject';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('bitrate', 'string', 'The bitrate of the media object.');
        $this->registerArgument('contentSize', 'string', 'File size in (mega/kilo) bytes.');
        $this->registerArgument('contentUrl', 'string', 'Actual bytes of the media object, for example the image file or video file.');
        $this->registerArgument('duration', 'string', 'The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.');
        $this->registerArgument('embedUrl', 'string', 'A URL pointing to a player for a specific video. In general, this is the information in the src element of an embed tag and should not be the same as the content of the loc tag.');
        $this->registerArgument('encodingFormat', 'string', 'mp3, mpeg4, etc.');
        $this->registerArgument('expires', 'string', 'Date the content expires and is no longer useful or available. Useful for videos.');
        $this->registerArgument('playerType', 'string', 'Player type required—for example, Flash or Silverlight.');
        $this->registerArgument('requiresSubscription', 'boolean', 'Indicates if use of the media require a subscription (either paid or free). Allowed values are true or false (note that an earlier version had \'yes\', \'no\').');
        $this->registerArgument('uploadDate', 'string', 'Date when this media object was uploaded to this site.');
        $this->registerArgument('width', 'string', 'The width of the item.');
    }
}
