<?php


session_start();
if(isset($_SESSION['user']))
{
	$m=new MongoClient();
	$db=$m->travel;
	$a =$_SESSION['user'];


if(isset($_POST['feedback'])){
	$m=new MongoClient();
	$db=$m->travel;
	$collection=$db->feedback;
	$document=array(
	"Name" => $_POST['name'],
	"Email" => $_POST['email'],
	"Message" => $_POST['msg'],
	);
	$collection->insert($document);
	echo "<script> alert ('Feedback Submitted'); </script>";
	//header('location:View_Bus.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Feedback</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

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
                        <h1>Transportation Portal<span class="red" style="color:red; font-size:30px">&nbsp &nbsp &nbsp  Bus</span></a></h1>
						
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
	
     <div class="register-container container">
            <div class="row">
                <div class="iphone span4">
                    <img src="assets/img/Feedback.jpg" alt="">
                </div>
                <div class="register span8"><center>
                    <form action="" method="post">
					<table class= "table-responsive" cellspacing="15" cellpadding="15">
                       <h2>USER<span class="red" style="color:red; font-size:30px">  <strong>Feedback</strong></span></h2>
                        <tr><td><label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="enter your first name..." style="width:350%;"></td>
                       </tr>
						
                        <tr>
						<td><label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email..." style="width:350%;"></td>
						</tr>
						<td><label for = "msg">Message</label>
						<textarea cols="10" rows="3" name="msg" placeholder="Comment.. " style="width:350%;"></textarea></td>
						</tr>
						<br>
						</table>
                        <button type="submit" name="feedback">Submit</button></a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

