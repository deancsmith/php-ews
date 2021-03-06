<?php
/**
 * Definition of the BaseMoveCopyItemType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseMoveCopyItemType type
 */
class BaseMoveCopyItemType extends EWSType
{
    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
}
