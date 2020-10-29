<?php session_start();
  $cur_page=basename($_SERVER['PHP_SELF']); // get current page name

  if($cur_page!='authlogin.php'){   
    if(! isset($_SESSION['admin']['status'])){
        header("Location:authlogin.php");
      }
  }

  include('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NSS NITR Admin Panel </title>
    <!--    Favicon-->
    <link rel="icon" href="../img/logo.jpeg" type="image/png" sizes="16x16" />
    <meta name="keywords" content="footer, address, phone, icons" />

    <!-- Including Bootstrap And Fontawsome Files -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!--Custom Stylesheets-->
    <link rel="stylesheet" href="../css/headerfooter.css" />
    <link rel="stylesheet" href="../css/homepage.css" />
    <link rel="stylesheet" href="../css/noticeboard.css" />
    <style>
        .admin__menu ul li {
            border: 1px solid #e2e2e2;
            padding: 10px;
            font-weight: 600;
            color: #091d36;
            width: 100%;
        }

        .admin__menu ul li a {
            padding: 10px font-weight:600;
            color: #091d36;

        }

        .admin__menu button {
            width: 100%;
            border: 1px solid #e2e2e2;
            padding: 10px;
            font-weight: 600;
            color: #091d36;
        }

        .admin__menu button:hover {
            background-color: #091d36;
            color: white;
            font-weight: 500;
        }

        .header {
            background-color: #091d36 !important;
        }
    </style>
    <!-- only for login page -->
    <?php if($cur_page=='authlogin.php'){?>
    <link rel="stylesheet" href="assets/css/login.css">
    <?php }?>
</head>

<body>
<?php if($cur_page!='authlogin.php'){include('inc/navbar.inc.php');}?>