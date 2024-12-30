<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Welcome</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/font.css"> -->
    <link rel="stylesheet" type="text/css" href="css/reg.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>

    
    <div style="position: absolute; margin-left:1%; margin-top:50px;">
    <img src="images\homepage.png." width="1250px" height="750px" style="z-index: 0; ">
    </div>
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top:60px; margin-left: 10px;">
    	<h1 style="margin-left: 35px; font-size: 64px;margin-bottom:350px;">PLACEMENT MANAGEMENT SYSTEM</h1> <br>
        <!-- <img src="images/logo1.png" width="550px"> -->
    </div>
    <div id="users" style="z-index: 1; position: relative; margin-top: 130vh;">
            <h1 align="center"><u>USERS</u></h1> <br> <br>
            <a href="login.php" class="btn btn-outline-light my-2 my-sm-0" style="border-radius: 50px; border-width: 2px; font-weight: bold;" id="loginnav">LOGIN</a>
        <div class="container">
        <div class="card-group">
          <div class="card" style="width: 400px; background: none; border: none;" align="center">
            <img src="images/admin1.png" class="card-img-top" alt="..." style="width: 400px;margin-left:68px">
            <div class="card-body" style="width: 400px;margin-left:58px">
              <h2 class="card-title" ><a href="/PLACEMENT-master\admin\addadmin.php">Admin</a></h5>
              <p class="card-text"><small class="text-muted">Placement Officer</small></p>
            </div>
          </div>
          <div class="card" style="width: 300px; background: none; border: none;" >
            <img src="images/student1.png" class="card-img-top" alt="..." style="width: 270px;margin-top:65px"> 
            <br>
            <div class="card-body" style="width: 400px;margin-left:95px">
              <h2 class="card-title" ><a href="login.php">User</a></h5>
              <p class="card-text"><small class="text-muted">Student</small></p>
            </div>
          </div>
        </div>
        </div>
      </div>
      
      <div id="contact" style="z-index: 1; position: absolute; margin-left:2%; margin-top: 30vh;">
            <div class="form-row">
             <div class="form-group" style="margin-left:470px; margin-top: 70px;"> 
                <h1>Contact Us</h1>
                <p class="lead">&nbsp;<i class="fas fa-mobile"></i>&nbsp; (+91)7259952349</p>
                <p class="lead">&nbsp;<i class="fas fa-at"></i>&nbsp; adarshapoojary826@gmail.com</p>
              
            </div>
    </div>
    <?php include_once 'includes/footer.php' ?>
</body>
</html>