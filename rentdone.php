<?php
  session_start();

  if (!isset($_SESSION['username4'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: rentdone.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username4']);
  	header("location: Sciencelogin.php");
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="header">
    	<h2>Home Page</h2>
    </div>
    <div class="content">
      	<!-- notification message -->
      	<?php if (isset($_SESSION['rentdone'])) : ?>
          <div class="error rentdone" >
          	<h3>
              <?php
              	echo $_SESSION['rentdone'];
              	unset($_SESSION['rentdone']);
              ?>
          	</h3>
          </div>
      	<?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['full_name'])) : ?>
        	<p>Welcome <strong><?php echo $_SESSION['full_name']; ?></strong></p>

        <?php endif ?>
    </div>
  </body>
</html>