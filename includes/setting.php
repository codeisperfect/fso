<?php

	define("server",'poorvi');//server = laptop,server,poorvi

	if(server=="poorvi"){
		define('HOST','http://poorvi.cse.iitd.ac.in/~cs1120233/fso/',false); // false mean that HOST cannot be used as hOsT
		define('ROOT', '/home/btech/cs1120233/private_html/fso/', false);
		define('CDN', HOST.'photo/', false);
		$db_data = array() ;
		$db_data['host'] = 'poorvi.cse' ;
		$db_data['user'] = 'mohit' ;
		$db_data['pass'] = 'mohitsaini' ; 
		$db_data['db'] = 'mohit' ;
	}
	else if(server=="laptop"){
		define('HOST','http://localhost/fso/',false); // false mean that HOST cannot be used as hOsT
		define('ROOT', '/var/www/fso/', false);
		define('CDN', HOST.'photo/', false);
		if(false){
			$db_data = array() ;
			$db_data['host'] = '10.237.20.8' ;
			$db_data['user'] = 'mohit' ;
			$db_data['pass'] = 'mohitsaini' ; 
			$db_data['db'] = 'mohit' ;
		}
		else{
			$db_data = array() ;
			$db_data['host'] = 'localhost' ;
			$db_data['user'] = 'root' ;
			$db_data['pass'] = 'mohitsaini' ; 
			$db_data['db'] = 'fso' ;
			$info=array();
		}
	}
	else if(server=="server"){
		define('HOST','http://54.149.49.212/fso/',false); // false mean that HOST cannot be used as hOsT
		define('ROOT', '/var/www/html/fso/', false);
		define('CDN', HOST.'photo/', false);
		$db_data = array() ;
		$db_data['host'] = 'localhost' ;
		$db_data['user'] = 'root' ;
		$db_data['pass'] = 'mohit' ;
		$db_data['db'] = 'fso' ;
	}
	define('BASE', HOST.'v/', false);

?>