<?php
$showerror="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'config.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" & $password == "admin"){
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['username']=$username;
          header("location: admin.php");
        }
        else{
          $showerror = "Invalid Credentials";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div>
        <h1>Sign In for admin</h1>
        <form action="login.php" method="post">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" aria-describedby="emailHelp">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <button type="submit">Log In</button>
    </form>
    <div>
        <?php echo $showerror ?>
    </div>
    </div>
    
</body>
</html>