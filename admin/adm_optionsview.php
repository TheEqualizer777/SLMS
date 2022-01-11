<?
include("conn.php");
echo "<body>";
echo "<div class='main'>";
echo "<table border='1'>";
echo "<tr>
        <td>student_Id</td>
        <td>Student_Password</td>
        <td>Student_Email</td>
        <td>Student_Fname</td>
        <td>Student_Lname</td>
        <td>Student_Gender</td>
        <td>Student_Reg_Date</td>
        <td>MODIFY</td>
        <td>REMOVE</td>
      </tr>";

$sel="select *
      from student";
$que=mysqli_query($conn,$sel);
while ($row=mysqli_fetch_row($que))
{
  echo "<tr>";
  echo "<td>$row[0]</td>";
  echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
  echo "<td>$row[4]</td>";
  echo "<td>$row[5]</td>";
  echo "<td>$row[6]</td>";
  echo "<td><a href='adm_optionsupdate.php?student_Id=$row[0]&student_Id=$row[1]'><input type ='button' value='MODIFY'></td>";
  echo "<td><a href='adm_optionsdelete.php?student_Id=$row[0]'><input type ='button' value='REMOVE'></td>";
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
    <style>
    body
    {
      background-color: #537895;
background-image: linear-gradient(315deg, #537895 0%, #09203f 74%);

    }
    .main
    {
      postion: relative;
      margin-top: 10%;
      margin-left: 5%;
      margin-right: 5%;
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
    td,th
    {
      color: white;
      font-weight: bold;
      font-family:Tahoma  ;
      text-align: center;
      height: 30px;
      box-shadow: inset 0 0 10px rgba(255, 255, 255, .2);
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
      font-size: 14px;
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
    input[type=text],input[type=email],input[type=date]
    {
      border: none;
      text-align: center;
      background: transparent;
      height: 40px;
      width: 100%;
      color: white;
      font-size: 20px;
      font-family:Tahoma;
      font-weight: bold;
    }
    caption
    {
      font-family:serif;
      font-size: 30px;
      color: #ffffc4;
    }
    button
    {
      box-shadow: inset 0 0 35px rgba(255, 255, 255, .3);
      background: transparent;
      border: none;
      color:black;
      padding: 16px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      font-weight: bold;
      margin: 4px 2px;
      transition-duration: 0.5s;
      cursor: pointer;
      width: 100%;
    }
    button:hover
    {
      background-image: linear-gradient(31deg, #f39f86 20%, #f9d976 74%);
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
      color :#000;
      font-size: 20px;
      font-weight: bold;
    }
    </style>
  </head>
  <body>
    <form action="adm_optionsview.php" method="get">
      <a href="adm_options.php"> <button type="button" value="GO Back">GO Back</button> </a>
    </form>
  </body>
</html>
