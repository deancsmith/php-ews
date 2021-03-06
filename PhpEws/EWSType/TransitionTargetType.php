<?php
/**
 * Contains TransitionTargetType.
 */

namespace PhpEws\EWSType;

/**
 * Specifies the target of the time zone transition.
 *
 * The target is either a time zone period or a group of time zone transitions.
 */
class TransitionTargetType extends EWSType
{
    /**
     * Indicates whether the time zone transition target is a time zone period
     * or of a group of time zone transitions.
     *
     * @since Exchange 2010
     *
     * @var KindType
     */
    public $Kind;

    /**
     * Unique identifier of the Period or TransitionsGroup that is the target of
     * the time zone transition.
     *
     * @var string
     */
    public $_;
}
