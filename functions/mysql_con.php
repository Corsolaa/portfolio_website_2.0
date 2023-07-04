<?php
$host = "localhost";
$user_n = "root";
$passw = "";
$datab = "brunobouwman.nl";
$con = mysqli_connect($host, $user_n, $passw, $datab);
if ($con->ping() != 1) {
    $con = null;
}
