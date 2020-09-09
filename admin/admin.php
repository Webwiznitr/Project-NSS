<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <div><h1>Welcome Admin</h1></div>
    <div>
        <a href="logout.php">Logout</a>
    </div>

<div>
<table align="right">
  <h3 align="right">Suggestions from the viewers</h3>
  <thead>
    <tr>
      <th>Email Id</th>
      <th>Suggestions</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
<?php
   include "config.php";
   $sql = 'SELECT email, suggest, date FROM suggestion order by srno desc';
   $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "<tr><td>{$row['email']}</td>".
         "<td>{$row['suggest']} </td> ".
         "<td>{$row['date']}</td></tr> ";
   }
   
  //  mysql_close($conn);
?>
  </tbody>
</table>
</div>


<div>
<h1>Add News:</h1>
    <form action="" method="post">
  <div>
    <textarea name="update" cols="30" rows="10" placeholder="Type new post here"></textarea>
  </div>
  </div>
  <button type="submit">Submit</button>
</form>
</div>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'config.php';
  $update = $_POST["update"];
  $sql = "INSERT INTO `updates` (`post`,`date`) VALUES ('$update', current_timestamp())";
  mysqli_query($conn, $sql);
}
echo "<div>You have successfully posted";
?>
