<?php
$data = file_get_contents("https://raw.githubusercontent.com/pomber/covid19/master/docs/timeseries.json");
$data = json_decode($data,true);
foreach($data as $key=>$value){
	$days_count = count($value)-1;
	$days_count_prev = $days_count -1;
}
$total_conf = 0;
$total_recv = 0;
$total_death = 0;
 foreach ($data as $key => $value) {
 	$total_conf = $total_conf+$value[$days_count]['confirmed'];
 	$total_recv = $total_recv+$value[$days_count]['recovered'];
 	$total_death = $total_death+$value[$days_count]['deaths']; }
?>
