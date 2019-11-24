<?php
/**
 * SteedX/sxDateTime testCase 1
 *
 */
@include_once(__DIR__.'/../src/SteedX/sxDateTime.php');
@include_once(__DIR__.'/displayDifference.php');

use SteedX\sxDateTime;
$timeZone = 'Australia/Adelaide';
#-- Case 1
$currentTime = '2019-11-24 21:09:03';
$nexTime = '2019-11-25 21:09:03';

$date1 = new sxDateTime($currentTime,$timeZone);
$difference = $date1->difference($nexTime,$timeZone);
echo "Difference should be exact 1 Day \n";
displayDifference($difference);


#-- Case 2
$currentTime = '2019-11-24 21:09:03';
$nexTime = '2019-11-25 22:39:36';
$date1 = new sxDateTime($currentTime,$timeZone);
$difference = $date1->difference($nexTime,$timeZone);
echo "Difference should be exact 1 Day 1 Hour 30 Min 30 Seconds \n";
displayDifference($difference);


#-- Different Time Zone Should by 5 Hours Difference
$istText = '2019/11/24 21:30:10';
$ist = new sxDateTime($istText,'Asia/Calcutta');
$difference = $ist->difference($istText,'Australia/Adelaide');
echo "Time Difference between Adelaide and India \n";
displayDifference($difference);




