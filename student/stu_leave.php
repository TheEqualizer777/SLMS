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
    <title>stu_leave</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <style media="screen">

    body
    {
      background-color: #36096d;
      background-image: linear-gradient(120deg, #6441a5 0%, #2a0845 100%);

    }
    th
    {
      color: #2a0845;
      box-shadow: inset 0 0 500px rgba(255, 255, 255, 1);
      height:40px;
      font-size: 18px;
      font-weight: bold;
      font-family: sans-serif;
    }
    tr:hover
    {
      background-color: black;
      transition-duration: 0.5s;
      box-shadow: 0px 1px 15px white;
    }
    td
    {
      color: white;
      box-shadow: inset 0 0 80px rgba(220, 200, 220, .3);
    }
    caption
    {
      background-image: linear-gradient(to right, rgba(0,0,75,.3), rgba(0,0,0,0.5));
      box-shadow: inset 0 0 100px rgba(255, 255, 255, .2);
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
            <form action="adm_leave.php" method="get">
              <table>
                <caption><h3>Tracking Leave Status</h3></caption>
                  <tr>
                    <th>Leave_Status</th>
                    <th>Admin Remark</th>
                    <th>Admin_Name</th>
                  </tr>
                  <?
                  $sel="select
                        leave_tbl.leave_App_Id,
                        leave_tbl.leave_status,
                        leave_tbl.Admin_Remark,
                        admin.admin_Fname
                        from leave_tbl,admin,student
                        where student.student_Id =leave_tbl.student_Id
                        AND admin.admin_Id=leave_tbl.admin_Id
                        and student.student_Id=$student_Id";
                  //echo $sel;
                  $que=mysqli_query($conn,$sel);
                  while ($row=mysqli_fetch_row($que))
                  {
                    echo "<tr>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "</tr>";
                  }
                  ?>
              </table>
            </form>
          </div>

    </section>
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>
  <?
  include("footer.html");
  ?>
</html>
