<?php
	$studname 	= $_POST['studname'];
	$contactnum = $_POST['contactnum'];
	$email 		= $_POST['email'];
	$yrlvl 		= $_POST['yrlvl'];
	$numunits 	= $_POST['numunits'];
	$univ		= $_POST['univ'];
	$address 	= $_POST['address'];
	$dept 		= $_POST['dept'];
	$program 	= $_POST['program'];
	$addressP 	= $_POST['addressP'];
	$guardian 	= $_POST['guardian'];
	$guardno 	= $_POST['guardno'];

	//Database connection
	$conn = new mysqli('localhost', 'root', '', 'instudex');
	if($conn->connect_error){
		die('Connection Failed: ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT into instud (studname, contactnum, email, yrlvl, numunits, univ, address, dept, program, addressP, guardian, guardno) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sississssssi", $studname, $contactnum, $email, $yrlvl, $numunits, $univ, $address, $dept, $program, $addressP, $guardian, $guardno);
		$stmt->execute();
		echo"Registration successfull.";
		$stmt->close();
		$conn->close();	
	}
?>