<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <?php include_once 'includes/head.php' ?>
</head>
<body>
    
    
    	<?php include_once 'includes/nav.php' ?>
    <div class="content" style="margin-top: 110px; margin-left: 60px; width: 400px;">
        <h3>About Us</h3>
    	<p class="lead"><b>Placement Management System</b> is an application mainly developed for the college to add and maintain companies 
        that are available for campus drive in their college. And to maintain the record of the students who have got selected for companies
        in the campus drive.</p>
    </div>
    <?php include_once 'includes/footer.php' ?>
    <script>
      $(document).ready(function() {
         $("#home").removeClass("active");
        $("#about").addClass("active");
        
      });
    </script>
</body>
</html>