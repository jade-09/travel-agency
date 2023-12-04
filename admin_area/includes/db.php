<?php

$con = mysqli_connect("traveldata.mysql.database.azure.com", "sreeni", "amrita@123", "tagency");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>
