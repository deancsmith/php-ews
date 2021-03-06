<?php
/**
 * Contains NonEmptyArrayOfInternetHeadersType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a collection of some of the Internet message headers that are
 * contained in an item in a mailbox.
 */
class NonEmptyArrayOfInternetHeadersType extends EWSType
{
    /**
     * Represents the Internet message header for a given header within the
     * headers collection.
     *
     * @since Exchange 2007
     *
     * @var InternetHeaderType
     */
    public $InternetMessageHeader;
}
