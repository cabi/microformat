<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class CreativeWorkViewHelper
 *
 * @see http://schema.org/CreativeWork
 */
class CreativeWorkViewHelper extends ThingViewHelper
{
    const TYPE = 'CreativeWork';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments() {
        parent::initializeArguments();

        $this->registerArgument('accessibilityAPI', 'string', 'Indicates that the resource is compatible with the referenced accessibility API (WebSchemas wiki lists possible values).');
        $this->registerArgument('accessibilityControl', 'string', 'Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).');
        $this->registerArgument('accessibilityFeature', 'string', 'Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).');
        $this->registerArgument('accessibilityHazard', 'string', 'A characteristic of the described resource that is physiologically dangerous to some users. Related to WCAG 2.0 guideline 2.3 (WebSchemas wiki lists possible values).');
        $this->registerArgument('alternativeHeadline', 'string', 'A secondary title of the CreativeWork.');
        $this->registerArgument('award', 'string', 'An award won by or for this item. Supersedes awards.');
        $this->registerArgument('citation', 'string', 'A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.');
        $this->registerArgument('commentCount', 'int', 'The number of comments this CreativeWork (e.g. Article, Question or Answer) has received. This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.');
        $this->registerArgument('contentRating', 'string', 'Official rating of a piece of content—for example,\'MPAA PG-13\'.');
        $this->registerArgument('copyrightYear', 'int', 'The year during which the claimed copyright for the CreativeWork was first asserted.');
        $this->registerArgument('dateCreated', 'string', 'The date on which the CreativeWork was created or the item was added to a DataFeed.');
        $this->registerArgument('dateModified', 'string', 'The date on which the CreativeWork was most recently modified or when the item\'s entry was modified within a DataFeed.');
        $this->registerArgument('datePublished', 'string', 'Date of first broadcast/publication.');
        $this->registerArgument('discussionUrl', 'string', 'A link to the page containing the comments of the CreativeWork.');
        $this->registerArgument('educationalUse', 'string', 'The purpose of a work in the context of education; for example, \'assignment\', \'group work\'.');
        $this->registerArgument('fileFormat', 'string', 'Media type, typically MIME format (see IANA site) of the content e.g. application/zip of a SoftwareApplication binary. In cases where a CreativeWork has several media type representations, \'encoding\' can be used to indicate each MediaObject alongside particular fileFormat information. Unregistered or niche file formats can be indicated instead via the most appropriate URL, e.g. defining Web page or a Wikipedia entry.');
        $this->registerArgument('genre', 'string', 'Genre of the creative work or group.');
        $this->registerArgument('headline', 'string', 'Headline of the article.');
        $this->registerArgument('inLanguage', 'string', 'The language of the content or performance or used in an action. Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage. Supersedes language.');
        $this->registerArgument('interactivityType', 'string', 'The predominant mode of learning supported by the learning resource. Acceptable values are \'active\', \'expositive\', or \'mixed\'.');
        $this->registerArgument('isAccessibleForFree', 'boolean', 'A flag to signal that the publication is accessible for free. Supersedes free.');
        $this->registerArgument('isBasedOn', 'string', 'A resource that was used in the creation of this resource. This term can be repeated for multiple sources. For example, http://example.com/great-multiplication-intro.html. Supersedes isBasedOnUrl.');
        $this->registerArgument('isFamilyFriendly', 'boolean', 'Indicates whether this content is family friendly.');
        $this->registerArgument('keywords', 'string', 'Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.');
        $this->registerArgument('learningResourceType', 'string', 'The predominant type or kind characterizing the learning resource. For example, \'presentation\', \'handout\'.');
        $this->registerArgument('license', 'string', 'A license document that applies to this content, typically indicated by URL.');
        $this->registerArgument('position', 'string', 'The position of an item in a series or sequence of items.');
        $this->registerArgument('publishingPrinciples ', 'string', 'Link to page describing the editorial principles of the organization primarily responsible for the creation of the CreativeWork.');
        $this->registerArgument('schemaVersion', 'string', 'Indicates (by URL or string) a particular version of a schema used in some CreativeWork. For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/ if precise indication of schema version was required by some application.');
        $this->registerArgument('temporalCoverage', 'string', 'The temporalCoverage of a CreativeWork indicates the period that the content applies to, i.e. that it describes, either as a DateTime or as a textual string indicating a time period in ISO 8601 time interval format. In the case of a Dataset it will typically indicate the relevant time period in a precise notation (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012"). Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage in broader terms - textually or via well-known URL. Written works such as books may sometimes have precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format format via "1939/1945". Supersedes datasetTimeInterval, temporal.');
        $this->registerArgument('text', 'string', 'The textual content of this CreativeWork.');
        $this->registerArgument('thumbnailUrl', 'string', 'A thumbnail image relevant to the Thing.');
        $this->registerArgument('typicalAgeRange', 'string', 'The typical expected age range, e.g. \'7-9\', \'11-\'.');
        $this->registerArgument('version', 'string', 'The version of the CreativeWork embodied by a specified resource.');
    }
}
