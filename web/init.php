<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root@localhost";
 $dbpass = "";
 $db = "myriadshop";
 $conn = mysqli_connect("localhost", "root", $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

?>
