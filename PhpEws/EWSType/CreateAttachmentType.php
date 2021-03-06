<?php
/**
 * Definition of the CreateAttachmentType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateAttachmentType type
 */
class CreateAttachmentType extends EWSType
{
    /**
     * ParentItemId property
     *
     * @var ItemIdType
     */
    public $ParentItemId;

    /**
     * Attachments property
     *
     * @var NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
}
