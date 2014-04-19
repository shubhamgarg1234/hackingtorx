<?php
?>
<div id="leftbar">
<h2>Level</h2><hr>
<?php 

$query = "SELECT * FROM  leftsidemenu" ;
$result = mysql_query($query);
$query4 = "SELECT * FROM leftsidemenu WHERE left_menu_name = '$level'" ;
$result4 = mysql_query($query4);
$row4 = mysql_fetch_array($result4);
while($rows = mysql_fetch_assoc($result))
{
?>
&nbsp<a href="<?php echo $rows['left_menu_link']?>" ><?php echo $rows['left_menu_name'] ?> </a><br />
<?php
}
?><br />
<h2>Stats</h2><hr><br />
Author : <a href="#" style="color:red">shubham garg</a><br /><br />
Reward : <?php echo $row4['levelpoints'];?><br /><br />
Need some help?<br />
<span style="font-size:15px"><a href="#" style="color:red">hint<a> | <a href="#" style="color:red">forum</a></span>
</div>