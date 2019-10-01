<?php
    $search=$_GET['id'];

    include 'connection.php';

    $sql1 = "SELECT * FROM `cafe` where id=$search";
    
    $run1 = mysqli_query($con,$sql1);
    
    $data1=mysqli_fetch_assoc($run1);
    
    if($data1==0)
    {
      ?>
      <script style="center">
        alert('Data Not Found !!!');
        window.open('uploadcafe.php','_self');
      </script>
      <?php
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $data1['name'];?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><?php echo $data1['name'];?></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
        <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        <li><a href="#team" class="page-scroll">Chefs</a></li>
        <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><?php echo $data1['name'];?></h1>
            <p>Restaurant / Coffee / Pub</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/images/<?php echo $data1['pabout'];?>" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Our Restaurant</h2>
          <hr>
          <p><?php echo $data1['about'];?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Coffee & Drinksrs</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $data1['CAD1'];?></div>
            <div class="menu-item-price"><?php echo $data1['CADV1'];?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $data1['CAD2'];?></div>
            <div class="menu-item-price"><?php echo $data1['CADV2'];?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $data1['CAD3'];?></div>
            <div class="menu-item-price"><?php echo $data1['CADV3'];?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $data1['CAD4'];?></div>
            <div class="menu-item-price"><?php echo $data1['CADV4'];?></div>\
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Main Course</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"><?php echo $data1['M1'];?></div>
            <div class="menu-item-price"> <?php echo $data1['MV1'];?> </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $data1['M2'];?></div>
            <div class="menu-item-price"> <?php echo $data1['MV2'];?> </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $data1['M3'];?></div>
            <div class="menu-item-price"><?php echo $data1['MV3'];?></div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> <?php echo $data1['M4'];?></div>
            <div class="menu-item-price"> <?php echo $data1['MV4'];?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Gallery</h2>
      <hr>
    </div>
  </div>

  <div class="container-fluid">
            <div class="demo row py-lg-5 py-sm-4 pb-4">
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['G1'];?>" alt=" Img Not Found" class="img-fluid img-thumbnail" />   
                    </div>
                </li>
            
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['G2'];?>" alt="Img Not Found " class="img-fluid img-thumbnail" />       
                    </div>
                </li>
            
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['G3'];?>" alt="Img Not Found " class="img-fluid img-thumbnail" />      
                    </div>
                </li>
            
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['G4'];?>" alt=" Img Not Found" class="img-fluid img-thumbnail" />     
                    </div>
                </li>

                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['G5'];?>" alt="Img Not Found " class="img-fluid img-thumbnail" />     
                    </div>
                </li>
                
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['G6'];?>" alt=" Img Not Found " class="img-fluid img-thumbnail" />     
                    </div>
                </li>


                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="img/images/<?php echo $data1['pabout'];?>" alt="Img Not Found  " class="img-fluid img-thumbnail" /> 
                    </div>
                </li>
          </div>
        </div>
      </div>
    </div>

<!-- Team Section -->
<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Meet Our Chefs</h2>
        <hr>
      </div>
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/<?php echo $data1['chef1'];?>" alt="img not found"></div>
            <div class="caption">
              <p><?php echo $data1['chefi1'];?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/<?php echo $data1['chef2'];?>" alt="img not found"></div>
            <div class="caption">
              <p><?php echo $data1['chefi2'];?></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/<?php echo $data1['chef3'];?>" alt="img not found"></div>
            <div class="caption">
              <p><?php echo $data1['chefi3'];?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call Reservation Section -->
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Want to make a reservation? Call <strong><?php echo $data1['contact'];?></strong></h2>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p><?php echo $data1['Address1'];?></p>
        <p><?php echo $data1['Address2'];?></p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon- Sat : <?php echo $data1['time1'];?> AM - <?php echo $data1['time2'];?> PM</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="contact-item">
        <p>Phone : +<?php echo $data1['contact'];?></p>
        <p>Email : <?php echo $data1['email'];?></p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    <div class="col-md-8 col-md-offset-2">
           <p>&copy; 2019 name  of cafe. All rights reserved. Designed by <a href="dnos.in" rel="nofollow">Dnos.in</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
