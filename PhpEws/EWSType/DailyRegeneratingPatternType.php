<?php
/**
 * Contains DailyRegeneratingPatternType.
 */

namespace PhpEws\EWSType;

/**
 * Describes the frequency, in days, in which a task is regenerated.
 */
class DailyRegeneratingPatternType extends EWSType
{
    /**
     * Defines the interval, in days, between two consecutive recurring items.
     *
     * The value must be in the range from 1 to 999.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
