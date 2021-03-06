<?php
/**
 * Definition of the CalendarViewType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CalendarViewType type
 */
class CalendarViewType extends EWSType
{
    /**
     * StartDate property
     *
     * @var dateTime
     *
     * @todo Make a DateTime object.
     */
    public $StartDate;

    /**
     * EndDate property
     *
     * @var dateTime
     *
     * @todo Make a DateTime object.
     */
    public $EndDate;
}
