<?php

$StartDate =readline("Enter start date (DD-MM-YYYY):");
$EndDate = readline("Enter Last date  (DD-MM-YYYY) :");
Find_date($StartDate,$EndDate);

function Find_date($StartDate,$EndDate){
//    strtotime is converting the dates into seconds from july 1970 GMT sec.
    $GetTime = strtotime($EndDate)-strtotime($StartDate);
    // The calculate returns in seconds format and we can divide by 1 days of
    // seconds(1440min - 1 day , 86400 sec - 1 day)
$GetDate =  $GetTime/(86400);
echo "Number of Days Between this days ".$GetDate;
}