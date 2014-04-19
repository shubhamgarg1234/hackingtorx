<?php 

$fh = fopen( "message.txt" , "a") or die("can't open file");
fwrite($fh, $_POST['name'].' ');
fwrite($fh, $_POST['myemail'].' ');
fwrite($fh, $_POST['message']." \n");
fclose($fh);

?>