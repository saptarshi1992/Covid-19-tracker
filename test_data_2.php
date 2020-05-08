<?php
$data = file_get_contents("https://api.covid19india.org/v2/state_district_wise.json");
$data_set = json_decode($data);
$data_conf  = 0;
foreach ($data_set as $key => $value) {
	print_r($value->state);
	$dis_data = $value->districtData;
	foreach ($dis_data as $key => $value) {
		# code...
		//$district_name = $vaue->district;
		$conf_case = $value->confirmed;
		$data_conf = $data_conf+$conf_case;
	}
	$data_conf = $data_conf;
	print_r($data_conf);
	$data_conf = 0;
}

?>
