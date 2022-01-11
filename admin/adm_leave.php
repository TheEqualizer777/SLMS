<?
include("conn.php");
session_start();
$admin_id=$_SESSION["admin_Id"];


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

    <?
    include("adm_dashbord.php");
    include("adm_headerNav.php");
    ?>
    <style media="screen">
      body
      {
        background-attachment: fixed;
        background-image: linear-gradient(135deg, #FF3CAC 0%, #82089c 50%, #10619e 100%);
      }
      .main
      {
        postion: relative;
        margin-top: 10%;
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
        width: 100%;
        border-color: #3E8AB5;
        box-shadow: inset 0 0 2000px rgba(255, 255, 255, .2);
      }
      caption
      {
        font-family:serif;
        font-size: 30px;
        color: #ffffc4;
      }
      td
      {
        box-shadow: inset 0 0 180px rgba(255, 200, 0, .3);
        font-weight: bold;
        font-family:Tahoma  ;
        text-align: center;
        height: 40px;
      }
      input[type=button]
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
        height: 100%;
      }
      input[type=button]:hover
      {
        background-image: linear-gradient(315deg, #FF3CAC 0%, #82089c 50%, #10619e 100%);
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        color :#a3d0fd;
      }
      .app_id
      {
        box-shadow: inset 0 0 150px rgba(0, 0, 0, .8);
      }
      .admin_Id
      {
        box-shadow: inset 0 0 80px rgba(75, 0, 0, .7);
      }
      .leave_Description,.Student_ID,.leave_Duration,.Leave_Type
      {
        box-shadow: inset 0 0 100px rgba(0, 50, 0, .5);
      }
      .Leave_Status,.Admin_Remark
      {
        color: black;
        box-shadow: inset 0 0 180px rgba(255, 255,255 , .6);
      }
    </style>
  </head>
    <body>
    <section class="page-content">
      <div class="main">
        <form action="adm_leave.php" method="get">
          <table>
            <caption><h3>Manage Leaves Application</h3></caption>
              <tr>
                <td>Leave_App_Id</td>
                <td>Leave_Type</td>
                <td>Student_ID</td>
                <td>leave_Duration</td>
                <td>leave_Description</td>
                <td>Leave_Status</td>
                <td>Admin_Remark</td>
                <td>admin_Id</td>
                <td>UPDATE</td>
              </tr>
              <?
              $sel="select
                    leave_tbl.leave_App_Id,
                    leave_typetbl.leave_type,
                    student.student_Id,
                    leave_tbl.leave_duration,
                    leave_tbl.leave_Description,
                    leave_tbl.leave_status,
                    leave_tbl.Admin_Remark,
                    admin.admin_Id
                    from leave_tbl,admin,student,leave_typetbl
                    where student.student_Id =leave_tbl.student_Id
                    AND admin.admin_Id=leave_tbl.admin_Id
                    AND leave_typetbl.leave_typeId=leave_tbl.leave_typeId
                    and admin.admin_Id=$admin_id";
              $que=mysqli_query($conn,$sel);
              while ($row=mysqli_fetch_row($que))
              {

                echo "<tr>";
                echo "<td class='app_id'>$row[0]</td>";
                echo "<td class='Leave_Type'>$row[1]</td>";
                echo "<td class='Student_ID'>$row[2]</td>";
                echo "<td class='leave_Duration'>$row[3]</td>";
                echo "<td class='leave_Description'>$row[4]</td>";
                echo "<td class='Leave_Status'>$row[5]</td>";
                echo "<td class='Admin_Remark'>$row[6]</td>";
                echo "<td class='admin_Id'>$row[7]</td>";
                echo "<td><a href='adm_leave_update.php?leave_App_Id=$row[0]'><input type ='button' name='update' value = 'Update'></td>";
                echo "</tr>";
              }
              ?>
          </table>
        </div>
      </form>
      <br><br><br><br><br><br>
      <br><br><br><br><br><br>
      <br><br><br><br><br><br>
    </section>
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>
  <?
  include("footer.html");
  ?>
</html>
