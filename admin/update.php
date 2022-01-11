<?
include("conn.php");
session_start();
$admin_id=$_SESSION["admin_Id"];
//reciving the PK of leave_typetbl by url tokens from adm_mainpageview line 26
$leave_typeId=$_GET["leave_typeId"];
//selecting everything where leave_Id equal to the particular value of the record that
//we clicked update on so by that we will update records individually
$sel = "select *
        from leave_typetbl
        where leave_typeId = $leave_typeId"; //need for single quate cuz it is integer
//performing the query in DB
$row=mysqli_query($conn,$sel);

while ($res=mysqli_fetch_row($row))
 {
  $leave_type=$res[2];
  //$leave_duration=$res[3];
  //$admin_Remark=$res[4];
}
 //here there is no need for while loop becauese we just need to display one record
if (isset($_GET["update"]))
{
  $leave_type=$_GET["leave_type"];
  //$leave_duration=$_GET["leave_Duration"];
  //$admin_Remark=$_GET["admin_Remark"];

  $upd="update leave_typetbl
        set leave_type='$leave_type'
        where leave_typeId=$leave_typeId";
  $sql=mysqli_query($conn,$upd);
  header("location:adm_mainpageview.php");
}
echo "<body>";
echo "<div class='main'>";
echo "<form method='get' action= 'update.php'>";
echo "<input type='hidden' name='leave_typeId' value='$leave_typeId'>";
echo "<table border='1'>";
echo "<caption><b>UPDATE</b></caption>";
echo "<tr><th>Admin ID</th> <th>Leave_Type</th></tr>";
echo "<tr>";
echo "<td> <input type='text' name='admin_Id' value='$admin_id'readonly> </td>";
echo "<td> <input type='text' name='leave_type' value='$leave_type'> </td>";
//echo "<td> <input type='text' name='leave_Duration' value='$leave_duration'> </td>";
//echo "<td> <input type='text' name='admin_Remark' value='$admin_Remark'> </td>";
echo "</tr>";
echo "</table> <br>";
echo "</div>";
echo "<input type='submit' name='update' value='Update'>";
echo "</form>";
echo "</body>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
      <link rel="styleSheet" href="../style/adm_update_view.css">
      <style media="screen">
        body
        {
          background-color: #7f5a83;
          background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%);
        }
        table
        {
          width: 80%;
          margin-left: 10%;
        }
        input[type=submit]
        {
          height: 10%;
          font-family: Tahoma;
        }
        input[type=text]
        {
          font-size: 20px;
          height: 100%;
          width: 100%;
          text-align: center;
          color: white;
          font-weight: bold;
          font-family: Tahoma;
        }
      </style>
  </head>
  <body>
  </body>
</html>
