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

</head>


<body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
<div class="header p-r-0 bg-primary">
<div class="header-inner header-md-height">
<a href="dashboard.php" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a><div>
<div class="brand inline no-border hidden-xs-down">
<img src="images/logo.png" alt="Logo" data-src="images/logo.png" data-src-retina="images/logo.png" width="240" height="40"></div>
</div>
<div class="d-flex align-items-center">
<div class="pull-left p-r-10 fs-14 font-heading hidden-md-down text-white">
<span class="bold"><?php echo $_SESSION['first_name']; ?></span> <span class="bold"><?php echo $_SESSION['last_name']; ?></span>
</div>
<div class="dropdown pull-right">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
<img src="images/avatar.png" alt="Avatar" data-src="images/avatar.png" data-src-retina="images/avatar.png" width="32" height="32">
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
<a href="feedback.php" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
<a href="sign-out.php" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">Sign Out</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
</div>
</div>
</div>
</div>
<div class="bg-white">
<div class="container">
<div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
<a href="index.html#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
</a>
<ul>
<li>
<a href="dashboard.php">Analytics</a>
</li>
<li>
<a href="javascript:void(0);">Data<span class="arrow"></span></a>
<ul>
<li>
<a href="data-2013.php">2013</a>
</li>
<li>
<a href="data-2014.php">2014</a>
</li>
<li>
<a href="data-2015.php">2015</a>
</li>
<li>
<a href="data-2016.php">2016</a>
</li>
<li>
<a href="data-2017.php">2017</a>
</li>
</ul>
</li>
<li>
<a href="javascript:void(0);">Users<span class="arrow"></span></a>
<ul>
<li>
<a href="users.php">View</a>
</li>
<li>
<a href="sign-up.php">Sign Up</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>