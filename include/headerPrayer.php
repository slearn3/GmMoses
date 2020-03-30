<!DOCTYPE html>
<html>
  <head>
    <title> GM Moses </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css 4.1.3-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--style sheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--font awsome-->
    <script src="https://kit.fontawesome.com/fc3a84f5b6.js" crossorigin="anonymous"></script>

    <!--bootstrap jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
	<script src="././js/validation.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet"/>
    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Berkshire Swash' rel='stylesheet'>
  <style> 
  body{
    font-family: roboto;
  }
  h4,h3{
    font-family:Alef;
  }
  .logo-font{
    font-family:Berkshire Swash;
  }
  </style>
  <script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
  </head>
  <body>
    <!--header-->
    <div class="header" style="background-image: url(img/bg/bgp.jpg); background-repeat:no-repeat;background-position:center;background-color:black;background-size:100%;">
     
      <div class="container">
        <!--nav bar-->
        <nav class="navbar navbar-expand-md navbar-dark ">
          <a class="navbar-brand display-4" href="index.php"><h4 class="logo-font">Bethel Tower Ministries</h4></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-lg-end" id="collapsibleNavbar">
            <ul class="navbar-nav float-lg-right">
            <li class="nav-item nav-menu">
                <a class="nav-link text-white" href="index.php">Home</a>
              </li>
              <li class="nav-item  about-menu">
                <a class="nav-link text-white" href="#">About</a>
                <div class="sub-menu bg-white pr-4 pl-4 pt-2 pb-1">
                    <a class="dropdown-item wow fadeInUp animated slower dealy-2s" href="about-ministry.php">Our Ministry</a>
                    <a class="dropdown-item wow fadeInUp animated slower dealy-4s" href="about-church.php">Church</a>
                    <a class="dropdown-item wow fadeInUp animated slower dealy-8s" href="prayer-request.php">Prayer Request</a>
                </div>

              </li>
              <li class="nav-item nav-menu">
                <a class="nav-link text-white" href="events.php">Events</a>
              </li>
              <li class="nav-item nav-menu">
                <a class="nav-link text-white" href="sermons.php">Sermons</a>
              </li>
              <li class="nav-item nav-menu">
                  <a class="nav-link text-white" href="contactus.php">Contact Us</a>
                </li>
              <li class="nav-item nav-menu-donate">
                  <a class="nav-link border pr-4 pl-4 " href="donate.php">Donate</a>
                </li>   
            </ul>
          </div>  
        </nav>
        <!--/nav bar-->