<?
include("conn.php");
session_start();
$admin_id=$_SESSION["admin_Id"];

if (isset($_POST["add"]))
{
  if (!empty($_POST["Leave_type"]))
  {
      $leave_type=$_POST["Leave_type"];
      //$leave_duration=$_POST["leave_Duration"];
      //$admin_Remark=$_POST["admin_Remark"];
      $ins="insert into leave_typetbl(admin_Id,leave_type)
              values('$admin_id','$leave_type')";
      //echo $ins;
      $que=mysqli_query($conn,$ins);
      $msg= "<font color = 'white'><h2 style='text-align:center;'>You have Added leave Type succefully</h2> </font>";
      echo $msg;
  }
  else
  {
      echo "<font color = 'white'><h2 style='text-align:center;'>Please Enter The Leave type to continue</h2>";
  }
}
if (isset($_POST["view"]))
{
  header("location:adm_mainpageview.php");
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
    <title></title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <?
    include("adm_dashbord.php");
    include("adm_headerNav.php");
    ?>
    <style media="screen">
      input[type=text]
      {
        font-weight: bold;
        font-size: 20px;
        color: white;
        font-family: tahoma;
      }
      td
      {
        box-shadow: inset 0 0 20px rgba(200, 200, 200, .2);
      }
      input[type=submit]:hover
      {
        color: #000;
        background-image: linear-gradient(315deg, #f6fba2 0%, #20ded3 74%);
        transition-delay: 0.5;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <section class="page-content" >
      <div class="main">
        <form action="adm_mainpage.php" method="post">
          <table>
            <caption>Leave Type</caption>
              <tr>
                <td>Admin_ID</td>
                <td>Leave_Type</td>
              </tr>
              <tr>
                <td><b> <?echo $_SESSION["admin_Id"];?></b></td>
                <td><input type="text" name="Leave_type" > </td>
              </tr>
          </table>
          <input type="submit" name="add" value="Create">
          <input type="submit" name="view" value="View to Update/Delete">
      </div>
    </form>
  </section>
    <script type="text/javascript" src="../js/javascript.js"></script>

  </body>

  <?
  include("footer.html");
  ?>
</html>
