<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NSS NITR Admin</title>
    <!--    Favicon-->
    <link rel="icon" href="../img/logo.jpeg" type="image/png" sizes="16x16" />
    <meta name="keywords" content="footer, address, phone, icons" />

    <!-- Including Bootstrap And Fontawsome Files -->

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
    />
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
        border:1px solid #e2e2e2;
        padding:10px;
        font-weight:600;
        color:#091d36;
        width:100%;
      }
      .admin__menu ul li a{
        padding:10px
        font-weight:600;
        color:#091d36;
        
      }
      .admin__menu button{
        width:100%;
        border:1px solid #e2e2e2;
        padding:10px;
        font-weight:600;
        color:#091d36;
      }
      .admin__menu button:hover{
        background-color:#091d36;
        color:white;
        font-weight:500;
      }
    </style>
  </head>
  <body>
    <!-- Navigation Bar -->
    

    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
      <button
        class="navbar-toggler ml-auto"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse"
        id="navbarResponsive"
        style="height: 100%"
      >
        <a class="navbar-logo" href="#"><img src="../img/navbar-logo.png" /></a>

        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <div class="dropdown-show">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-toggle="dropdown"
                >Team</a
              >
              <div class="dropdown-menu">
                <a class="dropdown-item" href="teams.html">Team of 2019-20</a>
                <a class="dropdown-item" href="teams.html">Team of 2018-19</a>
                <a class="dropdown-item" href="teams.html">Team of 2017-18</a>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <div class="dropdown-show">
              <a class="nav-link" href="workplace.html">Workplaces</a>
            </div>
          </li>

          <li class="nav-item">
            <div class="dropdown-show">
              <a
                class="nav-link dropdown-toggle"
                href="gallery/gallery.html"
                data-toggle="dropdown"
                >Gallery</a
              >
              <div class="dropdown-menu">
                <a class="dropdown-item" href="gallery/gallery20.html"
                  >Memories of 2020</a
                >
                <a class="dropdown-item" href="gallery/gallery19.html"
                  >Memories of 2019</a
                >
                <a class="dropdown-item" href="gallery/gallery18.html"
                  >Memories of 2018</a
                >
                <a class="dropdown-item" href="gallery/gallery17.html"
                  >Memories of 2017</a
                >
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Nav bar ends-->

    <!-- Content  -->
    <!--    About Section-->
    <!--About section start -->

    <div style="height: 10em"></div>
    <div style="height: 10em"></div>
  
    <!--    About Section-->
    <section class="about section my-6" id="about">
      <div class="about__container bd-grid">
        <div>
          <h2 class="about__subtitle">
            Welcome to NSS Admin Panel.
          </h2>
          <p class="about__text">
            The National Service Scheme (NSS) is an Indian government-sponsored
            public service program conducted by the Ministry of Youth Affairs[1]
            and Sports of the Government of India. Popularly known as NSS, the
            scheme was launched in Gandhiji's Centenary year in 1969. Aimed at
            developing student's personality through community service, NSS is a
            voluntary association of young people in Colleges, Universities and
            at +2 level working for a campus-community (esp. Villages) linkage.
          </p>
        </div>
      </div>
    </section>

    <!--About Section ends-->
    <!--NOTICE BOARD    <SNEHA>-->
    <div class="content">
      <h1 class="header text-center">CONTROL PANEL</h1>
      <div class="admin__menu">
      <ul>
      <li><a href="index.php" class="px-0"><button class="text-left">Dashboard</button></a></li>
        <li>
        <button class="collapsed text-left" type="button" data-toggle="collapse" data-target="#student__a_href" aria-expanded="false" aria-controls="content__a_href">
          Student
        <div class="ripple-container"></div></button>
        <div class="collapse" id="student__a_href">
          <ul>
            <li><a href="">Add</a></li>
            <li><a href="">Manage</a></li>
          </ul>
         </div>   <!-- End student__a_href Collapse -->
        </li>
        <li>
        <button class="collapsed text-left" type="button" data-toggle="collapse" data-target="#staff__a_href" aria-expanded="false" aria-controls="content__a_href">
          Staff
        <div class="ripple-container"></div></button>
        <div class="collapse" id="staff__a_href">
          <ul>
            <li><a href="">Add</a></li>
            <li><a href="">Manage</a></li>
          </ul>
         </div>   <!-- End staff__a_href Collapse -->
        </li>
      </ul>
      </div>
    </div>
    <!--NOTICE BOARD OVER    SNEHA-->

    <!-- Footer -->

    <footer>
      <div class="bottom container-fluid col-12">
        <p>
          &copy;2020 National Service Scheme | National Institute of Technology,
          Rourkela | All Rights Reserved.
        </p>
        <p style="text-align: right">
          Designed by
          <a href="https://www.instagram.com/webwiz.nitr/">WebWiz</a>
        </p>
      </div>
    </footer>
  </body>
</html>
