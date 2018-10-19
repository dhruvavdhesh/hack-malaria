<?php
session_start();
if(!isset($_SESSION['username'])){
  header("location: index.php");
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
<li class="breadcrumb-item">Data</li>
<li class="breadcrumb-item active">2014</li>
</ol>
</div>
</div>
<div class="container full-height sm-p-t-30">
<div class="d-flex justify-content-center flex-column full-height ">
<h3>Data: 2014</h3>
<div class="card-block">
<div class="table-responsive">


<?php
require_once('config.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$result = mysqli_query($dbc,"SELECT * FROM data2014");
echo '<table class="table table-hover" id="basicTable">
<thead>
<tr>
<th style="width:40%">Location</th>
<th style="width:15%">Blood Slide Examination</th>
<th style="width:15%">Malaria Cases</th>
<th style="width:15%">Plasmodium Falciparum Cases</th>
<th style="width:15%">Deaths</th>
</tr>
</thead>
<tbody>';
while($row = mysqli_fetch_array($result))
{
echo '<tr>';
echo '<td class="v-align-middle"><p>' . $row['location'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['blood_slide_examination'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['malaria_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['plasmodium_falciparum_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['deaths'] . '</p></td>';
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