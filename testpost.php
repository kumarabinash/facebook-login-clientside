<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="dist/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$.post("register.php", {name:"man", email:"man@world.com", password:"wife", mobile:"8989898989"});
	<?php header("Location:index.php"); ?>
</script>
</body>
</html>
