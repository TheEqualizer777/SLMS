<?
include("conn.php");
session_start();
$student_Id=$_SESSION["student_Id"];
$student_pass=$_SESSION["student_pass"];
if (isset($_POST["apply"]))
{
  if (!empty($_POST["leave_duration"]) && !empty($_POST["leave_Description"]))
  {
      $select_leavetype=$_POST["select_leavetype"];
      $leave_duration=$_POST["leave_duration"];
      $leave_Description=$_POST["leave_Description"];
      //$select_student_Id=$_POST["select_student_Id"];
      $select_admin_Id=trim($_POST["select_admin_Id"]);

      $ins="insert into leave_tbl
      (leave_typeId, student_Id,leave_duration,leave_Description,admin_Id)
       values ($select_leavetype,$student_Id,'$leave_duration','$leave_Description',$select_admin_Id)";
       //echo $ins;
      $que=mysqli_query($conn,$ins);
      $msg= "<h2>You have Created Application leave succefully</h2> </font>";
      echo $msg;
  }
  else
  {
      echo "<h2>Please Fill Up The Fields</h2>";
  }
}
if (isset($_POST["view"]))
{
  header("location:stu_mainpageview.php");
}
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
    <title>stu_mainpage</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <style media="screen">
      h2
      {
        color: white;
        text-align: center;
        font-family: serif;

      }
      body
      {
        background-color: #36096d;
        background-image: linear-gradient(120deg, #36096d 0%, #37d5d6 100%);

      }
      td
      {
        color: white;
        box-shadow: inset 0 0 80px rgba(220, 200, 220, .3);
      }
      select, option
      {
        width: 100%;
        height: 100%;
        background: transparent;
        color: black;
        font-size: 17px;
        font-weight: bold;
        text-align: center;
      }
      caption
      {
        background-image: linear-gradient(to right, rgba(0,0,75,.3), rgba(0,0,0,0.5));
        box-shadow: inset 0 0 100px rgba(255, 255, 255, .2);
      }
      input[type=submit]:hover
      {
        color: white;
        background-image: linear-gradient(315deg, #63d471 0%, #233329 74%);
        font-size: 20px;
      }
      input[type=text]
      {
        width: 90%;
        height: 80%;
        color: #f7f7e7;
        font-size: 18px;
        font-weight: bold;
        font-family: sans-serif;
      }
    </style>
    <?
    include("dashbord.php");
    include("headerNav.php");
    ?>
  </head>
  <body >
    <section class="page-content">
        <div class="main">
          <form action="stu_mainpage.php" method="post">
            <table>
              <caption><h3>Leave Application</h3></caption>
                <tr>
                  <td>Leave_Type</td>
                  <td>leave_Duration</td>
                  <td>leave_Description</td>
                  <td>Admin_ID</td>
                </tr>
                <tr>
                  <td>
                    <select name="select_leavetype">
                      <?
                        $sql="select * from leave_typetbl";
                        $que = mysqli_query($conn,$sql); //this function helps to excute query and it recieves two parameters
                        while ($row=mysqli_fetch_row($que))
                         {
                          echo $row[0]." ".$row[2]."<br>";
                        ?>
                          <option value=" <? echo $row[0]; ?>">
                                          <? echo $row[2]; ?>
                                        </option>
                        <?
                        } //this one is important to be here so that the vslues shows in the field in select list in the table
                        ?>
                    </select>
                 </td>
                  <td><input type="text" name="leave_duration"> </td>
                  <td><input type="text" name="leave_Description"> </td>
                  <td><select name="select_admin_Id">
                    <?
                      $sql="select DISTINCT admin.admin_Id
                        FROM admin";
                      $que = mysqli_query($conn,$sql); //this function helps to excute query and it recieves two parameters
                      while ($row=mysqli_fetch_row($que))
                       {
                        echo $row[0]." ".$row[2]."<br>";
                      ?>
                        <option value=" <? echo $row[0]; ?>">
                                        <? echo $row[0]; ?>
                                      </option>
                      <?
                      } //this one is important to be here so that the vslues shows in the field in select list in the table
                      ?>
                  </select></td>
                </tr>
            </table>
                <input type="submit" name="apply" value="Apply">
                <input type="submit" name="view" value="View to Update / Delete">
          </form>

        </div>
    <script type="text/javascript" src="../js/javascript.js"></script>
    </section>
  </body>
  <?
  include("footer.html");
  ?>
</html>
