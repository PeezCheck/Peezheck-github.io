<?php
session_start();?>
<?php
$_SESSION["logged"]="false";
header("Location:index.php");
?>
