<?
//connecting to DB
include("conn.php");

echo "<div class='main'>";
//checking if the login button has pressed
if (isset($_POST["submit"]))
  {
    //checking the input fields are empty or not
    if (!empty($_POST["student_Id"]) && !empty($_POST["student_pass"]))
     {
       //if the values are entered lets store them in var
       $student_Id=$_POST["student_Id"];
       $student_pass=$_POST["student_pass"];
       session_start();
       $_SESSION["student_Id"] = $student_Id;
       $_SESSION["student_pass"]=$student_pass;
      //verify the id and password with DB
       $sel = "select Student_Id, student_pass
                from student
                where student_Id=$student_Id and student_pass='$student_pass' ";
      $que = mysqli_query($conn,$sel);
      $num = mysqli_num_rows($que);
        if($num ==0)
        {
          //if data is wrong redirect the user to same page and display appropriate message
          echo "<h2> Student ID or Password is wrong!!</h2>";
          //header("location:stu_login.php?id=$txtid&pass=$pass");
        }
        else
        {
          //if data is correct redirect user to mainpgae of admin
          header("location:stu_mainpage.php?student_Id=$student_Id&student_pass=$student_pass");

        }


    }
    else
    {
        echo "<h3>Student ID or Password still empty, Please fill up the fields</h3>";
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
    <a href="stu_login.php"> <input type="submit" name="Go Back" value="Go Back"></a>
  </body>
</html>
