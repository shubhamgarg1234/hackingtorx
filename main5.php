<?php
?>
    <!-- center part -->
   <div id="center"><br /><br />
   <center>
   <b><span style="font-size:30px ;"> Main Level 5 </span></b><br />
   Status : <span style="color:red"><?php if($row1['level5'] == 1) {echo "Completed" ;}  else { echo "not completed" ;} ?> </span> 
	<br />
   <a href="level4.php" style="color:red" > Back </a> | <a href="level5.php" style="color:red"> Index </a> | <a href="level6.php" style="color:red"> Next </a>   
	</center>   
   <br /><br /><br />
   <?php
   if($_SESSION['level5'] != 1)
   { 
   ?>
   <form method="post" id="levelform">
         <script language="JavaScript" type="text/javascript">
	           var pass;       
	       	  pass=prompt("Password","");
	           if (pass=="9286jas") {
	                window.location.href="level5.php?pass=9286jas";
	           }
        	</script>
   </form>
	<?php
	}
	?>
</div>