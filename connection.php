<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "dbms";
$conn=mysql_connect($host,$user,$password);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
echo 'Connected successfully<br/>';
mysql_select_db($database);
?>
