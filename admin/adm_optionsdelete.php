<?
include("conn.php");
$student_Id=$_GET["student_Id"];

$del=" delete
      from student
      where student_Id=$student_Id";

$que=mysqli_query($conn,$del);
header("location:adm_optionsview.php");

?>
