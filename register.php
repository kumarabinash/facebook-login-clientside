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

	$queryprefb = "SELECT * FROM users WHERE email='{$email}' and userfbid={$userfbid} ";
	$queryfb = "INSERT INTO users(name, fb, email, userfbid) ";
	$queryfb .= "VALUES('{$name}', {$fb}, '{$email}', {$userfbid})";

	if(isset($password)){
		$result = mysql_query($query);
	} elseif(isset($fb)){
		$resultprefb = mysql_query($queryprefb);
		if($resultprefb){
			if(mysql_num_rows($resultprefb)==0){
				$result = mysql_query($queryfb);
			} else {
				$row=mysql_fetch_assoc($resultprefb);
				session_start();
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['name'];
			}
		}
	} else {
		echo mysql_error();
	}

	if($result){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $name;
		header("Location:index.php");
	} else {
		echo mysql_error();
	}

}
?>
