<?php
session_start() ;
include('connectionfile.php') ;

//replacing html tags
$usernamex = strip_tags($_POST['username']);
$passwordx = strip_tags($_POST['password']);

echo $usernamex ;
//replacing spaces
$username = str_replace(' ','',$usernamex); 
$password = str_replace(' ','',$passwordx);

$query = "SELECT * FROM hackingtorx WHERE username = '$username'" ;
$result = mysql_query($query );
$num = mysql_num_rows($result);

if($num==0)
{
	echo "The username or password you entered is incorrect" ;
}
else
{
	$row = mysql_fetch_array($result);
	$password_store = $row['password'] ;
	if($password_store == $password)
	{
		$firstname = $row['firstname'] ;
		$lastname = $row['lastname'] ;
		//echo "welcome"." ".$firstname ." ".$lastname;
		$_SESSION['username'] = $username ;
		$_SESSION['rank'] = $row['rank']; 
		$_SESSION['score'] = $row['points'] ;  
		header('Location: user_index.php');
	}
	else
	{
		echo "The username or password you entered is incorrect" ;
	} 
}


?>