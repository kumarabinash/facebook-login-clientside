<?php require_once "dist/php/connection.php"; ?>
<?php 
if(isset($_POST)){
	//print_r($_POST);	
	$name = $_POST['name'];
	$email = $_POST['email'];
	if(isset($_POST['password'])){
		$password = $_POST['password'];
		$mobile = $_POST['mobile'];
	}
	if(isset($_POST['fb'])){
		$fb = $_POST['fb'];
		$userfbid = $_POST['userfbid'];
	}

	$query = "INSERT INTO users(name, email, password, mobile) ";
	$query .= "VALUES ('{$name}', '{$email}', '{$password}', {$mobile}) ";

	$queryfb = "INSERT INTO users(name, fb, email, userfbid) ";
	$queryfb .= "VALUES('{$name}', {$fb}, '{$email}', {$userfbid})";

	if(isset($password)){
		$result = mysql_query($query);
	} elseif(isset($fb)){
		$result = mysql_query($queryfb);
	}

	if($result){
		session_start();
		$_SESSION['email'] = $email;
	} else {
		echo mysql_error();
	}

}
?>
