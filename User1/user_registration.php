<?php
if(isset($_POST['register'])){
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$date=$_POST['date'];
$gender=$_POST['gender'];
$Contact_No=$_POST['Contact_No'];
$address=$_POST['address'];
$city=$_POST['city'];
$Pin_Code=$_POST['Pin_Code'];
$pass=$_POST['pass'];
$con_pass=$_POST['con_pass'];

$m = new MongoClient();
$db= $m->travel;
//echo "Database successfully Selected";
$collection=$db->registration;
//echo "Collection Selected Succesfully";


$document = array(
"FirstName" => $fname,
"LastName" => $lname,
"Email"=>$email,
"Date"=>$date,
"Gender"=>$gender,
"Contact_No"=>$Contact_No,
"Address"=>$address,
"City"=>$city,
"Pin_Code"=>$Pin_Code,
"Password"=>$pass,
"Confirmpass"=>$con_pass
);

$collection->insert($document);
echo "Document inserted successfully";
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>User Registration</title>
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
					<h4><a href="user_login.html" style="margin-left:1100px;"><span class="fa fa-user fa-lg"></span>Login</a>
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
                    <img src="assets/img/bus_driver.png" alt="">
                </div>
                <div class="register span8">
                    <form action="" method="POST">
					<table class= "table-responsive" cellspacing="15" cellpadding="15">
                       <h2>USER<span class="red" style="color:red; font-size:30px">  <strong>REGISTRATION</strong></span></h2>
                        <tr><td><label for="firstname">First Name</label>
                        <input type="text" name="firstname" placeholder="enter your first name..."></td>
                        <td><label for="lastname">Last Name</label>
                        <input type="text" name="lastname" placeholder="enter your first name..."></td>
						</tr>
                        
						<td><label for="email">Email</label>
                        <input type="text" name="email" placeholder="Enter your email..."></td>

						<td><label for="DOB">DOB</label>
                        <input type="date" name="date" placeholder="MM/DD/YYYY"></td>
                        </tr>
						 <tr><td><label for="Gender">Gender</label> 
						 <select name="gender">
							<option value= "male"> Male</option>
							<option value= "Female"> Female</option>
							</td>
						 <td><label for="Contact_No">Contact_No</label>
                        <input type="number" name="Contact_No" placeholder="Enter your Mobile Number..."></td></tr>
						<tr><td>
						<label for = "address">Address</label>
						<input type = "textarea" name = "address" placeholder="Enter Your Address.."></td>
						<td> <label for="city">City</label>
						<select name="city">
							<option value="">--Select--</option>
							<option value="Pune">Pune</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Nashik">Nashik</option>
							<option value="Nagpur">Nagpur</option>
						</select></td></tr>
						<tr>
						<td> <label for="">State</label>
						<select name="state">
							<option value="">--Select--</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Rajasthan">Rajasthan</option>
						</select></td>
						 <td><label for="Pin_Code">Pin_Code</label>
                        <input type="number" name="Pin_Code" placeholder="Enter your Pin_Code..."></td>
						</tr>		
						<tr>
						<td><label for = "password">Password</label>
						<input type = "password" name="pass" placeholder="Enter your password.. "></td>
						<td><label for = "con_password">Conform Password</label>
						<input type = "password" name="con_pass" placeholder="Conform your password.. "></td>
						</tr>
						<br>
						</table>
                        <button type="submit" name="register">REGISTER</button>
						<button type="submit">RESET</button>
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

