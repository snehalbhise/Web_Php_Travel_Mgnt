


<?php


session_start();
if(isset($_SESSION['user']))
{
	$m=new MongoClient();
	$db=$m->travel;
	$a =$_SESSION['user'];
}
?>


<?php
if(isset($_POST['book'])){
	$m=new MongoClient();
	$db=$m->travel;
	$collection=$db->book_ticket;
	$document=array(
	"Route" => $_POST['route'],
	"Class"=> $_POST['class'],
	"FName" => $_POST['uname'],
	"LName" => $_POST['lname'],
	"Contact_No" => $_POST['contact_no'],
	"Email" => $_POST['email'],
	"Journey_date" => $_POST['journey_date'],
	"Pickup" => $_POST['pickup'],
	"No_of_childpassenger" => $_POST['childpassenger'],
	"No_of_adultpassenger" => $_POST['adltpassenger'],
	"No_of_totalpassenger" => $_POST['totalpassenger']
	);
	$collection->insert($document);
	echo "<script> alert ('Booking Successful'); </script>";
	//header('location:View_Bus.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Book_ticket</title>
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
						<!--<li><a href="#">Home</a></li>-->
						
						<!--<li><a href="#">View Feedback</a></li>-->
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
					
                       <h2>Book Your<span class="red" style="color:red; font-size:30px">  <strong>TICKETS</strong></span></h2>
                        <tr>
							<td> <label for="route">Route</label>
							<select name="route">
								<option value="">--Select--</option>
								<option value="Baramati-Satara">Baramati-Satara</option>
								<option value="Baramati-Pune">Baramati-Pune</option>
								<option value="Baramati-Mumbai">Baramati-Mumbai</option>
								<option value="Baramati-Ahmednagar">Baramati-Ahmednagar</option>
							</select></td>
							<td> <label for="city">Class</label>
								<select name="class">
									<option value="">--Select--</option>
									<option value="Non AC">Non AC</option>
									<option value="AC">AC</option>
									<option value="Slepper">Sleeper</option>
									<option value="Double Dekar">Double Dekar</option>
									<option value="single Dekar">Single Dekar</option>
								</select></td>
						</tr>
						<tr><td><label for="Uname">First Name</label>
							<input type="text" name="uname" placeholder="First Name"></td>
							<td><label for="Uname">Last Name</label>
							<input type="text" name="lname" placeholder="First Name"></td>
							
						</tr>
						<tr><td><label for = "contact_no">Contact Number</label>
							<input type = "number" name="contact_no" placeholder="Mobile No."></td>
							<td><label for="email">Email ID</label>
							<input type="text" name="email" placeholder="Email"></td>
						</tr>
						<tr><td><label for="journey_date">Journey Date</label>
							<input type="date" name="journey_date" placeholder="MM/DD/YYYY..."></td>
							<td><label for="pickup">Pickup Point</label>
							<input type="text" name="pickup" placeholder="Area Name"></td>
						</tr>	

					<tr><td><label for="CHILD pASSENGER">CHILD-PASSENGER </label>
							<input type="number" name="childpassenger" placeholder="Enter No Child Passenger..."></td>
							<td><label for = "Adult Passenger">No.Of ADULT Passanger</label>
							<input type="number" name="adltpassenger" placeholder="Adult Passanger.... "></td>
							<td><label for = "total Passenger">TOTAL No. Of Passanger</label>
							<input type="number" name="totalpassenger" placeholder="Total Passanger.... "></td>
						</tr>							
					</table>
                    <button type="submit" name="book">Book Now</button>
					<a href="book.php">View Details</a>
						
						
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

