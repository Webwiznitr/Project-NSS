<?php

$host = "localhost:3308"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "nssdb"; /* Database name */

$conn = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}