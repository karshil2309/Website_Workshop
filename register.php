<?php

	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $dbname = "id8362320_optimus";

	  // Create connection
	  $conn = new mysqli($servername, $username, $password, $dbname);

	  //check connection

	  if ($conn->connect_error) {
	  	# code...
	  	die("Connection Failed....".$conn->connect_error);
	  }

	  if(!empty($_POST))
	  {
	  	 //print_r($_POST); die;
	  	 $fullname =$_POST['fname'];
	  	 $emailid=$_POST['email'];
			 $phone_id=$_POST['contact'];
	  	 // $select=$_POST['select1']; select1`
       $select2=$_POST['select2'];

	  	 $sql ="INSERT INTO `enrform` (`fname`, `email`,`contact` ,`select2`) VALUES ('$fullname', '$emailid', '$phone_id','$select2');";
	  	 //echo $sql; die;

	  	 if ($conn->query($sql) === TRUE )
	  	{

	       header("Location: paytheme.html");
			 }
	  else 
	  {
	  			echo"Failed to Insert";
	  }
  }

    ?>
