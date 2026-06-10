<?php
$dbuser = "if0_42146968";
$dbpass = "giotlROy7ogc";
$host   = "sql305.infinityfree.com";
$db     = "if0_42146968_hmisphp";

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

if ($mysqli->connect_error) {
    die("Database Connection Failed: " . $mysqli->connect_error);
}
?>