<?php
/**
 * An organization such as a school, NGO, corporation, club, etc.
 *
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class OrganizationViewHelper
 *
 * @see http://schema.org/Organization
 */
class OrganizationViewHelper extends ThingViewHelper
{
    const TYPE = 'Organization';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('address', 'string', 'Physical address of the item.');
        $this->registerArgument('areaServed', 'string', 'The geographic area where a service or offered item is provided. Supersedes serviceArea.');
        $this->registerArgument('award', 'string', 'An award won by or for this item. Supersedes awards.');
        $this->registerArgument('dissolutionDate', 'string', 'The date that this organization was dissolved.');
        $this->registerArgument('duns', 'string', 'The Dun & Bradstreet DUNS number for identifying an organization or business person.');
        $this->registerArgument('email', 'string', 'Email address.');
        $this->registerArgument('faxNumber', 'string', 'The fax number.');
        $this->registerArgument('foundingDate', 'string', 'The date that this organization was founded.');
        $this->registerArgument('globalLocationNumber', 'string', 'The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.');
        $this->registerArgument('isicV4', 'string', 'The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.');
        $this->registerArgument('legalName', 'string', 'The official name of the organization, e.g. the registered company name.');
        $this->registerArgument('leiCode', 'string', 'An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.');
        $this->registerArgument('location', 'string', 'The location of for example where the event is happening, an organization is located, or where an action takes place.');
        $this->registerArgument('logo', 'string', 'An associated logo.');
        $this->registerArgument('naics', 'string', 'The North American Industry Classification System (NAICS) code for a particular organization or business person.');
        $this->registerArgument('taxID', 'string', 'The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.');
        $this->registerArgument('telephone', 'string', 'The telephone number.');
        $this->registerArgument('vatID', 'string', 'The Value-added Tax ID of the organization or person.');
    }
}
