<?php
session_start();
session_unset();
session_destroy();
echo "you are successfully logged out" ;
header('Location:index.php');
?>