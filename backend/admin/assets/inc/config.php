<?php
<<<<<<< HEAD
$dbuser="root";
$dbpass="";
$host="localhost";
$db="hmisphp";
$mysqli=new mysqli($host,$dbuser, $dbpass, $db);
?>
=======
$dbuser = "if0_42146968";
$dbpass = "giotlROy7ogc";
$host   = "sql305.infinityfree.com";
$db     = "if0_42146968_hmisphp";

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Database Connection Failed: " . $mysqli->connect_error);
}
?>
>>>>>>> efda95a0db690788d1d31a2fdd0bb737ad9e8ee2
