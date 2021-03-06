<?php
/**
 * Contains ArrayOfDelegateUserType.
 */

namespace PhpEws\EWSType;

/**
 * Contains the identities of delegates to add to or update in a mailbox.
 */
class ArrayOfDelegateUserType extends EWSType
{
    /**
     * Identifies a single delegate to add to or update in a mailbox.
     *
     * @since Exchnage 2007 SP1
     *
     * @var DelegateUserType
     */
    public $DelegateUser;
}
