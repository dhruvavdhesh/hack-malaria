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
<li class="breadcrumb-item active">Home</li>
</ol>
</div>
</div>
<div class="container full-height sm-p-t-30">
<div class="d-flex justify-content-center flex-column full-height">
<h3>Dashboard: Future Prediction</h3>
<div class="card-block">
<form class="p-t-15" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Select State or Union Territory</label>
<select name="location" class="form-control" required>
<option></option>
<option value="Andaman & Nicobar Islands">Andaman & Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Dadar & Nagar Haveli">Dadar & Nagar Haveli</option>
<option value="Daman & Diu">Daman & Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu & Kashmir">Jammu & Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshwadeep">Lakshwadeep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orisha">Orisha</option>
<option value="Puducherry">Puducherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="form-group form-group-default">
<label>Blood Slide Examination</label>
<input type="number" name="blood_slide_examination" class="form-control" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group form-group-default">
<label>Malaria Cases</label>
<input type="number" name="malaria_cases" class="form-control" required>
</div>
</div>
<div class="col-md-4">
<div class="form-group form-group-default">
<label>Plasmodium Falciparum Cases</label>
<input type="number" name="plasmodium_falciparum_cases" class="form-control" required>
</div>
</div>
</div>
<button class="btn btn-primary btn-cons m-t-10 m-b-20" type="submit" name="submit">Predict</button>
</form>
</div>


<?php
$location = $_POST['location'];
$blood_slide_examination = $_POST['blood_slide_examination'];
$malaria_cases = $_POST['malaria_cases'];
$plasmodium_falciparum_cases = $_POST['plasmodium_falciparum_cases'];
if (isset($_POST['submit'])) {
$url = 'https://ussouthcentral.services.azureml.net/workspaces/7bac685f67c24da98c6e7eeb12bba115/services/53dcc946d48549a3ae306673161dce61/execute?api-version=2.0';
$data = array(
    'Inputs'=> array(
        'input1'=> array(
            'ColumnNames' => ['location', 'blood_samples_collected',  'malaria_cases', 'falciparum_plasmodium_cases'],
            'Values' => [ [ $location, $blood_slide_examination, $malaria_cases, $plasmodium_falciparum_cases ], ]
        ),
    ),
        'GlobalParameters' => null
);
$body = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer TfBa2EnnHgQkoq8ZrLhybCYVz9HCSpwmoLoClVzccuZVUGJERhypzLZiQOvE4a1ayIy22pnWLGEXWfUrGkUNRg==', 'Content-Length:' . strlen($body), 'Content-Type: application/json', 'Accept: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response  = json_decode(curl_exec($ch), true);
$predicted = $response[Results][output1][value][Values][0][4];
curl_close($ch);
}
?>

   
<div class="card-block">
<div class="table-responsive m-b-20">


<?php
if(isset($_POST['submit'])){
require_once('config.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
echo '<table class="table table-hover" id="basicTable">
<thead>
<tr>
<th style="width:10%">Year</th>
<th style="width:30%">Location</th>
<th style="width:15%">Blood Slide Examination</th>
<th style="width:15%">Malaria Cases</th>
<th style="width:15%">Plasmodium Falciparum Cases</th>
<th style="width:15%">Deaths</th>
</tr>
</thead>
<tbody>';
$result1 = mysqli_query($dbc,"SELECT blood_slide_examination, malaria_cases, plasmodium_falciparum_cases, deaths FROM data2013 WHERE location= '$location' ");
while($row = mysqli_fetch_assoc($result1)) {
echo '<tr>';
echo '<td class="v-align-middle"><p>2013</p></td>';
echo '<td class="v-align-middle"><p>' . $location . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['blood_slide_examination'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['malaria_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['plasmodium_falciparum_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['deaths'] . '</p></td>';
}
echo "</tr>";
$result2 = mysqli_query($dbc,"SELECT blood_slide_examination, malaria_cases, plasmodium_falciparum_cases, deaths FROM data2014 WHERE location= '$location' ");
while($row = mysqli_fetch_assoc($result2)) {
echo '<tr>';
echo '<td class="v-align-middle"><p>2014</p></td>';
echo '<td class="v-align-middle"><p>' . $location . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['blood_slide_examination'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['malaria_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['plasmodium_falciparum_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['deaths'] . '</p></td>';
}
echo "</tr>";
$result3 = mysqli_query($dbc,"SELECT blood_slide_examination, malaria_cases, plasmodium_falciparum_cases, deaths FROM data2015 WHERE location= '$location' ");
while($row = mysqli_fetch_assoc($result3)) {
echo '<tr>';
echo '<td class="v-align-middle"><p>2015</p></td>';
echo '<td class="v-align-middle"><p>' . $location . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['blood_slide_examination'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['malaria_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['plasmodium_falciparum_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['deaths'] . '</p></td>';
}
echo "</tr>";
$result4 = mysqli_query($dbc,"SELECT blood_slide_examination, malaria_cases, plasmodium_falciparum_cases, deaths FROM data2016 WHERE location= '$location' ");
while($row = mysqli_fetch_assoc($result4)) {
echo '<tr>';
echo '<td class="v-align-middle"><p>2016</p></td>';
echo '<td class="v-align-middle"><p>' . $location . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['blood_slide_examination'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['malaria_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['plasmodium_falciparum_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['deaths'] . '</p></td>';
}
echo "</tr>";
$result5 = mysqli_query($dbc,"SELECT blood_slide_examination, malaria_cases, plasmodium_falciparum_cases, deaths FROM data2017 WHERE location= '$location' ");
while($row = mysqli_fetch_assoc($result5)) {
echo '<tr>';
echo '<td class="v-align-middle"><p>2017</p></td>';
echo '<td class="v-align-middle"><p>' . $location . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['blood_slide_examination'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['malaria_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['plasmodium_falciparum_cases'] . '</p></td>';
echo '<td class="v-align-middle"><p>' . $row['deaths'] . '</p></td>';
}
echo "</tr>";
echo '<tr>';
echo '<td class="v-align-middle"><p>Future Prediction</p></td>';
echo '<td class="v-align-middle"><p>' . $location . '</p></td>';
echo '<td class="v-align-middle"><p>' . $blood_slide_examination . '</p></td>';
echo '<td class="v-align-middle"><p>' . $malaria_cases . '</p></td>';
echo '<td class="v-align-middle"><p>' . $plasmodium_falciparum_cases . '</p></td>';
echo '<td class="v-align-middle"><p class="bold"><a href="#!">' . round($predicted) . '</a></p></td>';
echo "</tbody>";
echo "</table>";
echo "</div>";
mysqli_close($dbc);
echo '<p class="m-t-20 m-b-50 p-b-30"> The Machine Learning model predicts with an accuracy of <strong>97.8246%</strong> and a mean absolute error of <strong>2.372743</strong>. </p>';
}
?>


</div>
</div>
</div>
        
        
     <?php
	require_once('footer.php');
	?>