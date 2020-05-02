<?php
	$scho			= $_POST['scho'];
	$surname 		= $_POST['surname'];
	$firstname 		= $_POST['firstname'];
	$midname 		= $_POST['midname'];
	$studno 		= $_POST['studno'];
	$program 		= $_POST['program'];
	$existing 		= $_POST['existing'];
	$remunits 		= $_POST['remunits'];
	$remterms 		= $_POST['remterms'];
	$dateofbirth 	= $_POST['dateofbirth'];
	$age 			= $_POST['age'];
	$placeofbirth 	= $_POST['placeofbirth'];
	$email 			= $_POST['email'];
	$citizenship 	= $_POST['citizenship'];
	$gender 		= $_POST['gender'];
	$civilstat 		= $_POST['civilstat'];
	$religion 		= $_POST['religion']; 
	$address 		= $_POST['address']; 
	$contact 		= $_POST['contact']; 

	//Database connection
	$conn = new mysqli('localhost', 'pdcazambdb', 'T2kWPWrwgN', 'pdcazamdb');
	if($conn->connect_error){
		die('Connection Failed: ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT into scholar (scho, surname, firstname, midname, studno, program, existing, remunits, remterms, dateofbirth, age, placeofbirth, email, citizenship, gender, civilstat, religion, address, contact) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssissiisisssssssi", $scho, $surname, $firstname, $midname, $studno, $program, $existing, $remunits, $remterms, $dateofbirth, $age, $placeofbirth, $email, $citizenship, $gender, $civilstat, $religion, $address, $contact);
		$stmt->execute();
		echo"Registration successfull.";
		$stmt->close();
		$conn->close();	
	}
?>
