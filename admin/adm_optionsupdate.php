<?
include("conn.php");
//session_start();
//$admin_id=$_SESSION["admin_Id"];

$student_Id=$_GET["student_Id"];
$sel="select *
      from student
      where student_Id=$student_Id";
$row=mysqli_query($conn,$sel);

while ($res=mysqli_fetch_row($row))
 {
  $student_Email=$res[2];
  $student_Fname=$res[3];
  $student_Lname=$res[4];
  $student_Gender=$res[5];
  $Student_Reg_Date=$res[6];
}

if (isset($_GET["update"]))
{
  $student_Email=$_GET["student_Email"];
  $student_Fname=$_GET["student_Fname"];
  $student_Lname=$_GET["student_Lname"];
  $student_Gender=$_GET["student_Gender"];
  $Student_Reg_Date=$_GET["Student_Reg_Date"];

  $upd="update student
        set student_Email='$student_Email',
            student_Fname='$student_Fname',
            student_Lname='$student_Lname',
            student_Gender='$student_Gender',
            Student_Reg_Date='$Student_Reg_Date'
        where student_Id=$student_Id";
  $sql=mysqli_query($conn,$upd);
  header("location:adm_optionsview.php");
}
echo "<body>";
echo "<div class='main'>";
echo "<form method='get' action= 'adm_optionsupdate.php'>";
echo "<input type='hidden' name='student_Id' value='$student_Id'>";
echo "<table>";
echo "<caption><b>UPDATE</b></caption>";
echo "<tr><th>Student_Email</th> <th>Student_Fname</th>
        <th>Student_Lname</th> <th>Student_Gender</th>
          <th>Student_Reg_Date</th></tr>";
echo "<tr>";
echo "<td> <input type='email' name='student_Email' value='$student_Email'> </td>";
echo "<td> <input type='text' name='student_Fname' value='$student_Fname'> </td>";
echo "<td> <input type='text' name='student_Lname' value='$student_Lname'> </td>";
echo "<td> <input type='text' name='student_Gender' value='$student_Gender'> </td>";
echo "<td> <input type='date' name='Student_Reg_Date' value='$Student_Reg_Date'> </td>";
echo "</tr>";
echo "</table> <br>";
echo "<input type='submit' name='update' value='UPDATE'>";
echo "</form>";
echo "</div>";
echo "</body>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      body
      {
        background-color: #7fcec5;
        background-image: linear-gradient(315deg, #7fcec5 0%, #14557b 74%);
      }
      .main
      {
        postion: relative;
        margin-top: 10%;
        margin-left: 10%;
        margin-right: 10%;
        overflow:auto;
        border-radius: 10px;
        padding: 80px;
        font-family: Lato;
        justify-content: center;
        color: white;
        box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
      }
      table
      {
        width: 100%;
        border-color: #3E8AB5;
        box-shadow: inset 0 0 2000px rgba(255, 255, 255, .2);
      }
      td,th
      {
        color: white;
        font-weight: bold;
        font-family:Tahoma  ;
        text-align: center;
        height: 40px;
        box-shadow: inset 0 0 10px rgba(255, 255, 255, .2);
      }
      input[type=submit]
      {
        box-shadow: inset 0 0 35px rgba(255, 255, 255, .3);
        background: transparent;
        border: none;
        color:black;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        font-weight: bold;
        margin: 4px 2px;
        transition-duration: 0.5s;
        cursor: pointer;
        width: 100%;
      }
      input[type=submit]:hover
      {
        background-image: linear-gradient(315deg, #FF3CAC 0%, #82089c 50%, #10619e 100%);
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        color :#a3d0fd;
      }
      input[type=text],input[type=email],input[type=date]
      {
        border: none;
        text-align: center;
        background: transparent;
        height: 40px;
        width: 100%;
        color: white;
        font-size: 20px;
        font-family:Tahoma;
        font-weight: bold;
      }
      caption
      {
        font-family:serif;
        font-size: 30px;
        color: #ffffc4;
      }
      </style>
    </style>
  </head>
  <body>

  </body>
</html>
