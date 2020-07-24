<?php include 'connect.inc.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
	$firstname = $lastname = $email = $contact = $graduationyear = $dateofarrival = $reasonofarrival = $accomodationreq = $noofdays = $noofpeople = $anyqueries = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$firstname = test_input($_POST['firstname']);
	$lastname = test_input($_POST['lastname']);
	$email = test_input($_POST['email']);
	$contact = test_input($_POST['contact']);
	$graduationyear = test_input($_POST['graduationyear']);
	$dateofarrival = test_input($_POST['dateofarrival']);
	$reasonofarrival = test_input($_POST['reasonofarrival']);
	$accomodationreq = test_input($_POST['accomodationreq']);
	$noofdays = test_input($_POST['noofdays']);
	$noofpeople = test_input($_POST['noofpeople']);
	$anyqueries = test_input($_POST['anyqueries']);
}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	$query = "INSERT INTO alumni (First_Name, Last_Name, Email, Contact, Year_of_Graduation, Date_of_Arrival, Reason_of_Arrival, Accomodation_Required, NoOfDays, People_Accompanying, Queries) VALUES ('$firstname', '$lastname', '$email', '$contact', '$graduationyear', '$dateofarrival', 'reasonofarrival', '$accomodationreq', '$noofdays', '$noofpeople', '$anyqueries')";

	if($conn->query($query)===TRUE){
	echo 'Account Created';
	}
	else{
		echo "Error".$conn->error;
	}

?>

</body>
</html>
