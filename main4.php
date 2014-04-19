<?php
?>
    <!-- center part -->
   <div id="center"><br /><br />
	<center>   
   <b><span style="font-size:30px ;"> Main Level 4 </span></b><br />
   <span style="text-align:centre ;">Status : <span style="color:red"><?php if($row1['level4'] == 1) {echo "Completed" ;}  else { echo "not completed" ;} ?> </span></span> 
	<br />
   <a href="level3.php" style="color:red"> Back </a> | <a href="level4.php" style="color:red"> Index </a> | <a href="level5.php" style="color:red"> Next </a>
   </center>
   <br /><br /><br />
   <form method="post" id="levelform">
   username:<br />
   <input type="text" name="username" id="user" value="" size="25" maxlength="30" /><br /><br />
 	password:<br />
   <input type="password" name="password" id="pass" value="" size="25" maxlength="30" /><br /><br /><br />
   <input type="hidden" name="passwordfile" value="extras/ssap.txt" />
   <button name="submit" value="submit" type="submit" >Submit </button>
   </div> 
	</form>

</div>