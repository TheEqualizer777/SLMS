<?
include("conn.php");
session_start();
$admin_id=$_SESSION["admin_Id"];
echo "<body>";
echo "<div class='main'>";
echo "<table>";
echo "<tr>
        <th>Admin ID</th>
        <th>Leave Type</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>";
$sel="select *
      from leave_typetbl
      where admin_Id='$admin_id'";
$que=mysqli_query($conn,$sel);
while ($row=mysqli_fetch_row($que))
{
  echo "<tr>";
  echo "<td class='admin_col'>$row[1]</td>";
  echo "<td class='leave_type_col'>$row[2]</td>";
  echo "<td><a href='update.php?leave_typeId=$row[0]'><input type ='submit' name='Update' value = 'Update'></td>";
  echo "<td><a href='delete.php?leave_typeId=$row[0]'><input type ='submit' name='Delete' value = 'Delete' class='Delete'></td>";
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
    <title></title>
    <link rel="styleSheet" href="../style/adm_mainpage_table.css">
      <link rel="styleSheet" href="../style/adm_update_view.css">
  </head>
  <body>
    <form action="adm_mainpageview.php" method="get">
      <a href="adm_mainpage.php"><input type ='button' value = 'Go Back'></a>

    </form>
  </body>
</html>
