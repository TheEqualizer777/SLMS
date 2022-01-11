<?
include("conn.php");
session_start();
$student_Id=$_SESSION["student_Id"];
$student_pass=$_SESSION["student_pass"];

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
    <title></title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <style >
    p /* paragraphs in general*/
        {
          color: rgb(255, 255, 255);
          margin: 0px;
          text-align:center;
          font-size: 18px;
          font-style: oblique;
          font-weight: bold;
        }
    .main
        {
          background-image: linear-gradient(#cd206d,#ff927e);
          text-align: center;
          margin: 5% 25% 2%;
          height: 750px;
          padding: 5% 5%;
        }
    .main:hover
        {
          box-shadow: 0 19px 30px 0 rgba(0,0,0,0.24),0 19px 50px 0 rgba(0,0,0,0.29);
        }
    input[type=text], input[type=email],input[type=password]
        {
          background: transparent;
          width: 45%;
          padding: 2px 10px;
          margin: 18px 0;
          box-sizing: border-box;
          border: none;
          border-bottom: 2px solid #c4e0e5;
        }
    input[type=submit]
        {
          background: transparent;
          border: none;
          color:#000000;
          padding: 16px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          font-weight: bold;
          margin: 4px 5px;
          transition-duration: 0.5s;
          cursor: pointer;
          width: 70%;

        }
    input[type=submit]:hover
        {
          background-image: linear-gradient(#61045f, #1d2671);
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
          color :#2f95fb;
        }

    </style>

    <body style="background-image: linear-gradient(#1d2671,#ed4264,#ba5370 );">
      <div class="main">

    <form action="stu_PassRecoveryHandler.php" method="post">
          <p>Enter Your ID</p>
          <input type="text" name="student_Id">
          <br>
          <p>New Password</p>
          <input type="password" name="new_password">
          <br>
          <p>Confirm Password</p>
          <input type="password" name="confirm_password">
          <br><br><br><br>
          <input type="submit" name="submit" value="Recover My Password">
    </form>
    <a href="stu_mainpage.php"> <input type="submit" name="Go Back" value="Go Back"></a>

  </div>
    </body>
  <?
  include("footer.html");
  ?>
</html>
