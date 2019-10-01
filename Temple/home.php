<?php

    $search=$_GET['Id'];

    include 'connection.php';

    $sql1 = "SELECT * FROM `temple` where Id=$search";
    
    $run1 = mysqli_query($con,$sql1);
    
    $data1=mysqli_fetch_assoc($run1);
    
    if($data1==0)
    {
      ?>
      <script style="center">
        alert('Data Not Found !!!');
        window.open('uploadtemple.php','_self');
      </script>
      <?php
    } 
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title><?php echo $data1['Name']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Temple Info " />
    <!-- Custom Theme files -->
    <link href="css1/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- color switch -->
    <link href="css1/blast.min.css" rel="stylesheet" />
    <!-- portfolio -->
    <link href="css1/portfolio.css" type="text/css" rel="stylesheet" media="all">
    <link href="css1/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <div id="home">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-expand-lg navbar-light navbar-fixed-top">
                <h1><a class="navbar-brand" data-blast="color"><?php echo $data1['Name']; ?></a></h1>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-lg-auto text-center">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?Id=<?=$data1['Id'];?>" data-blast="color">Home
                            <span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item  mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#about">About US</a>        
                        </li>
                        
                        <li class="nav-item mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#services">How to Reach </a>  
                        </li>
						
                        <li class="nav-item mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#portfolio">Gallery </a>  
                        </li>
                        
                        <li class="nav-item  mt-lg-0 mt-3">
                            <a class="nav-link scroll" href="#contact">Contact Us</a>        
                        </li>

                    </ul>
                </div>
            </nav>
        </header>

        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li class="banner1" style="background-image:url(dataimg/<?php echo $data1['Phome1'];?>)">
                    <div class="container" id="slider">
                        <div class="banner-text">
                           <div class="slider-info">
                                <h3><?php echo $data1['Name']; ?></h3>
                                <span class="line"></span>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about"
                                role="button">Know More</a>  
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner2" style="background-image:url(dataimg/<?php echo $data1['Phome2'];?>)">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <h3><?php echo $data1['Name']; ?></h3>
                                <span class="line"></span>
                              <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about"
                                    role="button">Know More</a> 
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner3" style="background-image:url(dataimg/<?php echo $data1['Phome3'];?>)">
                    <div class="container">
                        <div class="banner-text">
                            <div class="slider-info">
                                <h3><?php echo $data1['Name']; ?></h3>
                                <span class="line"></span>
                                <a class="btn bg-theme mt-4 w3_pvt-link-bnr scroll" data-blast="bgColor" href="#about"
                                    role="button">Know More</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <section class="wthree-slide-btm pt-lg-5" id="about">
        <div class="container pt-sm-5 pt-4">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <div class="slide-banner" style="background-image:url(dataimg/<?php echo $data1['Bapho1'];?>)">
					</div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-abt light-bg">
                        <div class="container">
                            <div class="title-desc  pb-sm-3">
                                <h4 class="main-title-w3pvt">About Us</h4>
                            </div>

                            <div class="row flex-column mt-lg-4 mt-3">
                            <div class="abt-grid">
                            
                                   <div class="row">
                                   <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                               <p align="justify">
                                                   <?php echo $data1['Basic']; ?>
                                            </p>
                                            </div>
                                    </div>
									</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <section class="wthree-slide-btm pb-lg-5">
        <div class="container pb-md-5 pb-4">
            <div class="row flex-row-reverse no-gutters">
                <div class="col-lg-5">
                    <div class="ab-banner" style="background-image:url(dataimg/<?php echo $data1['Hipho1'];?>)"></div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-abt">
                        <div class="container">
                            <div class="title-desc  pb-sm-3">
                                <h4 class="main-title-w3pvt">Historical Information</h4>
                            </div>
                            <div class="row flex-column mt-lg-4 mt-3">
                                <div class="abt-grid">
                                    <div class="row">
                                        </div>
                                        <div class="col-sm-9 pl-sm-0">
                                            <div class="abt-txt ml-sm-0">
                                             <p align="justify">
                                                   <?php echo $data1['History']; ?>
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w3lspvt-about py-md-5 py-5" id="services">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">HOW TO REACH</h3>
                <p>helping you to reach name of temple.</p>
            </div>
             
             <div class="w3lspvt-about-row row  text-center pt-md-0 pt-5 mt-lg-5">
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-map-marker" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">By Air</h4>
                        <p align="justify">
                        <?php echo $data1['Reach_air']; ?> 
                        </p>
                    </div>
                </div>
             
                <div class="col-lg-4 col-sm-6 w3lspvt-about-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-map-marker" data-blast="borderColor"></span>
                      <h4 class="mt-2 mb-3" data-blast="color">By Buses:</h4>
                       <p align="justify">
                        <?php echo $data1['Reach_bus']; ?> 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 w3lspvt-about-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-map-marker" data-blast="borderColor"></span>
                        <h4 class="mt-2 mb-3" data-blast="color">By Trains</h4>
                        <p align="justify">
                        <?php echo $data1['Reach_Train']; ?> 
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <section class="wthree-row w3-gallery cliptop-portfolio-wthree pt-lg-5" id="portfolio">
        <div class="container-fluid">
            <div class="title-desc text-center pb-3">
                <h3 class="main-title-w3pvt">Gallery</h3>
                <p>Photos of <?php echo $data1['Name']; ?> </p>
            </div>

            <div class="demo row py-lg-5 py-sm-4 pb-4">
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['P6'];?>" alt=" Img Not Found" class="img-fluid img-thumbnail" />   
                    </div>
                </li>
            
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['P7'];?>" alt="Img Not Found " class="img-fluid img-thumbnail" />          
                    </div>
                </li>
            
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['P8'];?>" alt="Img Not Found " class="img-fluid img-thumbnail" />      
                    </div>
                </li>
            
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['P9'];?>" alt=" Img Not Found" class="img-fluid img-thumbnail" />                  
                    </div>
                </li>

                <li class="col-lg-4 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['P10'];?>" alt="Img Not Found " class="img-fluid img-thumbnail" />     
                    </div>
                </li>
                
                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['Phome2'];?>" alt=" Img Not Found " class="img-fluid img-thumbnail" />               
                    </div>
                </li>


                <li class="col-lg-3 col-sm-6">
                    <div class="gallery-grid1">
                        <img src="dataimg/<?php echo $data1['Phome1'];?>" alt="Img Not Found  " class="img-fluid img-thumbnail" />               
                    </div>
                </li>

			</div>
            
               </li>
            </ul>
        </div>
    </section>
            </div>
        </div>
    </section>


    <section class="contact-wthree py-sm-5 py-4" id="contact">
        <div class="container pt-lg-5">
            <div class="title-desc text-center pb-sm-3">
                <h3 class="main-title-w3pvt">contact us</h3>
                <p>We are ready to help you .</p></div>
            
            <div align="center">
                    <h5 class="cont-form" data-blast="color">get in touch</h5>
				<!--	</div> -->
                   <table>

				   <tr>
				   <td>
                        <div class="contact-w3" align="center">
                            <span class="fa fa-envelope-open  mb-3"  data-blast="color" ></span>
							<h5>Email Address:</h5>
                        <div class="d-flex flex-column" align="center">
                                <a href="<?php echo $data1['Email']; ?> " class="d-block"><?php echo $data1['Email']; ?> </a>
                        </div>
                        </div>
					</td>
					</tr>
				
                	<tr>
					<td>
				        <div class="contact-w3 my-4" align="center">
                            <span class="fa fa-phone mb-3" data-blast="color"></span>
							<h5>Contact Number:</h5>
                        <div class="d-flex flex-column">
                            <p><?php echo $data1['Contact']; ?> </p>
                        </div>
                        </div>
					</td>
					</tr>
					
                    <tr>
					<td>
					   <div class="contact-w3" align="center">
                            <span class="fa fa-home mb-3" data-blast="color"></span>
							<h5>Addres:</h5>
                            <address><?php echo $data1['Address']; ?> </address>
                        </div>
                        </div>
					</td>
					</tr>
					
                </table>
                </div>
				</div> 
            </br>
            
   <!--footer -->
            
    <footer class="cpy-right bg-theme" data-blast="bgColor">
        <div class="container" align="justify">
            <div class="row">
                <div class="col-lg-6 text-lg-right mt-lg-0 mt-4">
                    <p style="text-align: right;">©Copyright 2018 - Trmple name. All rights reserved.
                    <a href="dnos.in">DNOS.in</a>                   
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- //blog modal3-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- Banner  Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use"$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //Banner  Responsiveslides -->
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <script src="js/counter.js"></script>
    <!-- portfolio -->
    <script src="js/jquery.picEyes.js"></script>
    <script>
        $(function () {
            //picturesEyes($('.demo li'));
            $('.demo li').picEyes();
        });
    </script>
    <!-- //portfolio -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- color switch -->
    <script src="js/blast.min.js"></script>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

</body>
</html>