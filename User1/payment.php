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
        <title>Payment Information</title>
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
						<li><a href="#">View Route</a></li>
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
                    <img src="assets/img/payment.jpg" alt="">
                </div>
                <div class="register span8">
                    <form action="" method="post"><center>
					<table class= "table-responsive" cellspacing="15" cellpadding="15" >
                       <h2><span class="red" style="color:red; font-size:30px">  <strong>PAYMENT INFORMATION</strong></span></h2>
                        <tr><td><label for="customer_id">Customer Id</label>
                        
                        <input type="text" id="customerid" name="customerid" placeholder="enter your customer id..."></td>
						
                        
						<td><label for="ticketid">Ticket Id</label>
                        <input type="text" id="ticketid" name="ticketid" placeholder="Enter your ticket id..."></td>

						
                        </tr>
						 <tr><td><label for="paymentmode">Payment Mode</p></label>
						 <select>
							<option>--Select--</option>
							<option value= "credit"> Credit Card</option>
							<option value= "debit"> Debit Card</option>
							<option value= "naps"> NAPS</option>
							<option value= "paylater"> Pay Later</option>
							</select></td>
						 
						 <td><label for="Bankname">Bank Name</label>
						 
                        <input type="text" id="Bankname" name="Bankname" placeholder="Enter your bank name..."></td></tr>
						<tr><td>
						<label for = "cardno">Card Number</label>
						<input type = "text" id = "cardno" name = "cardno" placeholder="Enter Your card number.."></td>
						<td> <label for="netamount">Net Amount</label>
						    <input type = "text" id = "netamount" name = "netamount" placeholder="Enter Your net amount.."></td></tr>

						</table>
                        <button type="submit">SAVE</button>
						<button type="submit">CANCEL</button>
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

