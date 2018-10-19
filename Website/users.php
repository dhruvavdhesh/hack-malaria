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


<div class="page-container ">
<div class="page-content-wrapper ">
<div class="content sm-gutter">
<div class="bg-white">
<div class="container">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item">HackMalaria.ml</li>
<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
<li class="breadcrumb-item"><a href="users.php">Users</a></li>
<li class="breadcrumb-item active">View</li>
</ol>
</div>
</div>
<div class="container full-height sm-p-t-30">
<div class="d-flex justify-content-center flex-column full-height ">
<h3>View All Users</h3>
<div class="card-block">
<div class="table-responsive">


<?php
require_once('config.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$result = mysqli_query($dbc,"SELECT * FROM users");
echo '<table class="table table-hover" id="basicTable">
<thead>
<tr>
<th style="width:15%">First Name</th>
<th style="width:15%">Last Name</th>
<th style="width:15%">Username</th>
<th style="width:20%">Email</th>
<th style="width:20%">Phone Number</th>
<th style="width:15%">Access Level</th>
</tr>
</thead>
<tbody>';
while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td class="v-align-middle"><p>' . $row['first_name'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['last_name'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['username'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['email'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['phone_number'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['access_level'] . '</p></td>';
echo "</tr>";
}
echo "</tbody>";
echo "</table>";
mysqli_close($dbc);
?>


</div>
</div>
</div>
</div>
</div>
        

<?php
require_once('footer.php');
?>