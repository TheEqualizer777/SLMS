
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student leave management system |  Admin</title>
    <link rel="styleSheet" href="../style/style.css">
    <link rel="styleSheet" href="../style/stu-adm_loginpage.css">
    <nav>
      <ul>
          <li>
              <a href="../index1.php"style=background-image:linear-gradient(#ed4264,#ffedbc);color:rgb(0,50,0)><b>HOME</b>
          </li>
          <li>
              <a href="#CONTACT" >CONTACT</a>
              <ul>
                  <li><a href="../CONTACT.php" >CONTACT US</a></li>
              </ul>
          </li>
          <li>
              <a href="../student/stu_login.php">Student</a>
          </li>

          <li>
              <a href="../admin/adm_login.php">Admin</a>
          </li>

          <li><a href="#ABOUT">ABOUT</a>
              <ul>
                  <li>
                      <a href="../ABOUT.php">About SLMS</a>
                  </li>
              </ul>
          </li>
      </ul>
  </nav>
  </head>

  <body>
    <form action="adm_login_handler.php" method="post">
      <h1>Welcome to <span style='color: #00d7d7'>SLMS</span></h1>
      <br><br><br><br><br><br>
      <p><span style='color: #00d7d7'>S</span>tudent
          <span style='color: #00d7d7'>L</span>eave
          <span style='color: #00d7d7'>M</span>anagement
          <span style='color: #00d7d7'>S</span>ystem</p>
      <p id="p1" style="color:#e1fcff">You are in the <span style="color:#ffedbc"><b>Admin</b></span>  Section please login to view more</p>

      <div class="main">
        <br>
        <span style="color:#ffedbc"><b>Enter Your  ID</b></span><br>
          <input type="text" name="admin_Id"><br><br>
        <span style="color:#ffedbc "><b>Enter Your password</b></span><br>
          <input type="password" name="adm_pass" ><br><br>
        <input type="submit" name="submit" value="Login">

      </div>
    </form>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br>
  </body>



  <?
  include("footer.html");
  ?>
</html>
