<?php
/**
 * Definition of the ArrayOfResolutionType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ArrayOfResolutionType type
 */
class ArrayOfResolutionType extends EWSType
{
    /**
     * Resolution property
     *
     * @var ResolutionType
     */
    public $Resolution;

    /**
     * IndexedPagingOffset property
     *
     * @var integer
     */
    public $IndexedPagingOffset;

    /**
     * NumeratorOffset property
     *
     * @var integer
     */
    public $NumeratorOffset;

    /**
     * AbsoluteDenominator property
     *
     * @var integer
     */
    public $AbsoluteDenominator;

    /**
     * IncludesLastItemInRange property
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * TotalItemsInView property
     *
     * @var integer
     */
    public $TotalItemsInView;
}
