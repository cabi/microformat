<?php
/**
 * The mailing address.
 *
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class PostalAddressViewHelper
 *
 * @see http://schema.org/PostalAddress
 */
class PostalAddressViewHelper extends ContactPointViewHelper
{
    const TYPE = 'PostalAddress';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments() {
        parent::initializeArguments();

        $this->registerArgument('addressCountry', 'string', 'The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.');
        $this->registerArgument('addressLocality', 'string', 'The locality. For example, Mountain View.');
        $this->registerArgument('addressRegion', 'string', 'The region. For example, CA.');
        $this->registerArgument('postOfficeBoxNumber', 'string', 'The post office box number for PO box addresses.');
        $this->registerArgument('postalCode', 'string', 'The postal code. For example, 94043.');
        $this->registerArgument('streetAddress', 'string', 'The street address. For example, 1600 Amphitheatre Pkwy.');
    }
}
