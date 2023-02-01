<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$conn->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<style>
	/* body{
		display:flex;
		justify-content:center;
		flex-direction:column;
	} */
	
	button{
		padding:2.5rem;
		display:flex;
		margin:auto;
		margin-top:3rem;
		border-radius:15px;
		text-align:center;
		background:lightblue;
		
	}
	button a{
		text-decoration:none;
		color:black;
		font-size:1.8rem;
	}
</style>
<h1 style ="color:green;text-align:center;margin-top:5rem;">Ju jeni rexhistruar me sukses !</h1>
<h1 style ="color:black;text-align:center;margin-top:2rem;">Kthehuni prapa dhe vazhdoni me log in...</h1>
<button><a href="index.html">Klikoni këtu !</a></button>


</body>
</html>