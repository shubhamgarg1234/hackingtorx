<?php
?>
    <!-- center part -->
   <div id="center"><br /><br />
   <center>
   <b><span style="font-size:30px ;"> Main Level 1 </span></b><br />
   Status :<span style="color:red"> <?php if($row1['level1'] == 1) {echo "Completed" ;}  else { echo "not completed" ;} ?></span> 
   <br />
   Back | <a href="level1.php" style="color:red"> Index </a> | <a href="level2.php" style="color:red"> Next </a>
 
   </center>
   <br /><br /><br />
   <form method="post" action="<?php $_SERVER['PHP_SELF'] ;?>">
   username:<br />
   <input type="text" name="username" value="" size="25" maxlength="30" /><br /><br />
   password:<br />
   <input type="password" name="password" value="" size="25" maxlength="30" /><br /><br /><br />
   <button name="submit" value="submit" type="submit">Submit </button>
   </div> 
	</form>
	
</div>