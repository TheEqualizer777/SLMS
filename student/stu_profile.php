<?
include('conn.php');
session_start();
$student_Id=$_SESSION["student_Id"];
$student_pass=$_SESSION["student_pass"];
$sel = "select*
        from student
        where student_Id=$student_Id";
$que=mysqli_query($conn,$sel);

$row=mysqli_fetch_row($que);
$student_Id=$row[0];
$student_pass=$row[1];
$student_Email=$row[2];
$student_Fname=$row[3];
$student_Lname=$row[4];
$student_Gender=$row[5];
$student_Reg_date=$row[6];

$sel= "select student_Fname,student_Lname
      FROM student
      WHERE student_Id = $student_Id";
$que=mysqli_query($conn,$sel);
$row=mysqli_fetch_row($que);
$studentname=$row[0];
$studentLname=$row[1];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>stu_profile</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/stu_profile.css">
    <style media="screen">
      input[type=text]
      {
        font-weight: bold;
        font-size: 16px;
        text-align: center;
        width: 100%;
        font-family: serif;
      }
    </style>
    <?
    include("dashbord.php");
    include("headerNav.php");
    ?>
  </head>
  <body >
    <!--style="background-image:linear-gradient(#1268dc,#b06eb5);-->
      <form action="stu_profilehandler.php" method="get">
        <div class="main">
          <table>
            <caption class="caption">Personal Information</caption>
            <tr>
              <td class="ftd">Id</td>
              <td class="std"><input type="text" name="student_Id" value="<?echo $_SESSION['student_Id'];?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Password</td>
              <td class="std"><input type="text" name="student_pass" value="<?echo $student_pass?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Email</td>
              <td class="std"><input type="text" name="student_Email" value="<?echo $student_Email?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">First Name</td>
              <td class="std"><input type="text" name="student_Fname" value="<?echo $student_Fname?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Last Name</td>
              <td class="std"><input type="text" name="student_Lname" value="<?echo $student_Lname?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Reg_Date</td>
              <td class="std"><input type="text" name="student_Reg_date" value="<?echo $student_Reg_date?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Gender</td>
              <td class="std"><input type="text" name="student_Gender" value="<?echo $student_Gender?>" readonly></td>
            </tr>
          </table>
          <br>
            <input type="submit" name="edit" value="Edit">
        </div>
      </form>
    </section>
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>
<?
include("footer.html");
?>
</html>
