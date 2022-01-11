<?
include("conn.php");
session_start();
$admin_id=$_SESSION["admin_Id"];

if (isset($_POST["add"]))
{
  if (!empty($_POST["student_Id"]) && !empty($_POST["student_pass"]) &&
      !empty($_POST["student_Email"])&& !empty($_POST["student_Fname"]) &&
      !empty($_POST["student_Lname"]) && !empty($_POST["student_Gender"]) &&
      !empty($_POST["Student_Reg_Date"]))
  {
      $student_Id=$_POST["student_Id"];
      $student_pass=$_POST["student_pass"];
      $student_Email=$_POST["student_Email"];
      $student_Fname=$_POST["student_Fname"];
      $student_Lname=$_POST["student_Lname"];
      $student_Gender=$_POST["student_Gender"];
      $Student_Reg_Date=$_POST["Student_Reg_Date"];
      //query to create new student record in student table
      $ins="insert into student(student_Id,student_pass,student_Email,student_Fname,student_Lname,student_Gender,Student_Reg_Date)
              values('$student_Id','$student_pass', '$student_Email','$student_Fname','$student_Lname','$student_Gender','$Student_Reg_Date')";
      //echo $ins;
      $que=mysqli_query($conn,$ins);
      echo  "<h1>You have Added  New Student succefully</h1>";

  }
  else
  {
      echo "<h1>Please Fill Up The Fields</h1>";
  }
}
if (isset($_POST["modify"]))
{
  header("location:adm_optionsview.php?student_Id=$student_Id");
}


$sel= "select admin_Fname,admin_Lname
      FROM admin
      WHERE admin_Id = $admin_id";
$que=mysqli_query($conn,$sel);
$row=mysqli_fetch_row($que);
$Fname=$row[0];
$Lname=$row[1];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>adm_options</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <?
    include("adm_dashbord.php");
    include("adm_headerNav.php");
    ?>
  </header>
  <style media="screen">
  h1
  {
    color: white;
    text-align: center;
  }
  body
  {
    background-image: linear-gradient(#4568dc,#b06ab3,#3a1c71 );
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
    width: 50%;
    margin-left: 20%;
    border-color: #3E8AB5;
    box-shadow: inset 0 0 2000px rgba(255, 255, 255, .2);
  }
  td
  {
    color: white;
    font-weight: bold;
    font-family:Tahoma  ;
    text-align: center;
    height: 40px;
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
    width: 70%;
    color: white;
    font-size: 20px;
    font-family:Tahoma;
    font-weight: bold;
    border-bottom: 2px solid #c4e0e5;
  }
  caption
  {
    font-family:serif;
    font-size: 30px;
    color: #ffffc4;
  }
  </style>
  </head>
  <body >

    <section class="page-content">
    <div class="main">

        <form action="adm_options.php" method="post">
          <table>
            <caption><h3>Manage Students</h3></caption>
              <tr>  <td>Student_ID</td>       </tr>
              <tr>  <td><input type="text" name="student_Id"> </td></tr>
              <tr>  <td>Student_Password</td> </tr>
              <tr>  <td><input type="text" name="student_pass"> </td></tr>
              <tr>  <td>Student_Email</td>    </tr>
              <tr>    <td><input type="email" name="student_Email"></td></tr>
              <tr>  <td>Student_Fname</td>    </tr>
              <tr>    <td> <input type="text" name="student_Fname"> </td></tr>
              <tr>  <td>Student_Lname</td>    </tr>
              <tr>    <td> <input type="text" name="student_Lname"> </td></tr>
              <tr>  <td>Student_Gender</td>   </tr>
              <tr>    <td> <input type="text" name="student_Gender"> </td></tr>
              <tr>  <td>Student_Reg_Date</td> </tr>
              <tr>  <td> <input type="date" name="Student_Reg_Date"> </td></tr>
          </table>
              <input type="submit" name="add" value="Add">
              <input type="submit" name="modify" value="Modify">
        </form>

    </div>
    <script type="text/javascript" src="../js/javascript.js"></script>
    </section>
  </body>
  <?
  include("footer.html");
  ?>

</html>
