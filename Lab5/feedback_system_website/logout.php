<?php
if ( !isset($_SESSION) ) session_start();
print_r($_SESSION);
session_destroy();
header("Location: index.php");
?>