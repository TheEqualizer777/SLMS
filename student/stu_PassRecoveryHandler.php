<?
session_start();
include("conn.php");
$student_Id=$_SESSION["student_Id"];

echo "<div class='main'>";
if(isset($_POST['submit']))
{
if (!empty($_POST["student_Id"]) && !empty($_POST["new_password"])
    && !empty($_POST["confirm_password"]))
{
  $student_Id = $_POST["student_Id"];
  $newpass = $_POST["new_password"];
  $confpass= $_POST["confirm_password"];

  $sel= "select student_pass
          from student
          where student_Id =$student_Id";
//echo $sel;
  $sql = mysqli_query($conn,$sel);
  $num = mysqli_num_rows($sql);
  if($num == 0)
  {
    //in case the admin id or the password doesnt match with DB
    //entering wronf data will redirect user to same page but wont display proper mssg
    echo "<h1>Wrong ID please try Again!!</h1>";
  }
  else
    {
       if ($newpass == $confpass)
       {
         $upd = "update student
                 set student_pass ='$newpass'
                 where student_Id=$student_Id";
          $que=mysqli_query($conn,$upd);
         echo "<h1>you have update your password successfully</h1><br><br>";
         header("location:stu_login.php");
       }
       elseif ($newpass != $confpass)
        {
            echo "<h1>new password is not matching with confirm password</h1>";
        }
    }
}
else
  {
    echo "<h1>Some Fields Still Empty Try Again..!!</h1>";
  }
}
echo "</div>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <style media="screen">
      h2,h1
      {
        color: white;
      }
    </style>
  </head>
  <body>
    <a href="stu_PassRecovery.php"> <input type="submit" name="Go Back" value="Go Back"></a>
  </body>
</html>
