<?php
?>
    <!-- center part -->
<div id="center"><br /><br />
   <center>
   <b><span style="font-size:30px ;"> Main Level 6 </span></b><br />
   Status : <span style="color:red"><?php if($row1['level6'] == 1) {echo "Completed" ;}  else { echo "not completed" ;} ?> </span>
	<br />
   <a href="level5.php" style="color:red"> Back </a> | <a href="level6.php" style="color:red"> Index </a> | <a href="level7.php" style="color:red"> Next </a>
   <br /><br /><br />
   </center>
   <form method="post">
       <fieldset>
       Login as Ronald<br /><br />
       User:<br />

       <select name="user" style="width: 100%; background-color: #eeeeee">
             <option>John</option>
             <option>Petter</option>
             <option>David</option>
             <option>Sam</option>
       </select><br />
       <input type="submit" class="submit" name="submit" value="Submit"/>

       </fieldset>
    </form>

</div>