<?
include("conn.php");
session_start();
$leave_App_Id=$_GET["leave_App_Id"];

$sel="select leave_tbl.leave_App_Id,
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
      AND leave_typetbl.leave_typeId=leave_tbl.leave_typeId and
      leave_App_Id=$leave_App_Id";
$que=mysqli_query($conn,$sel);

while ($row=mysqli_fetch_row($que))
{
  $leave_type=$row[1];
  $student_Id=$row[2];
  $leave_duration=$row[3];
  $leave_description=$row[4];
  $leave_status=$row[5];
  $Admin_Remark=$row[6];
  $admin_id=$row[7];
  }
if (isset($_GET["update"]))
{
  $leave_status=$_GET["leave_status"];
  $Admin_Remark=$_GET["Admin_Remark"];
  $upd="update leave_tbl
        set leave_status='$leave_status',
            Admin_Remark='$Admin_Remark'
        where leave_App_Id=$leave_App_Id";

  $sql= mysqli_query($conn,$upd);

  header("location:adm_leave.php");
}

echo "<form method='get' action= 'adm_leave_update.php'>";
echo "<input type='hidden' name='leave_App_Id' value='$leave_App_Id'>";
echo "<div class='main'>";
echo "<table>";
echo "<caption><b>UPDATE</b></caption>";
echo "<tr>
        <th class='app_id'>Leave_App_ID</th>
        <th>Leave_Type</th>
        <th>Student_ID</th>
        <th>leave_Duration</th>
        <th>leave_Description</th>
        <th class='leave_status'>Leave_Status</th>
        <th class='Admin_Remark'>Admin_Remark</th>
      </tr>";
echo "<tr>";
echo "<td class='app_id'> <input type='text' name='leave_App_Id' value='$leave_App_Id' readonly> </td>";
echo "<td> <input type='text' name='Leave_typeId' value='$leave_type' readonly> </td>";
echo "<td> <input type='text' name='Student_ID' value='$student_Id' readonly> </td>";
echo "<td> <input type='text' name='leave_duration' value='$leave_duration' readonly> </td>";
echo "<td> <input type='text' name='leave_Description' value='$leave_description' readonly> </td>";
echo "<td class='leave_status'> <input type='text' name='leave_status' value='$leave_status'> </td>";
echo "<td class='Admin_Remark'><textarea name='Admin_Remark' value='$Admin_Remark' rows='8' cols='80'></textarea></td>";


echo "</tr>";
echo "</table> <br>";
echo "</div>";
echo "<input type='submit' name='update' value='Update'>";
echo "</form>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
    body
    {
      background-attachment: fixed;
      background-image: linear-gradient(#1d2671,#ed4264,#ba5370 );
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
      width:  100%;
      border-color: #3E8AB5;
      box-shadow: inset 0 0 2000px rgba(255, 255, 255, .2);
    }
    caption
    {
      font-family:serif;
      font-size: 35px;
      color: #ffffc4;
    }
    td,th
    {
      box-shadow: inset 0 0 30px rgba(0, 0, 0, .3);
      height: 60px;
      font-size: 20px;
      color: #d8ffff;
    }
    textarea
    {
      border: none;
      text-align: center;
      background: transparent;
      height: 70px;
      width: 100%;
      color: white;
      font-size: 20px;
      font-family:Tahoma;
      font-weight: bold;
    }
    input[type=text]
    {
      border: none;
      text-align: center;
      background: transparent;
      height: 70px;
      width: 100%;
      color: white;
      font-size: 20px;
      font-family:Tahoma;
      font-weight: bold;
    }
    input[type=submit]
    {
      box-shadow: inset 0 0 30px rgba(255, 255, 255, .3);
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
    }
    input[type=submit]:hover
    {
      background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(255,189,189,1) 0%, rgba(255,216,168,1) 62%, rgba(255,248,168,1) 100.7% );
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
      color :#003400;
      font-weight: bold;
      font-size: 30px;
    }
    .Leave_Status,.Admin_Remark
    {
      color: #ffffc4;
      box-shadow: inset 0 0 90px rgba(15, 50, 149, .7);
    }
    </style>
  </head>
  <body>

  </body>
</html>
