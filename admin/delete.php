<?
include("conn.php");

$leave_typeId=$_GET["leave_typeId"];

$del="delete
      from leave_typetbl
      where leave_typeId=$leave_typeId";

$que=mysqli_query($conn,$del);
header("location:adm_mainpageview.php");
?>
