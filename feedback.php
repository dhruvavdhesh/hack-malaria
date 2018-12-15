<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: index.php");
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
<li class="breadcrumb-item active">Feedback</li>
</ol>
</div>
</div>
<div class="register-container full-height sm-p-t-30">
<div class="d-flex justify-content-center flex-column full-height">
<h3>Feedback</h3>
<form id="feed" class="p-t-15" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">


<?php
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mails = $_POST['mails'];
$number = $_POST['number'];
$feedback = $_POST['feedback'];
$to = 'me@dhruvavdhesh.in';
$subject = "HackMalaria.ml | Feedback";
$message = 
'First Name:<br><br>' . fname .
'Last Name: <br><br>' . lname .
'Email: <br><br>' . mails .
'Phone Number: <br><br>' . number .
'Feedback:' . feedback;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'. $mails .'>' . "\r\n";
 	if(mail($to, $subject, $message, $headers))  
   {
      echo '<p class="text-danger bold">Your feedback has been submitted successfully. Thank you!</p>';
   }
   else
   {	
      echo '<p class="text-danger bold">Error: Kindly try again.</p>';
   }
}
?>


<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>First Name</label>
<input type="text" name="fname" class="form-control" value="<?php echo $_SESSION['first_name']; ?>" placeholder="<?php echo $_SESSION['first_name']; ?>" required disabled>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Last Name</label>
<input type="text" name="lname" class="form-control" value="<?php echo $_SESSION['last_name']; ?>" placeholder="<?php echo $_SESSION['last_name']; ?>" required disabled>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" name="mails" class="form-control" value="<?php echo $_SESSION['email']; ?>" placeholder="<?php echo $_SESSION['email']; ?>" required disabled>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Phone Number</label>
<input type="number" name="number" class="form-control" value="<?php echo $_SESSION['phone_number']; ?>" placeholder="<?php echo $_SESSION['phone_number']; ?>" required disabled>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label>Feedback</label>
<textarea type="text" name="feedback" class="form-control" style="height:100px !important;" required></textarea>
</div>
</div>
</div>
<button class="btn btn-primary btn-cons m-t-10 m-b-20" type="submit" name="submit">Send</button>
</form>
</div>
</div>
</div>
        
        
     <?php
	require_once('footer.php');
	?>