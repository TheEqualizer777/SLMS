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
    <style >
    p /* paragraphs in general*/
        {
          color: rgb(255, 255, 255);
          margin: 15px;
          text-align:center;
          font-size: 18px;
          font-style: oblique;
          font-weight: bold;
        }
    .main
        {
          background-image: linear-gradient(#cd206d,#ff927e);
          text-align: center;
          margin: 3% 20% 2%;
          height: 700px;
          width: 63%;
          padding: 5% 5%;
        }
    .main:hover
        {
          box-shadow: 0 19px 30px 0 rgba(0,0,0,0.24),0 19px 50px 0 rgba(0,0,0,0.29);
        }
    input[type=text],input[type=password]
        {
          background: transparent;
          width: 55%;
          padding: 2px 10px;
          margin: 18px 0;
          box-sizing: border-box;
          border: none;
          border-bottom: 2px solid #c4e0e5;
          font-size: 20px;
        }


    input[type=submit]
        {
          background: transparent;
          border: none;
          color:#000000;
          padding: 16px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          font-weight: bold;
          margin: 4px 2px;
          transition-duration: 0.5s;
          cursor: pointer;
          width: 70%;

        }

    input[type=submit]:hover
        {
          background-image: linear-gradient(#61045f, #1d2671);
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
          color :#2f95fb;
        }

    </style>
    <?
    include("adm_dashbord.php");
    include("adm_headerNav.php");
    ?>

    <section class="page-content" style="background-image: linear-gradient(#1d2671,#ed4264,#ba5370 );">

        <div class="main">

      <form action="change_passHandler.php" method="post">
            <p>Enter Your ID</p>
            <input type="text" name="txtid">
            <p>Old password</p>
            <input type="password" name="old_password">
            <br>
            <p>New Password</p>
            <input type="password" name="new_password">
            <br>
            <p>Confirm Password</p>
            <input type="password" name="confirm_password">
            <br><br><br><br>
            <input type="submit" name="submit" value="Update Password">
      </form>

    </div>

    </section>
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>

  <?
  include("footer.html");
  ?>
</html>
