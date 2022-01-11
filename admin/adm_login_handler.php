<?
//connecting to DB
include("conn.php");
echo "<div class='main'>";
//checking if the login button has pressed
if (isset($_POST["submit"]))
  {
    //checking the input fields are empty or not
    if (!empty($_POST["admin_Id"]) && !empty($_POST["adm_pass"]))
     {
       $admin_id=$_POST["admin_Id"];
       $pass=$_POST["adm_pass"];
       session_start();
       $_SESSION["admin_Id"] = $admin_id;
       //if the values are entered lets store them in var

      //verify the id and password with DB
       $sel = "select admin_Id, admin_pass
                from admin
                where admin_Id='$admin_id' and admin_pass='$pass' ";
      $que = mysqli_query($conn,$sel);
      $num = mysqli_num_rows($que);
        if($num ==0)
        {
          //if data is wrong redirect the user to same page and display appropriate message
          echo "<h2> Admin ID or Password is wrong!!</h2>";
          //header("location:adm_login.php?admin_Id=$admin_id&adm_pass=$pass");

        }
        else
        {
          //if data is correct redirect user to mainpgae of admin
          header("location:adm_mainpage.php?admin_Id=$admin_id&adm_pass=$pass");

        }

    }
    else
    {
        echo "<h2>Admin ID or Password still empty, Please fill up the fields</h2>";
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
    <a href="adm_login.php"> <input type="submit" name="Go Back" value="Go Back"></a>
  </body>
</html>
