
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>View Bus</title>
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
               
                <div class="register span12">
                    <form action="" method="post"><center>
					<!---<table class= "table-responsive" cellspacing="15" cellpadding="15" style="border:solid 1px black";>
                         <h2>Bus<span class="red" style="color:red; font-size:30px"> Info.</span></h2>
						<td><strong>Travel Name</strong></td>
						<td><strong>Bus_Number</strong></td>
						
						<td><strong>Class</strong></td>
						
						<td><strong>Seater</strong></td>
						
						<td><strong>Address</strong></td>
						
						<td><strong>Agent_Name</strong></td>
						
						<td><strong>Contact_No</strong></td>
						</tr>-->
						
						<?php
						
						$m=new MongoClient();
						$db=$m->travel;
						$query=$m->travel->book_ticket->find();
						
						echo "<table class='table table-hover' cellspacing='15' cellpadding='15' style='border:solid 1px black';>";
                        echo "<h2>Bus<span class='red' style='color:red; font-size:30px'> Info.</span></h2>";
						echo "<td><strong>First Name</strong></td>";
						echo "<td><strong>Last Name</strong></td>";
						echo "<td><strong>Route</strong></td>";
						echo "<td><strong>Class</strong></td>";
						
						echo "<td><strong>Contact No.</strong></td>";
						echo "<td><strong>Email</strong></td>";
						echo "<td><strong>Journey Date</strong></td>";
						echo "<td><strong>Pickup Point</strong></td>";
						echo "<td><strong>No of Child passenger</strong></td>";
						echo "<td><strong>No of Adult passenger</strong></td>";
						echo "<td><strong>No of Total passenger</strong></td>";
							echo "<td><strong>Child Charges</strong></td>";
						echo "<td><strong>Adult Charges</strong></td>";
					
						echo "<td><strong> Total Charges</strong></td></tr>";
						
						foreach($query as $q){
						echo "<tr><td><strong>" .$q['FName']. "</strong></td>";
						echo "<td><strong>" .$q['LName']. "</strong></td>";
						echo "<td><strong>".$q['Route']."</strong></td>";
						echo "<td><strong>".$q['Class']."</strong></td>";
						
						echo  "<td><strong>".$q['Contact_No']."</strong></td>";
						echo  "<td><strong>".$q['Email']."</strong></td>";
						echo "<td><strong>".$q['Journey_date']."</strong></td>";
						echo  "<td><strong>".$q['Pickup']."</strong></td>";
						echo  "<td><strong>".$q['No_of_childpassenger']."</strong></td>";
						echo  "<td><strong>".$q['No_of_adultpassenger']."</strong></td>";
						echo "<td><strong>".$q['No_of_totalpassenger']."</strong></td>";
						
						echo  "<td><strong>".($rt1=$q['No_of_childpassenger']*150)."</strong></td>";
						echo  "<td><strong>".($rt2=$q['No_of_adultpassenger']*400)."</strong></td>";
						echo "<td><strong>".($rt1+$rt2)."</strong></td>
						</tr>";
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

