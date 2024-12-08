<?php

$today = date ('D');
$fullDate = date ('Y-m-d');
$currentDate = date ('d F Y');

switch ($today) {
    case 'Mon':
        $day = "Monday";
        break;
    case 'Tue':
        $day = "Tuesday";
        break;
    case 'Wed':
        $day = "Wednesday";
        break;
    case 'Thu':
        $day = "Thursday";
        break;
    case 'Fri':
        $day = "Fiday";
        break;
    case 'Sat':
        $day = "Saturday";
        break;
    case 'Sun':
        $day = "Sunday";
        break;
    default:
        $day = "Invalid day";

}

echo "$day ";
echo "$currentDate";


?>