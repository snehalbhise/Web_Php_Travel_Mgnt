<?php
if(isset($_POST['add_bus'])){
	$m=new MongoClient();
	$db=$m->travel;
	$collection=$db->add_bus;
	$document=array(
	"Travel_Name" => $_POST['travelname'],
	"Bus_No"=> $_POST['bus_no'],
	"Class" => $_POST['class'],
	"Seater"=> $_POST['seater'],
	"Address" => $_POST['address'],
	"Agent_Name" => $_POST['agent_name'],
	"Contact_No" => $_POST['contact_no']
	);
	
	$collection->insert($document);
	//echo "Document inserted Successfully";
	header('location:View_Bus.php');








}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Bus Registration</title>
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
                    <img src="assets/img/bus.png" alt="">
                </div>
                <div class="register span8">
                    <form action="" method="post">
					<table class= "table-responsive" cellspacing="15" cellpadding="15">
                        <h2>REGISTER TO <span class="red" style="color:red; font-size:30px">BUSES</span></h2>
                        <tr><td><label for="travelname">Travel Name</label>
                        <input type="text" name="travelname" placeholder="enter your travel name..."></td>
                        <td><label for="bus_no">BUS Number</label>
                        <input type="text"  name="bus_no" placeholder="enter your Bus_No..."></td>
						</tr>
						<tr>
						<td> <label for="city">Class</label>
						<select name="class">
							<option>--Select--</option>
							<option value="Non AC">Non AC</option>
							<option value="AC">AC</option>
							<option value="Slepper">Sleeper</option>
							<option value="Double Dekar">Double Dekar</option>
							<option value="single Dekar">Single Dekar</option>
						</select></td>
						<td> <label for="seater">Seater</label>
						<select name="seater">
							<option value="Select">--Select--</option>
							<option value="16 Seater">16 Seater</option>
							<option value="29 Seater">29 Seater</option>
							<option value="35 Seater">35 Seater</option>
							<option value="59 Seater">59 Seater</option>
						</select></td>
						</tr>
                        <!-- <tr>
						<td><label for="depart">Depart</label>
                        <input type="time" id="depart" name="depart" placeholder="HH:MM:SS..."></td>

						<td><label for="arrive">Arrive</label>
                        <input type="time" id="arrive" name="arrive" placeholder="HH:MM:SS"></td>
                        </tr>
						
						<tr>
                        <td><label for="cost/seat">Cost/Seat</label>
                        <input type="number" id="cost/seat" name="cost/seat" placeholder="Cost..."></td>
						<td><label for="bus_number">Bus Number</label>
                        <input type="text" id="bus_number" name="bus_number" placeholder="enter your bus number..."></td>
						</tr>--><tr>
						<td>
							<label for ="address">Address</label>
							<input type ="textarea"  name="address" placeholder="Enter your Address..">
						</td>
						<td>
							<label for ="agent_name">Agent Name</label>
							<input type ="textarea"  name="agent_name" placeholder="Enter your agent name..">
						</td>
						</tr>
						<tr>
						<td>
							<label for ="contact_no">Contact No</label>
							<input type ="number"  name="contact_no" placeholder="Enter your agent name..">
						</td>
						</tr>
						
						</table>
                        <button type="submit" name="add_bus">ADD BUS</button>&nbsp &nbsp
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

