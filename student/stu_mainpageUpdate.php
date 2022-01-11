<?
include("conn.php");
session_start();
$student_Id=$_SESSION["student_Id"];
//reciving the PK of leave_typetbl by url tokens from stu_mainpageview line 26
$leave_App_Id=$_GET["leave_App_Id"];
//selecting everything where leave_Id equal to the particular value of the record that
//we clicked update on so by that we will update records individually
$sel = "select leave_duration,leave_Description
        from leave_tbl
        where leave_App_Id = $leave_App_Id"; //need for single quate cuz it is integer
//performing the query in DB
$row=mysqli_query($conn,$sel);

while ($res=mysqli_fetch_row($row))
 {
  $leave_duration=$res[0];
  $leave_Description=$res[1];

}
 //here there is no need for while loop becauese we just need to display one record



if (isset($_GET["update"]))
{
  $leave_App_Id=$_GET["leave_App_Id"];
  $leave_duration=$_GET["leave_duration"];
  $leave_Description=$_GET["leave_Description"];
  $upd="update leave_tbl
        set leave_duration='$leave_duration',
        leave_Description='$leave_Description'
        where leave_App_Id=$leave_App_Id";
    echo $upd;
  $sql=mysqli_query($conn,$upd);
  header("location:stu_mainpageview.php");
}

echo "<div class='main'>";
echo "<form method='get' action= 'stu_mainpageUpdate.php'>";
echo "<input type='hidden' name='leave_App_Id' value='$leave_App_Id'>";
echo "<table>";
echo "<caption><b>Update</b></caption>";
echo "<tr><th>Leave_Duration</th> <th>Leave_Description</th></tr>";
echo "<tr>";
echo "<td> <input type='text' name='leave_duration' value='$leave_duration'> </td>";
echo "<td> <input type='text' name='leave_Description' value='$leave_Description'> </td>";
echo "</tr>";
echo "</table> <br>";
echo "<input type='submit' name='update' value='Update'>";
echo "</form>";
echo "</div>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stu_MainpageUpdate</title>
    <link rel="styleSheet" href="../style/adm_mainpage.css">
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
    <style media="screen">
    .main
    {
      box-shadow: 5px 5px 50px #2e151b;
    }
    body
    {
      background-image: linear-gradient(120deg, #eee2dc -20%, #edc7b7 80%);
    }
    th
    {
      height: 40px;
      box-shadow: inset 0 0 80px rgba(255, 255, 255, .7);
      font-size: 18px;
      color: #ac3b61;
    }
    input[type=text]
    {
      border-bottom: 2px solid #25274d;
    }

    input[type=submit]:hover
    {
      color: #123c69;
      background-image: linear-gradient(150deg, #edc7b7 50%, #eee2dc 74%);
      font-size: 25px;
    }
    input[type=submit]
    {
      background: transparent;
      border: none;
      color:#ee4c7c;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 17px;
      font-weight: bold;
      transition-duration: 0.5s;
      cursor: pointer;
      width: 100%;
    }
    input[type=text]
    {
      font-size: 20px;
      text-align: center;
      font-weight: bold;
    }
    </style>
  </head>
  <body>

  </body>
</html>
