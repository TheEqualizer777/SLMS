<?
include('conn.php');
session_start();
$admin_id=$_SESSION["admin_Id"];

$sel = "select*
        from admin
        where admin_Id=$admin_id";
$que=mysqli_query($conn,$sel);
$row=mysqli_fetch_row($que);
$pass=$row[1];
$email=$row[2];
$Fname=$row[3];
$Lname=$row[4];
$reg_date=$row[5];
$gender=$row[6];
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
    <style >
    p /* paragraphs in general*/
        {
          color: rgb(255, 255, 255);
          margin: 0px;
          text-align:center;
          font-size: 18px;
          font-style: oblique;
          font-weight: bold;
        }
    .main
        {
          background-image: linear-gradient(#B91372,#6B0F1A);
          text-align: center;
          margin: 5% 35% 2%;
          height: 770px;
          width: 50%;
          padding: 5% 5%;
        }
    .main:hover
        {
          box-shadow: 0 19px 30px 0 rgba(0,0,0,0.24),0 19px 50px 0 rgba(0,0,0,0.29);
        }
    .ftd
        {
          text-align: left;
          font-weight: bolder;
          font-size: 19px;
          color: #F8D800;
          width: 35%;
        }
    .std
        {
          text-align: right;
        }
    .caption
        {
          font-size: 20px;
          font-style: italic;
          font-family:cursive;
          font-weight: bold;
          color: #FFFFFF;
          background: transparent 50%;
          background-color: #000000;
        }

    body
          {
            background-color: #FF3CAC;
            background-image: linear-gradient(125deg, #380036 10%,#0CBABA 50%, #2B86C5 75%);
          }

    input[type=text]
        {
          overflow: auto;
          background: transparent;
          width: 100%;
          padding: 10px 50px;
          margin: 20px 0;
          box-sizing: border-box;
          border: none;
          border-bottom: 2px solid #c4e0e5;
          color: #FFFFFF;
          font-size: 17px;
          font-weight: bold;
          text-align: center;
        }


    input[type=submit]
        {
          background: transparent;
          border: none;
          color:#FFFFFF;
          padding: 16px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 20px;
          font-weight: bold;
          margin: 4px 2px;
          transition-duration: 0.5s;
          cursor: pointer;
          width: 65%;

        }

    input[type=submit]:hover
        {
          background-image: linear-gradient(135deg, #FEE140 0%, #FA709A 100%);
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
          color :#000000;
        }
    </style>
    </header>
  </head>
  <body >
    <!--style="background-image:linear-gradient(#1268dc,#b06eb5);-->
      <form action="adm_profile_handler.php" method="get">
        <input type="hidden" name="admin_id" value="<?echo $admin_id ?>">
        <div class="main">
          <table style="width: 100%">
            <caption class="caption">Personal Information</caption>
            <tr>
              <td class="ftd">ID</td>
              <td class="std"><input type="text" name="txtid" value="<?echo $_SESSION['admin_Id'];?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Password</td>

              <td class="std"><input type="text" name="adm_pass" value="<?echo $pass?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Email</td>
              <td class="std"><input type="text" name="adm_email" value="<?echo $email?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">First Name</td>
              <td class="std"><input type="text" name="Fname" value="<?echo $Fname?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Last Name</td>
              <td class="std"><input type="text" name="Lname" value="<?echo $Lname?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Reg_Date</td>
              <td class="std"><input type="text" name="reg_date" value="<?echo $reg_date?>" readonly></td>
            </tr>
            <tr>
              <td class="ftd">Gender</td>
              <td class="std"><input type="text" name="gender" value="<?echo $gender?>" readonly></td>
            </tr>
          </table>

            <input type="submit" name="edit" value="Edit">
        </div>
      </form>



    </section>
    <script type="text/javascript" src="../js/javascript.js"></script>
  </body>
<?
include("footer.html");
?>

</html>
