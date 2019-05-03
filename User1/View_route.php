
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>view route</title>
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
                 <div class="register-container container">
            <div class="row">
               
                <div class="register span12">
                    <form action="" method="post"><center>
					<!--<table class= "table-responsive" cellspacing="15" cellpadding="15" style="border:solid 1px black";>
                         <h2>Route<span class="red" style="color:red; font-size:30px"> Info.</span></h2>
                        <tr><td><strong>RouteID</strong></td>
						<td><strong>From</strong></td>
						<td><strong>To</strong></td>
						
						<td><strong>TravelsID</strong></td>
						
						<td><strong>BusID</strong></td>
						
						<td><strong>Departure</strong></td>
						
						<td><strong>Arrival</strong></td>
						
						<td><strong>Fare</strong></td>
						
						<td><strong>Date</strong></td>
						
						<td><strong>Availability</strong></td>
						
						<td><strong>PickUp Points</strong></td>
						
						</tr>
						</table>
                        <button type="submit" name="delete">Delete</button>
						<button type="Clear">Show Details</button>-->
						<?php
						
						$m=new MongoClient();
						$db=$m->travel;
						$query=$m->travel->add_route->find(array());
						
						
						echo "<table class='table table-hover' cellspacing='15' cellpadding='15' style='border:solid 1px black';>";
                        echo "<h2>Route<span class='red' style='color:red; font-size:30px'> Info.</span></h2>";
						/*echo "<td><strong>From</strong></td>";
						echo "<td><strong>To</strong></td>";*/
						echo "<td><strong>Route</strong>";
						
						echo "<td><strong>Travel_ID</strong></td>";
						
						echo "<td><strong>Bus_ID</strong></td>";
						
						echo "<td><strong>Departure</strong></td>";
						
						echo "<td><strong>Arrival</strong></td>";
						
						echo "<td><strong>Cost/Seat</strong></td>";
						echo "<td><strong>Journey_Date</strong></td></tr>";
						

						foreach($query as $q){
						
						
						/*echo "<tr><td><strong>" .$q['From']. "</strong></td>";
						echo "<td><strong>".$q['To ']."</strong></td>";
						*/
						echo "<td><strong>".$q['Route_Name']."</strong></td>";
						 echo "<td><strong>".$q['Travel_ID']."</strong></td>";
						
						echo  "<td><strong>".$q['Bus_ID']."</strong></td>";
						echo  "<td><strong>".$q['Departure']."</strong></td>";
						echo  "<td><strong>".$q['Arrival']."</strong></td>";
						echo "<td><strong>".$q['Cost/Seat']."</strong></td>";
						echo "<td><strong>".$q['Journey_Date']."</strong></td></tr>";
						
					
						
						}
						
						echo "</table>";
						?>
						
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

