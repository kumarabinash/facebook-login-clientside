<!DOCTYPE html>
<html>
<head>
	<title>Facebook Login</title>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist/css/mystyles.css">
	<script type="text/javascript" src="dist/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Signup/Login</button>
	</div>
</div>
<!-- MODAL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cart</h4>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-lg-6">
        		<h3>Login</h3>
        		<form method="post" action="login.php">
        			<label class="control-label">Email</label>
        			<input class="form-control" type="text" name="email" />
        			<label class="control-label">Password</label>
        			<input class="form-control" type="password" name="email" /><br>
        			<input class="form-control btn btn-success" type="submit" name="login" value="Login" />

        		</form>
        	</div>
        	<div class="col-lg-6">
        		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Continue shopping</button>
        <button type="order" class="btn btn-warning">Order Now!</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL CODE ENDS -->
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
</body>
</html>