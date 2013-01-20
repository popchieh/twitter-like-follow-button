<?php

session_start();

include("connect.php");

$AID = $_GET["AID"]; // suppose you are looking at another person, AID is the person you want to follow
$FID = $_SESSION['aid']; // suppose you login already, you are FID(the follower)
        
$sql3 = "SELECT * FROM FOLLOWING WHERE AID = '$AID' AND FID = '$FID'";

$result3 = mysql_query($sql3);
$result3_count = mysql_num_rows($result3);


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">
<title>twitter-like-follow-button</title>
<link href="assets/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<?php if($result3_count != 0) { ?> <!-- it means the mysql_fetch_assoc not null, the status is "following"-->
  <span class="btn btn-success" id="follow" onclick="follow_cancel(<?php echo $AID; ?>);" onmouseover="mouseover();" onmouseout="mouseout();">following</span>
<?php } else { ?> <!-- it means the mysql_fetch_assoc is null, the status is "unfollow"-->
  <span class="btn btn-info" id="follow" onclick="follow_add(<?php echo $AID; ?>);">follow</span>
<?php } ?>  

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/follow.js"></script>
  </body>
</html>
