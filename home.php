<?php 
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="logout.css">
</head>
<body>
     <h1>Pershendetje <?php echo $_SESSION['name']; ?></h1>
     <h1>Ju jeni lloguar me sukses!</h1>
     <h3>Klikoni butonin vazhdo per tu qasur ne faqen kryesore</h3>
     <div class="buttons">
     <button class="red"><a href="logout.php">Logout</a></button>
     <button class="blue" id = "blue" ><a href="index.html">Vazhdo</a></button>
     </div>
   
</body>
<script src="script.js"></script>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}

 ?>