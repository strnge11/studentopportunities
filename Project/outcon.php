<?php
	$studname	= $_POST['studname'];
	$studno 	= $_POST['studno'];
	$cellnum 	= $_POST['cellnum'];
	$course 	= $_POST['course'];
	$email 		= $_POST['email'];
	$term 		= $_POST['term'];
	$graddate 	= $_POST['graddate'];
	$univ 		= $_POST['univ'];
	$dest 		= $_POST['dest'];
	$units 		= $_POST['units'];
	$accom 		= $_POST['accom'];

	//Database connection
	$conn = new mysqli('localhost', 'root', '', 'outstudex');
	if($conn->connect_error){
		die('Connection Failed: ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT into outstud (studname, studno, cellnum, course, email, term, graddate, univ, dest, units, accom) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("siissssssis", $studname, $studno, $cellnum, $course, $email, $term, $graddate, $univ, $dest, $units, $accom);
		$stmt->execute();
		echo"Registration successfull.";
		$stmt->close();
		$conn->close();	
	}
?>