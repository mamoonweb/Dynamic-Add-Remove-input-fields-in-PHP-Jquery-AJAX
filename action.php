<?php
 $con = mysqli_connect("localhost", "root", "", "test");

	$visitorData = count($_POST["name"]);
	
	if ($visitorData > 0) {
	    for ($i=0; $i < $visitorData; $i++) { 
		if (trim($_POST['name'] != '') && trim($_POST['email'] != '')) {
			$name   = $_POST["name"][$i];
			$email  = $_POST["email"][$i];
			$query  = "INSERT INTO test VALUES ('', '$name','$email', now())";
			$result = mysqli_query($con, $query);
		}
	    }
	    echo "Data inserted successfully";
	}else{
	    echo "Please Enter visitor name";
	}

?>