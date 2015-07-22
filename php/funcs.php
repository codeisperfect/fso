<?php

function getcsv() {
	$data = Sqle::getArray("select id, data from booking");
	$msdata = map($data, f('Fun::setifunset(str2json($inp["data"]), "id", $inp["id"])'));
	$fn = "/tmp/data.json";
	file_put_contents($fn, json_encode(array("data" => $msdata)));
	chmod($fn, 0777);
	shell_exec("python json2csv.py");
}


?>