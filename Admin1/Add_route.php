<?php
if(isset($_POST['add_route'])){
	$m=new MongoClient();
	$db=$m->travel;
	$collection=$db->add_route;
	$document=array(
	
	"Route_Name" => $_POST['route'],
	"Travel_ID" => $_POST['travel_id'],
	"Bus_ID"=> $_POST['bus_id'],
	"Departure" => $_POST['depart'],
	"Arrival" => $_POST['arrive'],
	"Cost/Seat" => $_POST['cost/seat'],
	"Journey_Date" => $_POST['journey_date']
	);
	
	$collection->insert($document);
	//echo "Document inserted Successfully";
	








}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>New Routes Registration</title>
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
						<li><a href="book.php">View Booking</a></li>
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
                    <img src="assets/img/iphone.png" alt="">
                </div>
                <div class="register span8">
                    <form action="" method="post">
					<table class= "table-responsive" cellspacing="15" cellpadding="15">
                        <h2>REGISTER TO <span class="red" style="color:red; font-size:30px">New Routes</span></h2>
                        <tr>
						<td><label for="route">Route</label>
						<select name="route">
							<option >--Select--</option>
							<option value="Baramati-Satara">Baramati-Satara</option>
							<option value="Baramati-Pune">Baramati-Pune</option>
							<option value="Baramati-Mumbai">Baramati-Mumbai</option>
							<option value="Baramati-Ahmednagar">Baramati-Ahmednagar</option>
							<!--<option value="Nagpur">Nagpur</option>
							<option value="Aurgabad">Aurgabad</option>-->
						</select></td>
						</tr>
						<tr><td><label for="travel_id">Travel ID</label>
                        <input type="text" id="travel_id" name="travel_id" placeholder="Enter your travel_id..."></td>
						<td><label for="bus_id">Bus ID</label>
                        <input type="text" id="bus_id" name="bus_id" placeholder="Enter your travel_id..."></td>
						<!--<td><label for="travel_name">Traveller Name</label>
						<select>
							<option value="Select">--Select--</option>
							<option value="Prasanaa">Prasanaa</option>
							<option value="Neeta">Neeta</option>
							<option value="Keasri">Keasri</option>
							<option value="Red Bus">Red Bus</option>
							<!--<option value="Aurgabad">Aurgabad</option>-->
						
                        </tr>
                        <tr>
						<td><label for="depart">Departure</label>
                        <input type="time" id="depart" name="depart" placeholder="HH:MM:SS..."></td>

						<td><label for="arrive">Arrival</label>
                        <input type="time" id="arrive" name="arrive" placeholder="HH:MM:SS"></td>
                        </tr>
						
						<tr>
                        <td><label for="cost/seat">Cost/Seat</label>
                        <input type="number" id="cost/seat" name="cost/seat" placeholder="Cost..."></td>
						<td><label for="journey_date">Journey Date</label>
                        <input type="date" id="journey_date" name="journey_date" placeholder="MM/DD/YYYY..."></td>
						</tr>
						</table>
                        <button type="submit" name="add_route">ADD Route</button>&nbsp &nbsp &nbsp
						<button type="clear">RESET</button>
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

