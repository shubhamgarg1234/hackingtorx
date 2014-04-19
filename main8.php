<?php
?>
    <!-- center part -->
   <div id="center"><br /><br />
   <center>
   <b><span style="font-size:30px ;"> Main Level 8 </span></b><br />
   Status : <span style="color:red"><?php if($row1['level8'] == 1) {echo "Completed" ;}  else { echo "not completed" ;} ?> </span> 
	<br />
   <a href="level7.php" style="color:red"> Back </a> | <a href="level8.php" style="color:red"> Index </a> | Next   
   <br /><br /><br />
   </center>
   <form method="post" >
   username:<br />
   <input type="text" name="username" id="user" value="" size="25" maxlength="30" /><br /><br />
 	password:<br />
   <input type="password" name="password" id="pass" value="" size="25" maxlength="30" /><br /><br /><br />
   <input type="hidden" name="passwordfile" value="extras/secret.txt" />
   <button name="submit" value="submit" type="submit" >Submit </button>
   </div> 
	</form>

</div>