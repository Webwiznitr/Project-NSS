<?php 
    include('inc/header.inc.php');
?>
    <div class="clearfix"></div>
    <!-- Content  -->
    <form class="form-signin" method="post" action="ajax/login_process.php">
      <img class="mb-4 mx-auto d-block" src="../img/navbar-logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal text-center">Sign in admin of nss</h1>
      <div class="messages text-danger">
        <?php
            if(isset($_SESSION['admin']['error'])){
                echo '<i class="far fa-times-circle"></i> '.$_SESSION['admin']['error'].'<br /><br />';
            }
        ?>
    </div>
      <label for="user" class="sr-only">Username</label>
      <input type="text" id="user" class="form-control" placeholder="Username" name="userNM" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="userPWD" required>
      <input type="submit" class="btn btn-lg btn-block btn-submit" value="Log In">
    </form>
    <?php unset($_SESSION['admin']);?>
    