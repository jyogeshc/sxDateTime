<?php namespace SteedX;
/**
* sxDateTime
* @package sxDateTime
*
* PHP API to manage DateTime
Test for the new branch
*/


@include_once(__DIR__.'/sxDateInterval.php');

use DateTime;
use DateTimeInterface;
use DateTimeZone;
use DateInterval;
class sxDateTime extends DateTime
{
    /**
     * Constant Default time zone
     */
    const DEFAULT_TIME_ZONE = 'UTC';

    /**
     * Constant Local time zone
     */
    const LOCAL_TIME_ZONE = 'Australia/Adelaide';

    /**
     * Constant weekday Sunday
     */
    const SUNDAY = 0;

    /**
     * Constant weekday Saturday
     */
    const SATURDAY = 6;


    /**
     * sxDateTime constructor.
     *
     * @param null|string $time in Y-m-d H:i:s format
     * @param null|string $tz:  time zone
     *
     */
    public function __construct($time = null, $tz = null)
    {
        $tz = (is_null($tz))?self::DEFAULT_TIME_ZONE:$tz;
        $timeZone = new DateTimeZone($tz);
        parent::__construct($time, $timeZone);
    }

    public function test()
    {
      echo "This is test 1 and the change that is there for clone";
      echo "We can add the new line othe file ";
    }


    /**
     * Get instance for the current date and time.
     *
     * @param null|string $tz
     * @return sxDateTime
     *
     */
    public static function now($tz = null)
    {
        return new static(null, $tz);
    }


    /**
     * Clone current class to new with Local Time zone
     *
     * @param null|string $tz
     * @return sxDateTime
     */
    public function local($tz = null)
    {
        $tz = (is_null($tz))?self::LOCAL_TIME_ZONE:$tz;
        $timeZone = new DateTimeZone($tz);
        $clone = clone $this;
        $clone->setTimezone($timeZone);
        return $clone;

    }

    /**
     * Calculate Different between two dates
     *
     * @param null|string $tz
     * @return bool|\DateInterval
     */
    public function difference($date=null,$tz=null)
    {
        if (is_null($date))
        {
            $date = new sxDateTime(null,$tz);
        }
        if (is_string($date))
        {
            $date = new sxDateTime($date,$tz);
        }

        #-- make sure current date object is in UTC timezone
        $currentDateTime = $this->setDefaultTimeZone($this);
        $newDateTime = $this->setDefaultTimeZone($date);

        $difference =  $currentDateTime->diff($newDateTime);

        $sxDateInterval = new sxDateInterval($difference);

        if ($sxDateInterval->getSign() == '-')
        {
            $workingDays = $this->calcWorkingDays($newDateTime,$currentDateTime);

        }else{
            $workingDays = $this->calcWorkingDays($currentDateTime,$newDateTime);
        }
        $sxDateInterval->setWorkingDays($workingDays);

        return $sxDateInterval;
    }


    /**
     * Check Timezone and set to default if required
     *
     * @param DateTime $dt
     * @return DateTime
     */
    private function setDefaultTimeZone( DateTime $dt)
    {
        if (trim(strtolower($dt->getTimezone()->getName())) != strtolower(self::DEFAULT_TIME_ZONE))
        {
            $tz = new DateTimeZone(self::DEFAULT_TIME_ZONE);
            $dt->setTimezone($tz);
            echo "We need to clear some confusion about GIT and Git patch Commit";
            return $dt;
        }
        return $dt;
    }

    /**
     * Calculate Working days between two dates
     * - Calc working days
     * - Calc Sundays
     * - Calc Saturday
     *
     * @resource: https://gist.github.com/massiws/9593008
     * @param DateTime $startDateTime
     * @param DateTime $endDateTime
     * @return array
     */
    private function calcWorkingDays(DateTime $startDateTime,DateTime $endDateTime)
    {
        #-- Sat is Working
        $workSat = false;

        #-- Holidays
        $publicHolidays = array();
        $easterMondays=[];

        $startTime = strtotime($startDateTime->format('Y-m-d H:i:s'));
        $endTime = strtotime($endDateTime->format('Y-m-d H:i:s'));
        echo "OK we are working on this to code and other";

        $workday = 0;
        $sunday = 0;
        $saturday=0;
        for ($i = $startTime; $i < $endTime; $i = strtotime("+1 day", $i))
        {
            $day = date("w", $i);  // 0=sun, 1=mon, ..., 6=sat
            $mmgg = date('m-d', $i);
            if($day == self::SUNDAY)
            {
                $sunday++;
            }
            if ($day == self::SATURDAY)
            {
                $saturday++;
                $ctr++; //New Change
            }

            if ($day != self::SUNDAY &&
                !in_array($mmgg, $publicHolidays) &&
                !in_array($i, $easterMondays) &&
                !($day == self::SATURDAY && $workSat == FALSE))
            {
                $workday++;
            }
        }
        $ret = ['workday'=>$workday,'saturday'=>$saturday,'sunday'=>$sunday];
        return $ret;
    }

    public function new_function()
    {
      echo "This is new function that we can add while doing pathc";
    }

}
