<?php
function postedVisits() {
$website_visits_file = fopen("website_visits.txt", "r") or die("Unable to open file!");
$visits = fgets($website_visits_file);
$visits = $visits + 1
echo fwrite($website_visits_file,$visits);
fclose($website_visits_file);
}



?>
