<?php

$query2 = "SELECT username FROM hackingtorx ORDER BY points DESC";
$result2 = mysql_query($query2); 
$count = 0 ;
while($row2 = mysql_fetch_assoc($result2))
{
	$count++ ;
	if( $row2['username'] == $_SESSION['username'] )
	{
			break;
	}
	 	
}
?>
<div id="rightbar">
	<span style="margin-left:25%;">
	<center>
	Welcome <a href="user_index.php" style="color:red" > <?php echo $_SESSION['username']; ?> </a> <br /> 
	score <?php echo $row1['points']; ?>| rank <?php echo $count ;?>
	</center>	
	</span>
</div>