<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Dazzle</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">

    <!-- script
   ================================================== -->
    <script src="<?php echo base_url('assets/js/modernizr.js')?>"></script>
    <script src="<?php echo base_url('assets/js/pace.min.js')?>"></script>

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/favicon.ico')?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('assets/favicon.ico')?>" type="image/x-icon">

</head>

<body id="top">

    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

   		<div class="header-logo">
	        <a href="home.php">Dazzle</a>
	    </div>

	   	<nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                <li><a href="<?php echo base_url('index.php/sewa/form')?>" title="sewa">Sewa</a></li>
                <?php 
                    if($this->session->userdata('ROLE')=='administrator'){
                ?>
                <li><a href="<?php echo base_url('index.php/mobil/index')?>" title="mobil">Mobil</a></li>
                <li><a href="<?php echo base_url('index.php/merk/index')?>" title="merk">Merk</a></li>
                <li><a href="<?php echo base_url('index.php/perawatan/index')?>" title="perawatan">Perawatan</a></li>
                <li><a href="<?php echo base_url('index.php/jenis_perawatan/index')?>" title="jenis-perawatan">Jenis Perawatan</a></li>
                <li><a href="<?php echo base_url('index.php/users/index')?>" title="users">Users</a></li>
                <?php } ?>
			</ul>

            <a href="<?php echo base_url('index.php/login/index')?>" title="sign-up" class="button button-primary cta">Sign Up</a>
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
   </header> <!-- /header -->


   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/hero-bg-car.jpg')?>" data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">        

            <div class="row contents">                     
                <div class="home-content-left">

                    <h3 data-aos="fade-up">Welcome to Dazzle</h3>

                    <h1 data-aos="fade-up">
                        Rental Mobil.
                    </h1>

                    <div class="buttons" data-aos="fade-up">
                        <a href="#download" class="smoothscroll button stroke">
                            <span class="icon-circle-down" aria-hidden="true"></span>
                            Download App
                        </a>
                        <a href="#" data-lity class="button stroke">
                            <span class="icon-play" aria-hidden="true"></span>
                            Watch Video
                        </a>
                    </div>                                         

                </div>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->  
   
    <!-- footer
    ================================================== -->
    <footer>

        <div class="footer-main">
            <div class="row">  

                <div class="col-three md-1-3 tab-full footer-info">            

                    <div class="footer-logo"></div>

                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. 
                    </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    
                    
                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>Contact</h4>

                    <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA <br>
                    94043 US<br>		        
                    </p>

                    <p>
                    someone@dazzlesite.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100    
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>	      		
                            
                </div> <!-- end footer-site-links --> 

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>Our Newsletter</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <div class="subscribe-form">
                
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required=""> 
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>

                    </div>	      		
                            
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Dazzle 2018.</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- end footer-bottom -->     	

      </div>

    </footer>

    <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/plugins.js')?>"></script>
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>

</html>