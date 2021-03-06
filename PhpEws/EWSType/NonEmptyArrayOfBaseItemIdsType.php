<?php
/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfBaseItemIdsType type
 */
class NonEmptyArrayOfBaseItemIdsType extends EWSType
{
    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * OccurrenceItemId property
     *
     * @var OccurrenceItemIdType
     */
    public $OccurrenceItemId;

    /**
     * RecurringMasterItemId property
     *
     * @var RecurringMasterItemIdType
     */
    public $RecurringMasterItemId;
}
