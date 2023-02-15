<?php

$ucafe = "http://localhost/ucafe-php/";
$ucafeSG = "http://localhost/ucafe-php/sg/";
$ucafeID = "http://localhost/ucafe-php/id/";

$servername = "localhost";
$username = "root";
$password = "";
$database = "ucafe";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
	die("Koneksi Gagal: " . mysqli_connect_error());
}
error_reporting(0);
