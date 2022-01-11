<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SLMS | Home Page</title>
    <link rel="styleSheet" href="style/style.css">
  <style>

  #main /* to control the middle page in the body  */
        {
          padding: 30px 20px;
        	margin-left:auto;
        	margin-right:auto;

        	max-width: 700px;
        	min-width: 300px;
        	min-height=75%;
          position: relative;
          overflow:auto;
          padding-bottom:125px;
          padding-top: 45px;

          text-align:center;
          height:100%;
          margin-top:16px;
        }
    p /* paragraphs in general*/
        {
          color: rgb(255, 255, 255);
          margin: 0px;
          text-align:center;
          font-size: 35px;
          font-style: oblique;
          font-weight: bold;
        }

    #p1 /*the paragraphs senteces like please choose user...*/
        {
          text-align:center;
          font-size: 18px;
          padding-top: 100px;
          font-style: normal;
        }

    .container
        {
        	position: relative;
        	margin: 16px auto;
        	width: 85%;
        	height: 100%;
        }

    .container .box
        {
        	postion: relative;
        	min-height: 250px;
          max-height: 300px;
        	min-width: 250px;
        	margin-left: 140px;
        	float: left;
        	box-sizing: border-box;
        	box-shadow: -2px -2px 40px 2px #ef629f;
        	overflow:hidden;
        	border-radius: 10px;
        	padding: 75px;
        	font-family: Lato;
        	justify-content: center;
          background-image: linear-gradient(#4568dc,#b06ab3);
        }
    .container .box:hover
        {
          background-image: linear-gradient(#000428 ,#ed4264,#ffedbc);
        }
    .container .box .logo
        {
        	postion: relative;
        	background-image: linear-gradient(#000428 , #004e92);
        	height: 70px;
        	width: 70px;
        	margin: 0 auto;
        	box-sizing: border-box;
        	overflow:hidden;
        	border-radius: 50%;
        	color: #ffdc9d;
        	font-size: 350%;
        }
    .desc
        {
        	display:none;
          color: BLACK;
          width: auto;
          font-weight: bold;
          font-size: 18px
        }
    .box:hover .desc
        {
	        display:block;
        }

  </style>
    <nav>
      <ul>
          <li>
              <a href="index1.php"style=background-image:linear-gradient(#ed4264,#ffedbc);color:rgb(0,50,0)><b>HOME</b>
          </li>
          <li>
              <a href="#CONTACT" >CONTACT</a>
              <ul>
                  <li><a href="CONTACT.php" >CONTACT US</a></li>
              </ul>
          </li>
          <li>
              <a href="student/stu_login.php">Student</a>
          </li>

          <li>
              <a href="admin/adm_login.php">Admin</a>
          </li>

          <li><a href="#ABOUT">ABOUT</a>
              <ul>
                  <li>
                      <a href="ABOUT.php">About SLMS</a>
                  </li>
              </ul>
          </li>
      </ul>
  </nav>

  </head>

<body>
    <h1>Welcome to <span style='color: #00d7d7'>SLMS</span></h1>
    <br><br><br><br><br><br>
<p><span style='color: #00d7d7'>S</span>tudent
  <span style='color: #00d7d7'>L</span>eave
  <span style='color: #00d7d7'>M</span>anagement
  <span style='color: #00d7d7'>S</span>ystem</p>
<p id="p1" style="color:#e1fcff">Please choose as which user you want to proceed further</p>
    <div id="main">

      <div class='container' style="cursor: pointer;">
        	<div class='box';  onclick="location.href='admin/adm_login.php';">
          	<div class='logo'>
          				A
          	</div>
          		<div class='desc'>
          		<br>	<span style='color: white'>ADMIN SECTION</span><br><br><br>  For Admins to add/ update students information<br> and many more...!!
          		</div>
          </div>
          <br> <br> <br> <br><br> <br><br> <br>
          <br> <br> <br> <br><br> <br><br> <br>

          <div class='box' ; onclick="location.href='student/stu_login.php';">
          	<div class='logo'>
          				S
      			</div>
      				<div class='desc'>
          		<br>	<span style='color: white'>STUDENT SECTION</span><br><br><br>For students to Apply leave application <br>or View the status of the process
      				</div>
        	</div>
      </div>
        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>
</div>
    <form class="" action="index.html" method="post">
    </form>
  </body>
  <?
  include("student/footer.html");
  ?>
</html>
