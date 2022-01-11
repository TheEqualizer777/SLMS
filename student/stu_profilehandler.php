<?
include('conn.php');
session_start();
$student_Id=$_SESSION["student_Id"];

if (isset($_GET["edit"]))
{
  $student_Email=$_GET["student_Email"];
  $student_Fname=$_GET["student_Fname"];
  $student_Lname=$_GET["student_Lname"];
  $student_Reg_date=$_GET['student_Reg_date'];
  $student_Gender=$_GET["student_Gender"];
$upd=" update student
        set student_Email='$student_Email',
            student_Fname='$student_Fname',
            student_Lname='$student_Lname',
            student_Reg_date='$student_Reg_date',
            student_Gender='$student_Gender'
        where student_Id=$student_Id";
$que=mysqli_query($conn,$upd);
}
if (isset($_GET["continue"]))
{
header("location:stu_profile.php");
}
echo "<body>";
echo "<form method='get' action= 'stu_profilehandler.php'>";
echo "<div class='main'>";
echo "<table>";
echo "<caption><b>UPDATE</b></caption>";
echo "<tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Reg_Date</th><th>Gender</th></tr>";
echo "<tr>";
echo "<td> <input type='text' name='student_Email' value='$student_Email'> </td>";
echo "<td> <input type='text' name='student_Fname' value='$student_Fname'> </td>";
echo "<td> <input type='text' name='student_Lname' value='$student_Lname'> </td>";
echo "<td> <input type='text' name='student_Reg_date' value='$student_Reg_date' readonly> </td>";
echo "<td> <input type='text' name='student_Gender' value='$student_Gender'> </td>";
echo "</tr>";
echo "</table> <br>";
echo "</div>";
echo "<input type='submit' name='edit' value='Update'> <br>";
echo "<input type='submit' name='continue' value='Continue'> <br>";
echo "</form>";
echo "</body>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>stu_profilehandler</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <style media="screen">
    body
    {
      background-image:radial-gradient(#b21f1f 5%, #fdbb2d 110%);
    }
      input[type=text]
      {
        width: 100%;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        font-family: serif;
        color: white;
      }
      th
      {
        font-weight: bold;
        font-size: 20px;
        font-family: serif;
      }
      input[type=submit]
      {
        color: #e7f7ef;
      }
      input[type=submit]:hover
      {
        margin-left: 10%;
        margin-right: 10%;
        width: 80%;
        color: white;
        transition-duration: 0.5;
        background-image: linear-gradient(150deg, #0cbaba 0%, #380036 74%);
      }
    </style>
  </head>
  <body>

  </body>
</html>
