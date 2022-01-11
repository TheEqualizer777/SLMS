<?
include("conn.php");
session_start();
$student_Id=$_SESSION["student_Id"];
echo "<body>";
echo "<div class='main'>";
echo "<table>";
echo "<tr>
        <th>Leave_Type</th>
        <th>leave_Duration</th>
        <th>leave_Description</th>
        <th>Admin_Name</th>
        <th>UPDATE</th>
        <th>Delete</th>
      </tr>";
$sel="select leave_tbl.leave_App_Id,leave_typetbl.leave_type,
            leave_tbl.student_Id,leave_tbl.leave_duration,
            leave_tbl.leave_Description,admin.admin_Fname
      FROM leave_tbl,student,leave_typetbl,admin
      WHERE leave_typetbl.leave_typeId = leave_tbl.leave_typeId and
      student.student_Id = leave_tbl.student_Id and
      admin.admin_Id=leave_tbl.admin_Id and
      student.student_Id=$student_Id";
//echo $sel;
$que=mysqli_query($conn,$sel);
while ($row=mysqli_fetch_row($que))
{
  echo "<tr>";
  echo "<td>$row[1]</td>";
  //echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";
  echo "<td>$row[5]</td>";
  echo "<td><a href='stu_mainpageUpdate.php?leave_App_Id=$row[0]'><input type='button' name='update'value='update' ></td>";
  echo "<td><a href='stu_mainpagedel.php?leave_App_Id=$row[0]'><input type='button' name='Delete'value='Delete' ></td>";
  echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</body>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stu_MainPageView</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <style>
    body
    {
      background-image: linear-gradient(120deg, #0b0c10 -20%, #1f2833 80%);

    }
    th
    {
      height: 40px;
      color: #4fece1;
      box-shadow: inset 0 0 80px rgba(50, 50, 50, .7);

    }
    td
    {
      color: white;
      box-shadow: inset 0 0 80px rgba(150, 150, 150, .3);
      font-family: sans-serif;
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
    input[type=button]:hover
    {
      color: #efe2ba;
      background-image: linear-gradient(150deg, #1056a1 -10%, #233329 94%);
      font-size: 20px;
    }
    input[type=button]
    {
      box-shadow: inset 0 0 100px rgba(0, 0, 0, .8);
      background: transparent;
      border: none;
      color:#ee4c7c;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 15px;
      font-weight: bold;
      transition-duration: 0.5s;
      cursor: pointer;
      width: 100%;
    }
    </style>
  </head>
  <body>
    <form action="stu_mainpageview.php" method="get">

      <a href="stu_mainpage.php"><input type="button" name="button" value="Go Back"></a>

    </form>
  </body>
</html>
