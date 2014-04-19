<?php

//open connection to the database

$dbc = mysql_connect( 'localhost','shubhamgarg1234','bws81011'); 
if(!$dbc)
{
	die('not connected:"'. mysql_errno() ) ;
}

//select a database
$db_selected = mysql_select_db("hackinktorx", $dbc);
if(!$db_selected)
{
die("cant connect:" . mysql_error()) ;	
}

//test
//$query = "UPDATE hackingtorx SET email='shubhamgcool@gmail' WHERE username ='shubhamgarg1234'";
//$result=mysql_query($query);

?>