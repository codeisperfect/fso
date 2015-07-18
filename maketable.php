<?php
include "includes/app.php";



function dt($tn){
	echo Sql::query("drop table ".$tn);
}


function drop_tables(){
	$tl=array("drivers", "allalloc");
	foreach($tl as $i=>$val){
		dt($val);
	}
}

function drop_all(){
	$allt=Sql::getArray("show tables");
	foreach($allt as $i=>$val){
		dt($val["Tables_in_mohit"]);
	}
}

function make_table(){
	echo Sql::query("CREATE TABLE users (id int NOT NULL AUTO_INCREMENT,username varchar(100), password varchar(100) , email varchar(100) ,  name varchar(100) , address varchar(500) , phone varchar(13) , type varchar(3) , create_time int,update_time int , last_login int,last_ip varchar(20),conf varchar(1),econf varchar(1), PRIMARY KEY ( id) ) ");
	echo Sql::query("ALTER TABLE users add profilepic varchar(100) NULL ");
	echo Sql::query("ALTER TABLE users add dob int NULL ");
	echo Sql::query("ALTER TABLE users add profilepicbig varchar(100) NULL ");

	echo Sql::query("CREATE TABLE drivers (id int NOT NULL AUTO_INCREMENT, name varchar(100), phone varchar(100) unique, email varchar(100) unique, time int, uid int, PRIMARY KEY ( id) ) ");
	echo Sql::query("CREATE TABLE allalloc (id int NOT NULL AUTO_INCREMENT, did int, fromloc varchar(1000), toloc varchar(1000), rid int, time int, uid int, PRIMARY KEY ( id) ) ");
}




drop_tables();
make_table();

closedb();

?>
<br>