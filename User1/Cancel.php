<?php


if(isset($_POST['cancel'])){
$db = new Mongo();


$a=$_POST['email'];

//echo "value is".$a;
$query = $db->travel->book_ticket->remove(array('Email'=>$a));

echo '<pre>';

//foreach ( $query as $current )
    //print_r($current);

echo '</pre>';
}

?>


		
					
						
						
						
						
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Ticket_Cancellation</title>
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
						 </h4>
                        <h1>Transportation Portal<span class="red" style="color:red; font-size:30px">&nbsp &nbsp &nbsp  Bus</span></a></h1>
						
                    </div>
					
					
					
                </div>
            </div>
        </div>
		 <div class="header">
            <div class="container">
                <div class="nav">
					<ul>
						<!--<li><a href="#">Home</a></li>-->
						
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
                    <img src="assets/img/booking.jpg" alt="">
                </div>
                <div class="register span8">
                    <form action="" method="post"><center>
					<table class= "table-responsive" cellspacing="15" cellpadding="10">
					
                       <h2>Ticket<span class="red" style="color:red; font-size:30px">  <strong>Cancallation</strong></span></h2>
                   
						<tr><td><label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="Enter your register emailID.."></td>
				
											
						<td><label for = "Depar_city">Why you want to cancle</label>
						<textarea cols="10" rows="4" name="Depar_city" placeholder="Reason.... "></textarea></td></tr>
						</table>
						<input type="checkbox" name="vehicle" value="Bike" style="width:20px;">I Agree To All Terms & Conditions.<br>
                        <button type="submit" name="cancel">Cancal Ticket</button>
						
						
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

