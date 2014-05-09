<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook Login</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/mystyles.css">
	<script type="text/javascript" src="dist/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<script type="text/javascript">

window.fbAsyncInit = function() {
	FB.init({
	  appId      : '1450171935207021',
	  cookie     : true,  // enable cookies to allow the server to access 
	                      // the session
	  xfbml      : true,  // parse social plugins on this page
	  version    : 'v2.0' // use version 2.0
	});
};

function fbcall(){
	var uri = encodeURI('http://localhost/facebook');
	FB.getLoginStatus(function(response) {
	    if (response.status === 'connected') {
	    	//window.location.href=uri;
	      	console.log('Logged in.');
	      	bringInfo();
	    } else {
	      	window.location = encodeURI("https://www.facebook.com/dialog/oauth?client_id=1450171935207021&redirect_uri="+uri+"&response_type=token");
	    }
	});
}



// Load the SDK asynchronously
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

function bringInfo(){
	FB.api('/me', function(response){
		var name = response.name;
        var email = response.email;
        var userfbid = response.id;
		//$.post("register.php", {name:name, email:email, userfbid:userfbid});
		$.ajax({
          type: "POST",
          url: 'register.php',
          data: "fb="+true+"&name="+name+"&userfbid="+userfbid+"&email="+email
        });
        //alert("fb="+true+"&name="+name+"&userfbid="+userfbid+"&email="+email);
		window.location.href="index.php";
	  	document.getElementById('message').innerHTML = "Hello " + response.name + ". How are you today?";
	  	document.getElementById('all').innerHTML = JSON.stringify(response);
	});
}
</script>
<div class="container main">
	<div class="row">
		<div class="col-lg-5 col-lg-offset-3">
		<?php 
			if(isset($_SESSION['email'])){
					echo "hello user " . $_SESSION['email'];
					?>
					<a href="logout.php">Logout</a>
					<?php
			} else {
				?>
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalRegister">Signup</button>
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModalLogin">Login</button>
				<?php
			}
		?>
		</div>
	</div>
</div>
<!-- MODAL -->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-lg-6">
        		<h3>Login</h3>
        		<form method="post" action="login.php">
        			<label class="control-label">Email</label>
        			<input class="form-control" type="text" name="email" />
        			<label class="control-label">Password</label>
        			<input class="form-control" type="password" name="password" /><br>
        			<input class="form-control btn btn-success" type="submit" name="login" value="Login" />

        		</form>
        	</div>
        	<div class="col-lg-6">
        		<h3>Or</h3>
        		<br>
        		<h4>You can also login with these social plugins</h4>
        		<button type="button" class="btn btn-info">Login With Facebook</button>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL CODE ENDS -->
<!-- MODAL -->
<div class="modal fade" id="myModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">SignUp</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-lg-6">
        		<h3>Register</h3>
        		<form method="post" action="register.php">
        			<label class="control-label">Name</label>
        			<input class="form-control" type="text" name="name" /><br>
        			<label class="control-label">Email</label>
        			<input class="form-control" type="text" name="email" /><br>
        			<label class="control-label">Password</label>
        			<input class="form-control" type="password" name="password" /><br>
        			<label class="control-label">Mobile</label>
        			<input class="form-control" type="password" name="mobile" /><br>

        			<input class="form-control btn btn-success" type="submit" name="login" value="Register" />

        		</form>
        	</div>
        	<div class="col-lg-6">
        		<h3>Or</h3>
        		<br>
        		<h4>You can also register and login with these social plugins</h4>
        		<button type="button" class="btn btn-info" onclick="fbcall();">Login With Facebook</button>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div id="message">
	
</div>
<div id="all">
	
</div>
<!-- MODAL CODE ENDS -->
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>