<?php
/**
 * Definition of the WorkingPeriod type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the WorkingPeriod type
 */
class WorkingPeriod extends EWSType
{
    /**
     * DayOfWeek property
     *
     * @var DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * StartTimeInMinutes property
     *
     * @var integer
     */
    public $StartTimeInMinutes;

    /**
     * EndTimeInMinutes property
     *
     * @var integer
     */
    public $EndTimeInMinutes;
}
