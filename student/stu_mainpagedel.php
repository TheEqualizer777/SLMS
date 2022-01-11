<?
include("conn.php");
session_start();
$student_Id=$_SESSION["student_Id"];
$leave_App_Id=$_GET["leave_App_Id"];

$del="delete
      from leave_tbl
      where leave_App_Id=$leave_App_Id";

$que=mysqli_query($conn,$del);
header("location:stu_mainpageview.php");
echo "you have removed the Application succefully";
?>
