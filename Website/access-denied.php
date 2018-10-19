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
<li class="breadcrumb-item"><a href="users.php">Users</a></li>
<li class="breadcrumb-item active">Access Denied</li>
</ol>
</div>
</div>
<div class="lock-container full-height">
<div class="full-height sm-p-t-50 align-items-center">
<div align="center" class="p-t-50 p-b-50">
<img src="images/denied.png" data-src="images/denied.png" data-src-retina="images/denied.png" width="128" height="128" alt="Access Denied">
</div>
<div align="center" class="p-t-50 p-b-50">
<h2 align="center">Access Denied.</h2>
</div>
</div>
</div>
</div>
        

<?php
require_once('footer.php');
?>