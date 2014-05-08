<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">FOODZINGA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="browse.php">Browse</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <?php 
      	/*if(logged_in()){
			include "dist/php/nav-user.php";
		} else {
			include "dist/php/nav-guest.php";
		}*/
      ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>