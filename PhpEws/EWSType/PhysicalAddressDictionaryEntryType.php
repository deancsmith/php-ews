<?php
/**
 * Contains PhysicalAddressDictionaryEntryType.
 */

namespace PhpEws\EWSType;

/**
 * Describes a single physical address for a contact item.
 */
class PhysicalAddressDictionaryEntryType extends EWSType
{
    /**
     * Represents the city name that is associated with a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $City;

    /**
     * Represents the country or region for a given physical address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $CountryOrRegion;

    /**
     * Identifies a physical address.
     *
     * @since Exchange 2007
     *
     * @var PhysicalAddressKeyType
     */
    public $Key;

    /**
     * Represents the postal code for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $PostalCode;

    /**
     * Represents the state of residence for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $State;

    /**
     * Represents a street address for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Street;
}
