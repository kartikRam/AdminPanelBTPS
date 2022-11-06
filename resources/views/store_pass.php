<?php

	require 'connect.php';

	$source = $_POST['source'];
	$destination = $_POST['destination'];
	$days = $_POST['days'];
	$pass_type = $_POST['pass_type'];
	$kilometer=$_POST['total_kilometer'];
	$rupees=$_POST['rupees'];
	$submit_date=$_POST['submit_date'];
	$uid=$_POST['uid'];
	$utype=$_POST['utype'];
	$id=1;
	$depo_manager_id=0;
	$payment="pending";

	$depo_manager="SELECT worker_id,branch_name FROM worker WHERE worker_role='$id'";
	$ans=mysqli_fetch_assoc($depo_manager);
	foreach ($ans as $d) {
		if(strcasecmp($source, $d['branch_name'])){
			$depo_manager_id=$d['worker_id'];
		}
	}

	if(strcmp($utype, "Student")){
		$sql = "INSERT INTO pass (user_id,source, destination, submit_date, days, amount,payment,depo_manager_id,kilometer) VALUES 
		('$uid','$source' ,'$destination', '$submit_date', '$days', '$rupees','$payment','$depo_manager_id','$kilometer')";
	}else{


	$sql = "INSERT INTO pass (user_id,source, destination, submit_date, days, amount,payment,kilometer) VALUES 
	('$uid','$source' ,'$destination', '$submit_date', '$days', '$rupees','$payment','$kilometer')";

	}
	if (mysqli_query($conn, $sql)) {
		echo "success";
	}
	else {
		echo "error";
	}

?>