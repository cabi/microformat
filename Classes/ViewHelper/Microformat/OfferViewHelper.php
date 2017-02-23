<?php
/**
 * An offer to transfer some rights to an item or to provide a service — for example, an offer to sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to repair a motorcycle, or to loan a book.
 *
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class OfferViewHelper
 *
 * @see http://schema.org/Offer
 */
class OfferViewHelper extends IntangibleViewHelper
{
    const TYPE = 'Offer';

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
        $this->registerArgument('availabilityEnds', 'string', 'The end of the availability of the product or service included in the offer.');
        $this->registerArgument('availabilityStarts', 'string', 'The beginning of the availability of the product or service included in the offer.');
        $this->registerArgument('category', 'string', 'A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.');
        $this->registerArgument('eligibleRegion', 'string', 'The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.');
        $this->registerArgument('gtin12', 'string', 'The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See GS1 GTIN Summary for more details.');
        $this->registerArgument('gtin13', 'string', 'The GTIN-13 code of the product, or the product to which the offer refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC codes can be converted into a GTIN-13 code by simply adding a preceeding zero. See GS1 GTIN Summary for more details.');
        $this->registerArgument('gtin14', 'string', 'The GTIN-14 code of the product, or the product to which the offer refers. See GS1 GTIN Summary for more details.');
        $this->registerArgument('gtin8', 'string', 'The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more details.');
        $this->registerArgument('ineligibleRegion', 'string', 'The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is not valid, e.g. a region where the transaction is not allowed.');
        $this->registerArgument('mpn', 'string', 'The Manufacturer Part Number (MPN) of the product, or the product to which the offer refers.');
        $this->registerArgument('price', 'string', 'The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.');
        $this->registerArgument('priceCurrency', 'string', 'The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.');
        $this->registerArgument('priceValidUntil', 'string', 'The date after which the price is no longer available.');
        $this->registerArgument('serialNumber', 'string', 'The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.');
        $this->registerArgument('sku', 'string', 'The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a product or service, or the product to which the offer refers.');
        $this->registerArgument('validFrom', 'string', 'The date when the item becomes valid.');
        $this->registerArgument('validThrough', 'string', 'The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.');
    }
}
