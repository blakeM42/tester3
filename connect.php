<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	//Database connection 
	$conn = new mysqli('https://blakem42.github.io/','root','tester3','ContactUs');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = %conn->prepare("insert into registration(name, email, phone, message)
		values(?, ?, ? , ?)")
		$stmt->bing_param("ssis",$name, $email, $phone, $message);
		$stmt->execute();
		echo "registration successfully...";
		$stmt->close();
		$conn->close();
?>
