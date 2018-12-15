<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: index.php");
}
if($_SESSION['access_level']=='Analyst'){
	header("location: access-denied.php");
  }
require_once('header.php');
?>


<div class="page-container">
<div class="page-content-wrapper">
<div class="content sm-gutter">
<div class="bg-white">
<div class="container">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">HackMalaria.ml</li>
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item"><a href="users.php">Users</a></li>
<li class="breadcrumb-item active">Sign Up</li>
</ol>
</div>
</div>
<div class="register-container full-height sm-p-t-30">
<div class="d-flex justify-content-center flex-column full-height">
<h3>Create a New Account</h3>


<?php
  require_once('config.php');
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  if (isset($_POST['submit'])) {
	$first_name = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	$last_name = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	$phone_number = mysqli_real_escape_string($dbc, trim($_POST['phone_number']));
	$access_level = mysqli_real_escape_string($dbc, trim($_POST['access_level']));
    if (!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
      $query = "SELECT * FROM users WHERE username = '$username'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        $query = "INSERT INTO users (first_name, last_name, username, password, email, phone_number, access_level) VALUES ('$first_name', '$last_name', '$username', SHA('$password1'), '$email', '$phone_number', '$access_level')";
        mysqli_query($dbc, $query);
        echo '<p class="text-success bold">New account has been successfully created.</p>';
        mysqli_close($dbc);
      }
      else {
        echo '<p class="text-danger bold">An account already exists for this username. Please use a different username.</p>';
        $username = "";
      }
    }
    else {
      echo '<p class="text-danger bold">You must enter all of the sign up data, including the desired password twice.</p>';
    }
  }
?>


<form id="form-register" class="p-t-15" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>First Name</label>
<input type="text" name="first_name" class="form-control" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Last Name</label>
<input type="text" name="last_name" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label>Username</label>
<input type="text" name="username" class="form-control" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Password</label>
<input type="password" name="password1" class="form-control" maxlength="12" minlength="8" placeholder="8 to 12 characters" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Re-enter Password</label>
<input type="password" name="password2" class="form-control" maxlength="12" minlength="8" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Phone Number</label>
<input type="text" name="phone_number" class="form-control" maxlength="10" minlength="10" placeholder="10 digits" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Access Level</label>
<select name="access_level" class="form-control" required>
<option></option>
<option value="Admin">Admin</option>
<option value="Analyst">Analyst</option>
</select>
</div>
</div>
</div>
<button class="btn btn-primary btn-cons m-t-10 m-b-20" type="submit" name="submit">Sign Up</button>
</form>
</div>
</div>
</div>
        
        
     <?php
	require_once('footer.php');
	?>