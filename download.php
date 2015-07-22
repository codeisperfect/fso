<?php
include "includes/app.php";


getcsv();

shell_exec("python json2csv.py");

$file = '/tmp/data.csv';
chmod($file, 0777);

if (file_exists($file)) {
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.basename($file));
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit;
}

closedb();
?>