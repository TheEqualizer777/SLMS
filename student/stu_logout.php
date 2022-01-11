<?
include("conn.php");
session_start();

session_destroy();
header("location:stu_login.php");
?>
