<?php
session_start();

include('connectionfile.php') ;
//test to see if username is alphanumaric
$test=$_POST[username];
if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0) 
{		
		echo "verification code doesnot matches" ;
}
else 
{
		if(!eregi(("[^A-Za-z0-9]"),$test))
		{		
		
				//test for duplicate username
				$query="SELECT * FROM hackingtorx WHERE username='$_POST[username]'";
				$result=mysql_query($query);
				$num=mysql_num_rows($result);
				
				if( $num == 0)
				{
					 //test for duplicate email
					 $query1="SELECT * FROM hackingtorx WHERE email='$_POST[myemail]'";
					 $result1=mysql_query($query1);
					 $num1=mysql_num_rows($result1);
					 
					 if( $num1 == 0 )
					 {
					 	 
					 	 //testing if both the passwords are same
					 	 if( $_POST[password] == $_POST[password1])
					 	 {
							 //replacing html tags			 	 	
					 	 	 $usernamex = strip_tags($_POST['username']);
					 	 	 $passwordx = strip_tags($_POST['password']);
					 	 	 $emailx = strip_tags($_POST['myemail']);
					 	 	 $firstnamex = strip_tags($_POST['firstname']);
					 	 	 $lastnamex = strip_tags($_POST['lastname']);
					 	 	 			 	 	 
					 	 	 
					 	 	 //replacing spaces from various parameters 
					 	 	 $username = str_replace(' ','',$usernamex); 
					 	 	 $password = str_replace(' ','',$passwordx);
					 	 	 $email = str_replace(' ','',$emailx);
					 	 	 $firstname = str_replace(' ','',$firstnamex);
					 	 	 $lastname = str_replace(' ','',$lastnamex);
					 	 	 
					 	 	 $sex = $_POST['sex'] ;  //storing value of sex
					 	 	 
					 	 	 //inserting into table
					 	 	 $query2 = "INSERT INTO hackingtorx SET username='$username' , password='$password' , email='$email' , firstname='$firstname' , lastname='$lastname' , sex='$sex' ";
					 	 	 $result2= mysql_query($query2);
					 	 	 header('Location:index.php') ;
					 	 }
					 	 else
					 	 {
					 	 	echo "password do not match" ;	
					 	 }
					 	 
					 }
					 
					 else 
					 {
					 	echo "email already registered" ;
					 }
					 
				}
				else 
				{
					echo "username already exits" ;
				}
		
		}
		else 
		{
			echo "wrong username" ;
		}
}

?>