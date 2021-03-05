<?php

include_once('dbconn.php');

    $cim = $_POST['cim'];
    $leiras = $_POST['leiras'];
    $statusz = $_POST['statusz'];
    $knev = $_POST['knev'];
    $kemail = $_POST['kemail'];
	//adatok bevitele sqlbe
	if($db->connect_error){
		echo "$db->connect_error";
		die("Connection Failed : ". $db->connect_error);
	} else {
        $INSERT = "INSERT Into tasks(cim, leiras, statusz, knev, kemail) values( ?, ?, ?, ?, ?)";
		$stmt = $db->prepare($INSERT);
		$stmt->bind_param("sssss", $cim, $leiras, $statusz, $knev, $kemail);
		$execval = $stmt->execute();
		echo $execval;
		$stmt->close();
		$db->close();
        header('location: index.php');
	}
?>