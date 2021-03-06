<?php
/**
 * Contains ArrayOfRecipientsType.
 */

namespace PhpEws\EWSType;

/**
 * Represents an array of recipients of an item.
 */
class ArrayOfRecipientsType extends EWSType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
