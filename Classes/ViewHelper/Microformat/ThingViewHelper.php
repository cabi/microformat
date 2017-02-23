<?php
/**
 * The most generic type of item.
 *
 * @author Carsten Biebricher
 */

namespace HDNET\Microformat\ViewHelper\Microformat;

/**
 * Class ThingViewHelper
 *
 * @see http://schema.org/Thing
 */
class ThingViewHelper extends AbstractMicroformatViewHelper
{
    const TYPE = 'Thing';

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments() {
        parent::initializeArguments();

        $this->registerArgument('alternateName', 'string', 'An alias for the item.');
        $this->registerArgument('description', 'string', 'A description of the item.');
        $this->registerArgument('disambiguatingDescription', 'string', 'A sub property of description. A short description of the item used to disambiguate from other, similar items. Information from other properties (in particular, name) may be necessary for the description to be useful for disambiguation.');
        $this->registerArgument('name', 'string', 'The name of the item.');
        $this->registerArgument('sameAs', 'string', 'URL of a reference Web page that unambiguously indicates the item\'s identity. E.g. the URL of the item\'s Wikipedia page, Freebase page, or official website.');
        $this->registerArgument('url', 'string', 'URL of the item.');
        $this->registerArgument('image', 'string', 'An image of the item. This can be a URL or a fully described ImageObject.');
        $this->registerArgument('mainEntityOfPage', 'string', 'Indicates a page (or other CreativeWork) for which this thing is the main entity being described. See background notes for details. Inverse property: mainEntity.');
    }
}
