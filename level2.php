<?php
session_start();
include("connectionfile.php") ;
$query1="SELECT * FROM hackingtorx WHERE username='$_SESSION[username]'";
$result1 = mysql_query($query1);
if(!$result1){echo errorInfo();}
$row1 = mysql_fetch_array($result1);
$level = "Level2" ;

if(isset($_POST['submit']))
{
		if( ($_POST['username'] == "resu") && ($_POST['password'] == "ssap") )
		{
			if($row1['level2'] == 0)
			{
				$query3 = "UPDATE hackingtorx SET points = points + 20,level2 = 1 WHERE username = '".$_SESSION['username']."'";
				$result3 = mysql_query($query3);
			}
			header('Location:level2.php');
		}

}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title>hackingTorx</title>
<meta name="generator" content="Bluefish 2.0.1" >
<meta name="shubham garg" content=" This website is basic website to learn the basics of hacking ">
<link rel="shortcut icon" href="images/Hacking_Icon.png" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<link rel="stylesheet" type="text/css" href="user_css_script.css" />

</head>

<body>
<div>
<?php
include("header.php") ;
include("user_menubar.php") ;
include("user_rightbar.php") ;
include("user_leftbar.php") ;
include("main2.php") ;
include("footer.php") ;
?>

</div>
</body>


