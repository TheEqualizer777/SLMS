<?
include("conn.php");
session_start();
//$_SESSION["id"];


session_destroy();
header("location:adm_login.php");
?>
