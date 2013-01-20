<?php

	session_start();

	include("../connect.php"); // input the mysql-connect info

	$AUTHOR_ID = $_POST['Author_id'];
	$FOLLOWER_ID = $_SESSION['aid']; // suppose you already login and the your id is $_SESSION['aid']

	$sql = "DELETE FROM FOLLOWING WHERE AID = '$AUTHOR_ID' AND FID = '$FOLLOWER_ID'";

	$result = mysql_query($sql);

	$sql2 = "SELECT NUM_F FROM AUTHOR WHERE AID = '$AUTHOR_ID'"; // NUM_F means the number of follower that author AID has

	$result2 = mysql_query($sql2);

	$numf = mysql_fetch_assoc($result2);
	$numf2 = $numf['NUM_F'];
	$numf2--;

	$sql3 = "UPDATE AUTHOR SET NUM_F = '$numf2' WHERE AID = '$AUTHOR_ID'";
	mysql_query($sql3);

	echo 'success';
?>