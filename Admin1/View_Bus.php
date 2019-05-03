
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
						$query=$m->travel->add_bus->find(array());
						
						
						echo "<table class='table table-hover' cellspacing='15' cellpadding='15' style='border:solid 1px black';>";
                        echo "<h2>Bus<span class='red' style='color:red; font-size:30px'> Info.</span></h2>";
						echo "<td><strong>Travel Name</strong></td>";
						echo "<td><strong>Bus_Number</strong></td>";
						
						echo "<td><strong>Class</strong></td>";
						
						echo "<td><strong>Seater</strong></td>";
						
						echo "<td><strong>Address</strong></td>";
						
						echo "<td><strong>Agent_Name</strong></td>";
						
						echo "<td><strong>Contact_No</strong></td>";
						echo "<td><strong>Action</strong></td></tr>";
						

						foreach($query as $q){
						
						
						echo "<tr><td><strong>" .$q['Travel_Name']. "</strong></td>";
						echo "<td><strong>".$q['Bus_No']."</strong></td>";
						
						 echo "<td><strong>".$q['Class']."</strong></td>";
						
						echo  "<td><strong>".$q['Seater']."</strong></td>";
						echo  "<td><strong>".$q['Address']."</strong></td>";
						echo  "<td><strong>".$q['Agent_Name']."</strong></td>";
						echo "<td><strong>".$q['Contact_No']."</strong></td>";
						echo "<td><a href='busedit.php'>Edit BUs</a> &nbsp <a href='delete.php'>Delete</a></td></tr>";
					
						
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

