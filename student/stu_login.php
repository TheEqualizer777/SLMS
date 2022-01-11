<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student leave management system | Student</title>
    <link rel="styleSheet" href="../style/style.css">
    <link rel="styleSheet" href="../style/stu-adm_loginpage.css">
    <style media="screen">

    input[type=button],input[type=submit]
        {
          box-shadow: inset 0 0 20px rgba(255, 255, 255, .3);
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
        input[type=button]:hover
            {
              color: white;
              font-size: 17px;
              font-weight: bold;
              font-family: Tahoma;
              background-image: linear-gradient(#02aab0  ,#00cdac);
            }
    </style>
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
              <a href="stu_login.php">Student</a>
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
      <form action="stu_loginhandler.php" method="post">
        <h1>Welcome to <span style='color: #00d7d7'>SLMS</span></h1>
              <br><br><br><br><br><br>
              <p><span style='color: #00d7d7'>S</span>tudent
                <span style='color: #00d7d7'>L</span>eave
                <span style='color: #00d7d7'>M</span>anagement
                <span style='color: #00d7d7'>S</span>ystem</p>
              <p id="p1" style="color:#e1fcff">You are in the <span style="color:#ffedbc"><b>Student</b></span> Section please login to view more</p>
        <div class="main">
            <br>

            <span style="color:#ffedbc"><b>Enter Your ID</b></span><br>
            <input type="text" name="student_Id" >
            <br><br>
            <span style="color:#ffedbc "><b>Enter Your password</b></span><br>
            <input type="password" name="student_pass" >
            <br><br>
            <input type="submit" name="submit" value="Login"> <br>
            <a href="stu_forgetpassword.php"><input type="button" name="button" value="Forget Password?"></a>

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
