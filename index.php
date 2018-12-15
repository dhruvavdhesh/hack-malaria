<?php
  require_once('config.php');
  $error_msg = "";
  if (!isset($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
      if (!empty($user_username) && !empty($user_password)) {
        $query = "SELECT user_id, username, first_name, last_name, access_level, email, phone_number, password FROM users WHERE username = '$user_username' AND password = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);
        if (mysqli_num_rows($data) == 1) {
          $row = mysqli_fetch_array($data);
		   session_start();
          $_SESSION['username'] = $row['username'];
		  $_SESSION['first_name'] = $row['first_name'];
		  $_SESSION['last_name'] = $row['last_name'];
		  $_SESSION['access_level'] = $row['access_level'];
		  $_SESSION['email'] = $row['email'];
		  $_SESSION['phone_number'] = $row['phone_number'];
		  header('Location: dashboard.php');	
        }
        else {
          $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    
    <title>HackMalaria.ml</title>
    
    <!--Favicon-->
    <link rel="icon" type="image/gif" href="images/favicon.png">
    
    <!--Stylesheets-->
   	<link rel="stylesheet" href="css/pace-theme-flash.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/switchery.min.css" />
    <link rel="stylesheet" href="css/nv.d3.min.css" />
    <link rel="stylesheet" href="css/mapplic.css" />
    <link rel="stylesheet" href="css/rickshaw.min.css" />
    <link rel="stylesheet" href="css/datepicker3.css" />
    <link rel="stylesheet" href="css/daterangepicker-bs3.css" />
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="css/dataTables.fixedColumns.min.css" />
    <link rel="stylesheet" href="css/datatables.responsive.css" />
    <link rel="stylesheet" href="css/dashboard.widgets.css" />
    <link rel="stylesheet" href="css/pages-icons.css" />
    <link rel="stylesheet" href="css/modern.css" />
    
    <!--Google Analytics-->
    <?php
	require_once('analytics.php');
	?>

	<!--Search Engine Optimization-->
	<?php
	require_once('seo.php');
	?>

<meta charset="UTF-8">
</head>


<body class="fixed-header">
<div class="login-wrapper">
<div class="bg-pic">
<img src="images/mosquito.jpg" data-src="images/mosquito.jpg" data-src-retina="images/mosquito.jpg" alt="Mosquito" class="lazy">
</div>
<div class="login-container bg-white">
<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
<img src="images/yellow.png" alt="Logo" data-src="images/yellow.png" data-src-retina="images/yellow.png" width="125" height="125">
<p class="p-t-35">Sign in to your <a href="index.php"><span class="bold">HackMalaria.ml</span></a> account</p>


<?php
  if (empty($_SESSION['user_id'])) {
    echo '<p class="error">' . $error_msg . '</p>';
?>


<form id="form-login" class="p-t-15" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="form-group form-group-default">
<label>Login</label>
<div class="controls">
<input type="text" name="username" placeholder="Username" class="form-control" value="<?php if (!empty($user_username)) echo $user_username; ?>" required>
</div>
</div>
<div class="form-group form-group-default">
<label>Password</label>
<div class="controls">
<input type="password" class="form-control" name="password" placeholder="Password" required>
</div>
</div>
<input class="btn btn-primary btn-cons m-t-10" type="submit" name="submit" value="Sign In"></button>
</form>


<?php
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '.</p>');
  }
?>


<div class="pull-bottom sm-pull-bottom">
<div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
<div class="col-sm-9 no-padding m-t-10">
<p>
<small>
<span class="hint-text">&copy; 2018 </span> | <a href="http://dhruvavdhesh.in" target="_blank">Dhruv Avdhesh</a> | <span class="hint-text">All rights reserved</span><br><span class="hint-text">Made with &hearts; in India.</span> Powered by <a href="http://nvbdcp.gov.in/" target="_blank">National Vector Borne Diseases Control Programme</a>, <a href="https://mohfw.gov.in/" target="_blank">Ministry of Health & Family Welfare</a>.
</small>
</p>
</div>
</div>
</div>
</div>
</div>
</div>


		<script type="text/javascript" src="js/pace.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/tether.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-easy.js"></script>
        <script type="text/javascript" src="js/jquery.unveil.min.js"></script>
        <script type="text/javascript" src="js/jquery.ioslist.min.js"></script>
        <script type="text/javascript" src="js/jquery.actual.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="js/select2.full.min.js"></script>
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/switchery.min.js"></script>
        <script type="text/javascript" src="js/d3.v3.js"></script>
        <script type="text/javascript" src="js/nv.d3.min.js"></script>
        <script type="text/javascript" src="js/utils.js"></script>
        <script type="text/javascript" src="js/tooltip.js"></script>
        <script type="text/javascript" src="js/interactiveLayer.js"></script>
        <script type="text/javascript" src="js/axis.js"></script>
        <script type="text/javascript" src="js/line.js"></script>
        <script type="text/javascript" src="js/lineWithFocusChart.js"></script>
        <script type="text/javascript" src="js/hammer.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="js/mapplic.js"></script>
        <script type="text/javascript" src="js/rickshaw.min.js"></script>
        <script type="text/javascript" src="js/MetroJs.min.js"></script>
        <script type="text/javascript" src="js/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="js/skycons.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/moment.min.js"></script>
        <script type="text/javascript" src="js/daterangepicker.js"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/dataTables.tableTools.min.js"></script>
        <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery-datatable-bootstrap.js"></script>
        <script type="text/javascript" src="js/datatables.responsive.js"></script>
        <script type="text/javascript" src="js/lodash.min.js"></script>
        <script type="text/javascript" src="js/pages.min.js"></script>
        <script type="text/javascript" src="js/dashboard.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        
    
    </body>
	
    