<?php
/**
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelpers\Microformat;

/**
 * Class PersonViewHelper
 *
 * @see http://schema.org/Person
 */
class PersonViewHelper extends ThingViewHelper
{
    const TYPE = 'Person';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();

        $this->registerArgument('additionalName', 'string', 'An additional name for a Person, can be used for a middle name.');
        $this->registerArgument('address', 'string', 'Physical address of the item.');
        $this->registerArgument('award', 'string', 'An award won by or for this item. Supersedes awards.');
        $this->registerArgument('birthDate', 'string', 'Date of birth.');
        $this->registerArgument('colleague', 'string', 'A colleague of the person. Supersedes colleagues.');
        $this->registerArgument('deathDate', 'string', 'Date of death.');
        $this->registerArgument('duns', 'string', 'The Dun & Bradstreet DUNS number for identifying an organization or business person.');
        $this->registerArgument('email', 'string', 'Email address.');
        $this->registerArgument('familyName', 'string', 'Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.');
        $this->registerArgument('faxNumber', 'string', 'The fax number.');
        $this->registerArgument('gender', 'string', 'Gender of the person. While http://schema.org/Male and http://schema.org/Female may be used, text strings are also acceptable for people who do not identify as a binary gender.');
        $this->registerArgument('givenName', 'string', 'Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.');
        $this->registerArgument('globalLocationNumber', 'string', 'The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.');
        $this->registerArgument('honorificPrefix', 'string', 'An honorific prefix preceding a Person\'s name such as Dr/Mrs/Mr.');
        $this->registerArgument('honorificSuffix', 'string', 'An honorific suffix preceding a Person\'s name such as M.D. /PhD/MSCSW.');
        $this->registerArgument('isicV4', 'string', 'The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.');
        $this->registerArgument('jobTitle', 'string', 'The job title of the person (for example, Financial Manager).');
        $this->registerArgument('naics', 'string', 'The North American Industry Classification System (NAICS) code for a particular organization or business person.');
        $this->registerArgument('taxID', 'string', 'The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.');
        $this->registerArgument('telephone', 'string', 'The telephone number.');
        $this->registerArgument('vatID', 'string', 'The Value-added Tax ID of the organization or person.');
    }
}
