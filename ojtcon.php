<?php
	$studname = $_POST['studname'];
	$studno = $_POST['studno'];
	$cellnum = $_POST['cellnum'];
	$course = $_POST['course'];
	$email = $_POST['email'];
	$term = $_POST['term'];
	$graddate = $_POST['graddate'];
	$companyname = $_POST['companyname'];
	$addressee = $_POST['addressee'];
	$address = $_POST['address'];
	$position = $_POST['position'];
	$dept = $_POST['dept'];
	$comptelno = $_POST['comptelno'];
	$areadept = $_POST['areadept'];
	$supervisor = $_POST['supervisor'];
	$supno = $_POST['supno']; 

	//Database connection
	$conn = new mysqli('localhost', 'pdcazamdb', 'T2kWPWrwgN', 'instudex');
	if($conn->connect_error){
		die('Connection Failed: ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("INSERT into ojtform (studname, studno, cellnum, course, email, term, graddate, companyname, addressee, address, position, dept, comptelno, areadept, supervisor, supno) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("siisssssssssissi", $studname, $studno, $cellnum, $course, $email, $term, $graddate, $companyname, $addressee, $address, $position, $dept, $comptelno, $areadept, $supervisor, $supno);
		$stmt->execute();
		echo"Registration successfull.";
		$stmt->close();
		$conn->close();	
	}
?>