<?php
/**
 * SteedX/sxDateTime myAge demo
 *
 * Born on 16-06-1973 03:30:09 IST Time
 * My age on 01-01-2019 03:30:09 IST
 */
@include_once(__DIR__.'/../src/SteedX/sxDateTime.php');
@include_once(__DIR__.'/displayDifference.php');

use SteedX\sxDateTime;
$dob = new sxDateTime('19730601033009','Asia/Calcutta');
$difference = $dob->difference('20190101033009','Asia/Calcutta');
echo "My age as on 01-01-2019 03:30:09 IST \n";
displayDifference($difference);
