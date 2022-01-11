<?
include("conn.php");

$sel= "select *
      FROM student";
$que=mysqli_query($conn,$sel);
while($row=mysqli_fetch_row($que))
{
  $student_Id0=$row[0];
  //$student_email0=$row[2];
}

if (isset($_POST["submit"]))
{
if (!empty($_POST["student_Id"]) && !empty($_POST["new_password"])
 && !empty($_POST["confirm_password"]))
{
  //$student_email=$_POST["student_email"];
  $student_Id=$_POST["student_Id"];
  $new_password=$_POST["new_password"];
  $confirm_password=$_POST["confirm_password"];

  $sel= "select *
        FROM student
        WHERE student_Id = $student_Id";
  $que=mysqli_query($conn,$sel);
  $num = mysqli_num_rows($que);

  if ($num ==0)
  {
    echo "<h1>Wrong ID / Email .. Try Again!!</h1>";
  }
  else
    {
       if ($new_password == $confirm_password)
       {
         $upd = "update student
                 set student_pass ='$new_password'
                 where student_Id=$student_Id";
          $que1=mysqli_query($conn,$upd);
         echo "<h1>you have Recovered your password successfully</h1>";
         header("location:stu_login.php");
       }
       elseif ($new_password != $confirm_password)
        {
            echo "<h1>new password is not matching with confirm password</h1>";
        }
    }

}
else
  {
    echo "<h1>Some fields still empty</h1>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
      <style media="screen">
        h1
        {
            color: white;
            text-align: center;
        }
        body
        {
          background-image: linear-gradient(315deg, #000428 , #004e92);
        }
        input[type=text],[type=password],[type=email]
        {
          width: 100%;
          background: transparent;
          font-size: 20px;
          font-family: serif;
          border-bottom: 2px solid #c4e0e5;
          text-align: center;
          color: white;
        }
        p
        {
          text-align: center;
          font-size: 18px;
          font-family: serif;
        }
        input[type=button]
            {
              box-shadow: inset 0 0 20px rgba(255, 255, 255, .3);
              background: transparent;
              border: none;
              color:orange;
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
          color: white;
          font-size: 25px;
          font-weight: bold;
          font-family: Tahoma;
          background-image: linear-gradient(#02aab0  ,#00cdac);
        }
        input[type=button]:hover
        {
          color: white;
          font-size: 25px;
          font-weight: bold;
          font-family: Tahoma;
          background-image: linear-gradient(#02aab0  ,#00cdac);
        }
      </style>
  </head>
    <body >
      <div class="main">

    <form action="stu_forgetpassword.php" method="post">

          <p>Enter Your ID</p>
          <input type="text" name="student_Id">
          <br><br>
          <p>New Password</p>
          <input type="password" name="new_password">
          <br><br><br>
          <p>Confirm Password</p>
          <input type="password" name="confirm_password">
          <br><br><br><br>
          <input type="submit" name="submit" value="Recover My Password">
          <a href="stu_login.php"><input type="button" name="button" value="Go Back"></a>
    </form>

  </div>
    </body>


  <?
  include("footer.html");
  ?>
</html>
