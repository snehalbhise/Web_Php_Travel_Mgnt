
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Delete Bus</title>
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

    </head>

    <body>

       
       
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span6">
                        <h1><a href="">Transportation Portal<span class="red" style="color:red; font-size:30px">&nbsp &nbsp &nbsp  Bus</span></a></h1>
                    </div>
                    
                </div>
            </div>
        </div>
		 <div class="header">
            <div class="container">
                <div class="nav">
					<ul>
						<li><a href="#">Delete Route</a></li>
						
						<li><a href="book.php">Delete Travel</a></li>
						<li><a href="View_Bus.php">View Travel</a></li>
						<li><a href="View_route.php">view Route</a></li>
						<li><a href="Add_route.php">Add Route</a></li>
						<li><a href="Bus_Register.php">Add Travel</a></li>
						<li><a href="Home.php">Home</a></li>
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
                    <form action="" method="post"><center>
					<table class= "table-responsive" cellspacing="15" cellpadding="15">
                         <h2>Delete Bus<span class="red" style="color:red; font-size:30px"> Info.</span></h2>
                        <tr><td><label for="bus_id">Bus_ID</label>
                        <input type="text" id="bus_id" name="bus_id" placeholder="enter your bus_id..."></td>
                        <!--<td><label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="enter your first name..."></td>
						</tr>
                         <tr><td><label for="Name"><strong>First Name</strong></label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter FirstName..."></td>
						<td><label for=""><strong>Last Name</strong></label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter LastName..."></td></tr>
						<tr>
						<td><label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter your email..."></td>

						<td><label for="DOB">DOB</label>
                        <input type="date" id="date" name="date" placeholder="MM/DD/YYYY"></td>
                        </tr>
						 <tr><td><label for="Gender">Gender</label> 
						 <select>
							<option value= "male"> Male</option>
							<option value= "Female"> Female</option>
							</td>
						 <td><label for="Contact_No">Contact_No</label>
                        <input type="number" id="contact_Id" name="Contact_No" placeholder="Enter your Mobile Number..."></td></tr>
						<tr><td>
						<label for = "address">Address</label>
						<input type = "textarea" id = "address" name = "address" placeholder="Enter Your Address.."></td>
						<td> <label for="city"><strong>City</strong></label>
						<select>
							<option value="Select">--Select--</option>
							<option value="Pune">Pune</option>
							<option value="Mumbai">Mumbai</option>
							<option value="Nashik">Nashik</option>
							<option value="Nagpur">Nagpur</option>
						</select></td></tr>
						<tr>
						<td> <label for="State"><strong>State</strong></label>
						<select>
							<option value="Select">--Select--</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Rajasthan">Rajasthan</option>
						</select></td>
						 <td><label for="Pin_Code">Pin_Code</label>
                        <input type="number" id="Pin_Code" name="Pin_Code" placeholder="Enter your Pin_Code..."></td>
						</tr>		
						<tr>
                        <td><label for="password">Licence_id</label>
                        <input type="password" id="password" name="password" placeholder="Enter your Licence_id"></td>
						<td><label for="date_of_join">Date_Of_Join</label>
                        <input type="date" id="date_of_join" name="date_of_join" placeholder="Enter your Joining Date"></td>
						</tr><br>-->
						</table>
                        <button type="submit">Delete</button>
						<button type="Clear">Show Details</button>
						
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

