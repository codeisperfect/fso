<?php

$_ginfo["default_user_type"]='f';

$_ginfo["myname"] = "Drivers";
$_ginfo["mysite"] = "www.players.com";

$view_default=array(
	'template/top.php'=>array(
		"title"=>"Player",
		"css"=>array()
		),
	'template/topnew.php'=>array(
		"title"=>"Drivers",
		"closehead"=>true,
		"addcss"=>array()
		),
	'template/bottom.php'=>array(
		"needpopup"=>true,
		"needbody" => true,
		"js" => array(),
		),
	'template/bottomnew.php'=>array(
		"needpopup"=>true,
		"needbody" => true,
		"js" => array(),
		),
	"template/mselect.php"=>array(
		"name"=>"",
		"data"=>"all",
		"divstyle"=>"",
		"blocked"=>array(),
		"selectall"=>true,
		"selectallselected"=>true,
		"label"=>""
		),
	"template/select.php"=>array(
		"name"=>"",
		"label"=>"",
		"selectval"=>"",
		"dc"=>"simple",
		"onchange"=>""
		),
	"template/select_bool.php"=>array(
		"label"=>"",
		"name"=>"",
		"options"=>array("Yes","No")
		),
	"template/input.php"=>array(
		"inpattr"=>array(),
		"divattr"=>array(),
		"label"=>"Enter",
		"name"=>"",
		"type"=>"",
		"closediv"=>true,
		"dc"=>"simple"
		),
	"template/input1.php"=>array(
		"inpattr"=>array(),
		"divattr"=>array(),
		"diviattr"=>array(),
		"label"=>"Enter",
		"name"=>"",
		"type"=>"",
		"dc"=>"simple"
		),
	"login.php"=>array(
		"defopen"=>"login"
		),
	"popup.php"=>array(
		"title"=>"this popup is made in India",
		"body"=>"",
		"bodyinfo"=>array(),
		"footer"=>"",
		"footerinfo"=>array(),
		"name"=>"",
		'stylebody'=>'',
		'stylemain'=>'min-width:200px;',
		'defaultfooter'=>true
		),
	"template/headerdd.php"=>array(
		"links"=>array()
		),
	"template/msg.php"=>array(
		"align"=>"left"
		),
	"input3" => array(
		"divclass" => "input-field col s12 l6",
		"name" => null,
		"type" => "text",
		"dc" => "simple",
		"inpattr" => array(),
		"divattr" => array(),
		"id" => "",
		"label" => "Enter"
		)
	);


$_ginfo["action_constrain"]=array(
	"signup"=>array("need"=>array("name","email","password","phone")),
	"login"=>array("need"=>array("email","password")),
	"logout"=>array("need"=>array()),
	"sendmsg"=>array("need"=>array("msg","rid"),"users"=>array("a","u"),"isfilter"=>"sisi"),
	"loadmsg"=>array("need"=>array("uid","num_msg","minid","maxid","is_load_newer"),"users"=>array("a", "u") ,"isfilter"=>""),
	"addcontent"=>array("need"=>array("title","data","catg"),"isfilter"=>"ssi"),
	"addform"=>array("need"=>array("formjson","title","catg"),"isfilter"=>"ssi"),
	"addingroup"=>array("need"=>array("gid","uids")),
	"creategroup"=>array("need"=>array("uids","name")),
	"addgoal"=>array("need"=>array("title","expiredate","type")),
	"set_goalstatus"=>array("need"=>array("gid","status")),
	"get_goals"=>array("need"=>array("type")),
	"get_allpastgoals"=>array(),
	"addexercise"=>array("need"=>array("title","content")),
	"changepassword"=>array("need"=>array("opassword","npassword"),"users"=>"all"),
	"saveuserdetails"=>array("need"=>array("uid"),"users"=>"all"),
	"autoscroll"=>array("need"=>array("min", "max", "minl", "maxl", "isloadold")),
	"allocate" => array("need" => array("fromloc", "toloc", "rid", "did")),
	"adddriver" => array("need" => array("name", "phone", "email"))
);



$_ginfo["error"]=array(
	"-1"=>"Session expired",
	"-2"=>"You are not right person to perform this action.",
	"-3"=>"Incorrect formate of input",
	"-4"=>"Password incorrect",
	"-5"=>"Username doesn't exist",
	"-6"=>"Email id not registered",
	"-7"=>"Action handler not defined",
	"-8"=>"Session expired or You are not right person to perform this action.",
	"-9"=>"Not sufficient arguments.",
	"-16"=>"This email id used Already",
	"-17"=>"OTP is incorrect",
	"-19"=>"You cannot choose slot of past.",
	"-20"=>"You Cannot generate link",
	"-21"=>"Your account deactivated",
	"-22"=>"Nobody is login",
	"-23"=>"File not uploaded",
	"-24"=>"You cannot do so much repeatition.",
	"-25"=>"Error",
	"-25"=>"Subject Already Added",
	"-26"=>"Unable to change password",
	"1"=>"Positive"
);

$_ginfo['lang']=array("Hindi","English","Hinglish");

$_ginfo["logouturl"]=HOST."login.php?logout";

$_ginfo["headerddlist"]=array(
	'a'=>array(
		"profile.php"=>"Profile",
		"chat.php"=>"My Messages",
		"cal.php"=>"Center Calender",
		"req.php"=>"User requests",
		'?logout'=>"Logout"
		),
	'u'=>array(
		"profile.php"=>"Profile",
		"chat.php"=>"My Messages",
		"cal.php"=>"My Calender",
		'?logout'=>"Logout",
		),
	'f'=>array(
		"profile.php"=>"Profile",
		"chat.php"=>"My Messages",
		"cal.php"=>"My Calender",
		'?logout'=>"Logout",
		),
	);


$_ginfo["autoscroll"]=array(
);

$_ginfo["region"] = array("Delhi", "Mumbai", "Banglore");

$_ginfo["autoinsert"] = array(
	"allocate" => array("fixed"=>array("time","uid"), "table"=>"allalloc"),
	"adddriver" => array("fixed" => array("time", "uid"), "table" => "drivers"),
);



?>