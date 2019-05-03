<?php
    session_start();
 
   $username =($_POST['username']);
  $password =($_POST['password']);
    if(empty($username))
    {
     echo "Empty or invalid email address";
    }
     if(empty($password)){
     echo "Enter your password"; 
      }
      $m=new MongoClient();
     // Select Database
     if($m)
      {
     $db=$m->travel;
      // Select Collection
	  
    $collection =$db->registration;
     $qry =array("Email" =>$username,"Password" =>$password);
      $result =$collection->findOne($qry);
    if($result){

		$_SESSION['user']=$username;
		//echo $_SESSION['user'];
	//echo "<script>alert('Log in Successfullyy...')</script>";
	 

	 
 header('location:Home.php');
       }
    else
     { echo "<script>alert('Log UnSuccessfullyy...')</script>";
     }

      } else { 
      die("Mongo DB not connected");
      } 
        
      ?>