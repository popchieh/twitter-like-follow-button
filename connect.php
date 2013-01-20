<?php

$user = 'username'; // database user name
$passwd = 'userpassword'; // database user password

$link = mysql_connect('localhost', $user, $passwd); // test in localhost
if (!@$link) {
    die('Could not connect: ' . mysql_error());
}
//echo 'Connected successfully';

mysql_select_db("test_follow"); // databasename
 
?> 