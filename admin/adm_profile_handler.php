<?
include('conn.php');
session_start();
$admin_id=$_SESSION["admin_Id"];
//$admin_id=$_POST["admin_id"];
if (isset($_GET["edit"]))
{
  //$admin_id=$_GET["admin_Id"];
  $pass=$_GET["adm_pass"];
  $email=$_GET["adm_email"];
  $Fname=$_GET["Fname"];
  $Lname=$_GET["Lname"];
  $reg_date=$_GET['reg_date'];
  $gender=$_GET["gender"];
$upd=" update admin
        set admin_Email='$email',
            admin_Fname='$Fname',
            admin_Lname='$Lname',
            admin_Reg_date='$reg_date',
            admin_gender='$gender'
        where admin_Id=$admin_id";
$que=mysqli_query($conn,$upd);
}
if (isset($_GET["continue"]))
{
header("location:adm_profile.php");
}

echo "<form method='get' action= 'adm_profile_handler.php'>";
echo "<input type='hidden' name='admin_Id' value='$admin_id'>";
echo "<div class='main'>";
echo "<table>";
echo "<caption><b>UPDATE</b></caption>";
echo "<tr><th>ID</th> <th>Password</th> <th>Email</th><th>First Name</th><th>Last Name</th><th>Reg_Date</th><th>Gender</th></tr>";
echo "<tr>";
echo "<td class='id'> <input type='text' name='txtid' value='$admin_id' readonly ></td>";
echo "<td class='pass'> <input type='text' name='adm_pass' value='$pass' readonly> </td>";
echo "<td> <input type='text' name='adm_email' value='$email'> </td>";
echo "<td> <input type='text' name='Fname' value='$Fname'> </td>";
echo "<td> <input type='text' name='Lname' value='$Lname'> </td>";
echo "<td class='date'> <input type='text' name='reg_date' value='$reg_date' readonly> </td>";
echo "<td> <input type='text' name='gender' value='$gender'> </td>";
echo "</tr>";
echo "</table> <br>";
echo "</div>";
echo "<input type='submit' name='edit' value='Update'> <br>";
echo "<input type='submit' name='continue' value='Continue'> <br>";
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
background-image: linear-gradient(50deg, #63d471 -5%, #233329 89%);

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
    box-shadow: inset 0 0 60px rgba(255, 255, 255, .4);
    height: 60px;
    font-size: 20px;
    color: #d8ffff;
  }
  input[type=text]
  {
    border: none;
    text-align: center;
    background: transparent;
    height: 70px;
    width: 100%;
    color: black;
    font-size: 15px;
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
  .id,.pass,.date
  {
    color: #ffffff;
    box-shadow: inset 0 0 80px rgba(0, 0, 0, .2);
  }
    </style>
  </head>
  <body>

  </body>
</html>
