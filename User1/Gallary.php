<?php


session_start();
if(isset($_SESSION['user']))
{
	$m=new MongoClient();
	$db=$m->travel;
	$a =$_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Gallary</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<meta name="keywords" content="jQuery Image Gallery, Image Gallery HTML, Image Gallery CC3" />
		
		<link rel="shortcut icon" href="../file/favicon.gif"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />

		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="../file/js/modernizr.js"></script>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>

    <body>

       
       
         <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo ">
					<h4><a href="user_login.php" style="margin-left:1100px;"><span class="fa fa-user fa-lg"></span>Login</a>
					
					
						<p style="margin-left:1100px;"><a>Welcome   <?php echo $_SESSION['user']; ?></a></p> </h4>
                        <h1 style="color:black;">Transportation Portal<span class="red" style="color:red; font-size:30px">&nbsp &nbsp &nbsp  Bus</span></a></h1>
						
                    </div>
					
					
					
                </div>
            </div>
        </div>
		 <div class="header">
            <div class="container">
                <div class="nav">
					<ul>
						<li><a href="Feedback.php">Feedback</a></li>
						<li><a href="Cancel.php">Cancallation</a></li>
						<li><a href="Booking.php">Book Ticket</a></li>
						<li><a href="View_route.php">View Route</a></li>
						<li><a href="Gallary.php">Gallary</a></li>
						<!--<li><a href="#">About Us</a></li>-->
						<li><a href="Home.php">Home</a></li>
						<!--<li><a href="#">Login</a></li>-->
					</ul>
				</div>
						
                </div>
            </div>
        </div>
			<div class="main" style="background-color:gray;">
	        	<div class="photos">
				    <img src="assets/img/01.jpg" />
					<img src="assets/img/08.jpg" />
				    <img src="assets/img/02.jpg" />
					<img src="assets/img/05.jpg" />
				    <img src="assets/img/03.jpg" />
				    <img src="assets/img/04.jpg" />
				    <img src="assets/img/07.jpg" />
					<img src="assets/img/06.jpg" />			
					<!--<img src="assets/img/09.jpg" />-->
				</div>
	      	</div>
			
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!--<script src="assets/js/jquery.backstretch.min.js"></script>-->
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

