<?php
/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class PlaceViewHelper
 *
 * @see http://schema.org/Place
 */
class PlaceViewHelper extends ThingViewHelper
{
    const TYPE = 'Place';

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
        $this->registerArgument('branchCode', 'string', 'A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs. For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047" is a branchCode for a particular branch.');
        $this->registerArgument('faxNumber', 'string', 'The fax number.');
        $this->registerArgument('globalLocationNumber', 'string', 'The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN) of the respective organization, person, or place. The GLN is a 13-digit number used to identify parties and physical locations.');
        $this->registerArgument('hasMap', 'string', 'A URL to a map of the place. Supersedes map, maps.');
        $this->registerArgument('isicV4', 'string', 'The International Standard of Industrial Classification of All Economic Activities (ISIC), Revision 4 code for a particular organization, business person, or place.');
        $this->registerArgument('logo', 'string', 'An associated logo.');
        $this->registerArgument('smokingAllowed', 'boolean', 'Indicates whether it is allowed to smoke in the place, e.g. in the restaurant, hotel or hotel room.');
        $this->registerArgument('telephone', 'string', 'The telephone number.');
    }
}
