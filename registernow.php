<!DOCTYPE HTML>
<html>
<body>

 <?php

 	include_once 'config/connection.php';

	$passErr = $matchpassErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST['repass'])) {
	    $repassErr = "please re-enter your password";
	  } else {
	    $fname = test_input($_POST["fname"]);
	  }

	  if ($_POST['pass'] != $_POST['repass']){
	  	$matchpassErr = "please enter a valid last name";
	  } else {
	  	$fname = test_input($_POST["lname"]);
	  }



	}


	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pass = $_POST['pass'];
	$repass = $_POST['repass'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$faculty = $_POST['faculty'];
	$degree = $_POST['degree'];
	$year = $_POST['year'];
	$about = $_POST['about'];
	$credit = $_POST['credit'];
	$expiry = $_POST['expiry'];
	$cvv = $_POST['cvv'];

	$query="SELECT count(mem_id) from qbandb.member;";
	$stmt1 = $con->prepare($query);
    $stmt1->execute();
    $result=$stmt1->fetchAll();
    foreach ($result as $tuple){
    	$memid=$tuple['count(mem_id)'];
	}


   $query2= "INSERT INTO qbandb.member values ($memid+1, 0, '$fname', '$lname', $degree, $faculty, '$phone', $year, '$about', '$email', '$pass', '$credit', $expiry, $cvv);";
	$stmt = $con->prepare($query2);
    $stmt->execute();

  ?>
 
<meta charset="UTF-8">
<meta http-equiv="refresh" content="1; url=dashboard.php">
 
<script>
  window.location.href = "dashboard.php"
</script>
 
<title>Page Redirection</title>
 
<!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
You are all done! You will now be redirected to the dashboard <br>
If you are not redirected automatically, follow the <a href='dashbaord.php'>link to example</a>

</body>
</html>