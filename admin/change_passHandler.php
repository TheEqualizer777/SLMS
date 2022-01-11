<?
session_start();
include("conn.php");

echo "<div class='main'>";
if(isset($_POST['submit']))
{
if (!empty($_POST["txtid"]) && !empty($_POST["old_password"]) &&
    !empty($_POST["new_password"]) && !empty($_POST["confirm_password"]))
{
  $adm_id  =$_POST["txtid"];
  $oldpass = $_POST["old_password"];
  $newpass = $_POST["new_password"];
  $confpass= $_POST["confirm_password"];

  $sel= "select admin_id,admin_pass
          from admin
          where admin_id =$adm_id and admin_pass='$oldpass'";

  $sql = mysqli_query($conn,$sel);
  $num = mysqli_num_rows($sql);
  if($num == 0)
  {
    //in case the admin id or the password doesnt match with DB
    //entering wronf data will redirect user to same page but wont display proper mssg
    echo "<h1>Wrong ID or Password Please try Again..!!</h1>";
  }

    else
    {
       if ($newpass == $confpass)
       {
         $upd = "update admin
                 set admin_pass =$newpass
                 where admin_id=$adm_id";
          $que=mysqli_query($conn,$upd);
         echo "<h2>You have update your password successfully</h2>";

       }
       elseif ($newpass != $confpass)
        {
            echo "<h2>New password is not matching with confirm password</h2>";
        }
    }
}
else
  {
    echo "<h2>Some Fields are Still Empty</h2>";
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
      h2
      {
        color: white;
      }
    </style>
  </head>
  <body>
    <a href="adm_chngpass.php"> <input type="submit" name="Go Back" value="Go Back"></a>
  </body>
</html>
