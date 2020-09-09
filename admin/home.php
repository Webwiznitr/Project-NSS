<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'config.php';
  $email = $_POST["email"];
  $suggest = $_POST["suggest"];
  $sql = "INSERT INTO `suggestion` (`email`, `suggest`, `date`) VALUES ('$email', '$suggest', current_timestamp())";
  mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Any Suggestions:</h1>
    <form action="" method="post">
  <div>
    <input type="email" name="email" placeholder="Email Id">
  </div>
  <div>
    <textarea name="suggest" cols="30" rows="10" placeholder="Type your suggestions here"></textarea>
  </div>
  </div>
  <button type="submit">Submit</button>
</form>
</div>


<div>
<table align="right">
  <h3 align="right">New Updates from the admin</h3>
<?php
   include "config.php";
   $sql = 'SELECT post FROM updates order by srno desc';
   $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
      echo "<tr><td>{$row['post']}</td></tr> ";
   }
   
  //  mysql_close($conn);
?>
  </tbody>
</table>
</div>
</body>
</html>