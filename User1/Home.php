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
        <title>Home</title>
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
                   <!-- <img src="assets/img/iphone.png" alt="">-->
                </div>
                <div class="register span8" style="background:none";>
                   
                        
                <section id="content" style="background:none";>
				<div class="register span8">
                    <form action="search4.php" method="post" style="background:none";>
					<table class= "table-responsive" cellspacing="15" cellpadding="15">
                       <!--<h2>USER<span class="red" style="color:red; font-size:30px">  <strong>REGISTRATION</strong></span></h2>-->
                       <tr>
						<td> <label for="city"><strong>Route</strong></label>
						<select name="city">
							<option >--Select--</option>
							<option value="1">Baramati-Satara</option>
							<option value="2">Baramati-Pune</option>
							<option value="3">Baramati-Mumbai</option>
						
							<option value="4">Baramati-Ahmednagar</option>
						</select></td>
						<!--<td> <label for="city"><strong>To</strong></label>
						<select>
							<option value="Select">--Select--</option>
							<option value="Pune">Pune</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Nashik">Nashik</option>
							<option value="Nagpur">Nagpur</option>
						</select></td></tr>
						<!--<tr>
						<td> <label for="DOJ"><strong>Date_of_Journey</strong></label>
						<input type="date" id="DOJ" name="DOJ" placeholder="dd-mm-yyyy"></td>
						<td><label for="DOR"><strong>Date_of_Return</strong></label>
						<input type="date" id="DOR" name="DOR" placeholder="dd-mm-yyyy">
						</td>
						</tr>-->		
						<br>
						</table>
						<center>
                        <button type="submit" style="margin-left:-400px;">Search</button>
						</center>
                    </form>
		
				</div>	
			</section>			
						
            
				
            </div>
        </div><br>
		<br>
		
		<div class="aboutus">
		<h1 style="color:skyblue; text-align:center;">About Us</h1>
		<p style="color:red;"><strong>1 bus ticketing and reservation platform We take pride in providing the platform to book bus tickets with zero booking charges. You can now choose from multiple bus operators and routes.</strong></p>
		</div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

