<?php include('./nepali-date.php');

$nepali_date = new nepali_date();
$year_en = date("Y",time());
$month_en = date("m",time());
$day_en = date("d",time());

$date_ne = $nepali_date->get_nepali_date($year_en, $month_en, $day_en);

$current_nepali_year = $date_ne['y'];
$current_nepali_month = $date_ne['m'];
$current_nepali_day = $date_ne['d'];

echo $current_nepali_year . "<br>";
echo $current_nepali_month . "<br>";
echo $current_nepali_day . "<br>";

?>