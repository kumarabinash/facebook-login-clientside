<?php require_once "dist/php/connection.php"; ?>
<?php 

if(isset($_POST)){
	$email = $_POST['email'];
	$password = $_POST['password'];

	

	$query = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}' LIMIT 1";
	$result = mysql_query($query);

	if($result){
		if(mysql_num_rows($result)==1){
			session_start();
			$row = mysql_fetch_assoc($result);
			$_SESSION['email'] = $row['email'];
			$_SESSION['name'] = $row['name'];
			header("Location:index.php");
		}
	}
}

 ?>