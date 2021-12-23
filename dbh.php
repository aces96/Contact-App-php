<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "contapp";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if (!$conn){

    die ("conn failed :" .mysqli_connect_error());
}
