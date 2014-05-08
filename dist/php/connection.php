<?php

require "constants.php";

$con = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$con){
	die("Can't access database\n" . mysql_error());
}

$db = mysql_select_db(DB_NAME, $con);
if(!$db){
	die("Can't use database. \n" . mysql_error());
}

?>