<?php
include "includes/app.php";

function adda($a) {
	$outp = array();
	foreach($a as $i) {
		$outp = add($outp, $i);
	}
	return $outp;
}

$data = Sqle::getArray("select id, data from booking");
$msdata = map($data, f('Fun::setifunset(str2json($inp["data"]), "id", $inp["id"])'));
if(count($msdata) > 0) {
	$keys = adda(map($msdata, f('array_keys($inp)')));
	$msdata = map($msdata, function($inp) use ($keys) {
		return map($keys, function($i) use ($inp) {
			return ( array_key_exists($i, $inp) ? $inp[$i]: "&nbsp;" );
		}, array("isindexed" => true));
	});
}
Disp::disp_table($msdata);

closedb();
?>