<?php
?>
    <!-- center part -->
   <div id="center"><br /><br />
   <center>
   <b><span style="font-size:30px ;"> Main Level 2 </span></b><br />
   Status :<span style="color:red"> <?php if($row1['level2'] == 1) {echo "Completed" ;}  else { echo "not completed" ;} ?> </span>
   <br />
   <a href="level1.php" style="color:red" > Back </a> | <a href="level2.php" style="color:red"> Index </a> | <a href="level3.php" style="color:red"> Next </a>
   <br /><br /><br />
   </center>
   <form method="post">
   username:<span style="color:#000000">resu</span><br />
   <input type="text" name="username" value="" size="25" maxlength="30" /><br /><br />
   password:<span style="color:#000000">ssap</span><br />
   <input type="password" name="password" value="" size="25" maxlength="30" /><br /><br /><br />
   <button name="submit" value="submit" type="submit">Submit </button>
   </div> 
	</form>

</div>