<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class ContactPointViewHelper
 *
 * @see http://schema.org/ContactPoint
 */
class ContactPointViewHelper extends StructuredValueViewHelper
{
    const TYPE = 'ContactPoint';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('areaServed', 'string', 'The geographic area where a service or offered item is provided. Supersedes serviceArea.');
        $this->registerArgument('availableLanguage', 'string', 'A language someone may use with the item. Please use one of the language codes from the IETF BCP 47 standard. See also inLanguage');
        $this->registerArgument('contactType', 'string', 'A person or organization can have different contact points, for different purposes. For example, a sales contact point, a PR contact point and so on. This property is used to specify the kind of contact point.');
        $this->registerArgument('email', 'string', 'Email address.');
        $this->registerArgument('faxNumber', 'string', 'The fax number.');
        $this->registerArgument('productSupported', 'string', 'The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").');
        $this->registerArgument('telephone', 'string', 'The telephone number.');
    }
}
