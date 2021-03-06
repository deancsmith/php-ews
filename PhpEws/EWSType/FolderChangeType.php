<?php
/**
 * Definition of the FolderChangeType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the FolderChangeType type
 */
class FolderChangeType extends EWSType
{
    /**
     * FolderId property
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * DistinguishedFolderId property
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Updates property
     *
     * @var NonEmptyArrayOfFolderChangeDescriptionsType
     */
    public $Updates;
}
