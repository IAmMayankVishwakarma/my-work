
<?php

$con = mysqli_connect('localhost:3306','fashioo','6Q;^m_2f]we1','fashioo_fashioo');
// if($con){
//     echo "connection successful";
// }else{
//     echo "not connected";
// }

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    $query = "INSERT INTO userData(name,email,number,message) VALUES ('$name',  '$email' ,'$number', '$message')";
   
    mysqli_query($con,$query);
    
} 

?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>fashioo</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <!-- Template CSS -->
     
     <!--favicon-->
      <link rel="icon" type="image/x-icon" href="/assets/images/logo-fashioo.png">
     
<!--swipper link-->
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
     <!-- bootstrap CDN -->
 <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">-->
  <!-- FONTAWSOME CDN -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>-->
  
    <!--owl link-->
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
 <link rel="stylesheet" href="assets/css/owl.theme.green.min.css">

<script src="/assets/js/jquery.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script> -->

</head>

<body>
    <!--w3l-banner-slider-main-->
    <section class="w3l-banner-slider-main">
        <div class="container-fluid">
            <!--<marquee class="font-italic font-weight-bold" behavior="scroll" direction="left">www.fashioo.in <span class="ml-4">+(91) 7666436692</span></marquee>-->
        </div>
        <div class="top-header-content">
            <header class="tophny-header">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid serarc-fluid">
                        <!-- <a class="navbar-brand" href="index.html">
						Spry<span class="lohny">S</span>tore</a> -->
                        <!-- if logo is image enable this    -->
                        <a class="navbar-brand" href="index.php">
                            <img src="/assets/images/logo-fashioo__1_-removebg-preview.png" alt="Your logo" style="height:90px;" />
                        </a>
                        <!--/search-right-->
                        <div class="search-right">

                            <!-- 
							
						 -->
                            <!-- search popup -->
                            <div id="search" class="pop-overlay">
                                <div class="popup">

                                    <form action="#" method="post" class="search-box">
                                        <input type="search" placeholder="Keyword" name="search" required="required"
                                            autofocus="">
                                        <button type="submit" class="btn">Search</button>
                                    </form>

                                </div>
                                <a class="close" href="#">×</a>
                            </div>
                            <!-- /search popup -->
                        </div>
                        <!--//search-right-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fa fa-bars"> </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#consultancy">Consultant</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">About</a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <!--//nav-->
            </header>
            <div class="bannerhny-content">

                <!--/banner-slider-->
                <div class="content-baner-inf">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Enhance Your Personality
                                           
                                        </h3>
                                        <a href="index.php" class="shop-button btn">
                                            Ask Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                             <div class="carousel-item item4">
                                <div class="container">
                                    <div class="carousel-caption">
                                          <h3>Boost Your Confidence </h3>
                                        <a href="#" class="shop-button btn">
                                            Ask Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item item2">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <h3>Walk In Style</h3>
                                        <a href="#" class="shop-button btn">
                                            Ask Now
                                        </a>

                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!--//banner-slider-->
                <!--//banner-slider-->
                <div class="right-banner" style="background-image: linear-gradient(356deg, #ffb121, #0f0f33);">
                    <div class="right-1">
                        <h4>
                          Talk To A Fashion Stylist Expert
                        </h4>
                    </div>
                </div>

            </div>



    </section>
    <!-- //w3l-banner-slider-main -->
    <section id="about"  class="w3l-grids-hny-2">
        <!-- /content-6-section -->
        <div class="grids-hny-2-mian py-5">
            <div class="container py-lg-5">

                <h3 class="hny-title mb-0 text-center">Talk to a<span> Fashion</span> Stylist</h3>
                <!--<p class="mb-4 mt-3 text-center font-italic font-weight-bold">Waiting to guide you with the help of well trained experts waiting to help you with the best of their abilities.</p>-->
              
                <!--<div class="welcome-grids row mt-5">-->
                <!--    <div class="col-lg-2 col-md-4 col-6 welcome-image">-->
                <!--        <div class="boxhny13">-->
                <!--            <a href="#URL">-->
                <!--                <img src="assets/images/grid1.jpg" class="img-fluid" alt="" />-->
                <!--                <div class="boxhny-content">-->
                <!--                    <h3 class="title">Product-->
                <!--                </div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <h4><a href="#URL">Hand Bags</a></h4>-->

                <!--    </div>-->

                <!--    <div class="col-lg-2 col-md-4 col-6 welcome-image">-->
                <!--        <div class="boxhny13">-->
                <!--            <a href="#URL">-->
                <!--                <img src="assets/images/grid3.jpg" class="img-fluid" alt="" />-->
                <!--                <div class="boxhny-content">-->
                <!--                    <h3 class="title">Product</h3>-->
                <!--                </div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <h4><a href="#URL">-->
                <!--                Watches</a></h4>-->


                <!--    </div>-->
                <!--    <div class="col-lg-2 col-md-4 col-6 welcome-image">-->
                <!--        <div class="boxhny13">-->
                <!--            <a href="#URL">-->
                <!--                <img src="assets/images/grid2.jpg" class="img-fluid" alt="" />-->
                <!--                <div class="boxhny-content">-->
                <!--                    <h3 class="title">Product</h3>-->
                <!--                </div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <h4><a href="#URL">Shoes</a></h4>-->


                <!--    </div>-->
                <!--    <div class="col-lg-2 col-md-4 col-6 welcome-image">-->
                <!--        <div class="boxhny13">-->
                <!--            <a href="#URL">-->
                <!--                <img src="assets/images/grid4.jpg" class="img-fluid" alt="" />-->
                <!--                <div class="boxhny-content">-->
                <!--                    <h3 class="title">Product</h3>-->
                <!--                </div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <h4><a href="#URL">Suits</a></h4>-->

                <!--    </div>-->
                <!--    <div class="col-lg-2 col-md-4 col-6 welcome-image">-->
                <!--        <div class="boxhny13">-->
                <!--            <a href="#URL">-->
                <!--                <img src="assets/images/grid5.jpg" class="img-fluid" alt="" />-->
                <!--                <div class="boxhny-content">-->
                <!--                    <h3 class="title">Product</h3>-->
                <!--                </div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <h4><a href="#URL">-->
                <!--                Accessories</a></h4>-->


                <!--    </div>-->
                <!--    <div class="col-lg-2 col-md-4 col-6 welcome-image">-->
                <!--        <div class="boxhny13">-->
                <!--            <a href="#URL">-->
                <!--                <img src="assets/images/grid6.jpg" class="img-fluid" alt="" />-->
                <!--                <div class="boxhny-content">-->
                <!--                    <h3 class="title">Product</h3>-->
                <!--                </div>-->
                <!--            </a>-->
                <!--        </div>-->
                <!--        <h4><a href="#URL">-->
                <!--                Fragrances</a></h4>-->


                <!--    </div>-->
                <!--</div>-->

            </div>
        </div>
    </section>
    <!-- //content-6-section -->
    
    <!--testimonial start-->
     <div class="container " id="consultancy">
                   <h3 class="hny-title mb-5 text-center ">You Are Just<span> Three steps</span> Away</h3>
                   </div>
        <section id="testimonial"  class="testimonial w3l-grids-hny-2">
        <!-- /content-6-section -->
        <div class="grids-hny-2-mian ">
         
        <div class="slides-wrap" style="height: 488px;">
      <!--  slide 1  -->
        <div class="slide">
         <div class="testimonial-wrap">  
          <div class="col avtar-wrap">
            <div class="rounded-avtar"><a href="#contact">
              <img src="assets/images/book.png" alt=""></a>
            </div>
          </div>
          
          <div class="col content-wrap">
           
            <div class="credits">
            <strong>Step 1 -</strong> 
           
          
          </div>
            <div class="title">Book Now</div>
            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, commodi. Sit veritatis, distinctio velit corrupti nesciunt sint maxime? Consequuntur voluptatum aspernatur ipsam commodi optio velit voluptates maiores asperiores deleniti.</p>
            
            
           <div class="time-line"> 
             <ul>
               <li class="active"></li>
               <li class=""></li>
               <li class=""></li>
              
             </ul>
           </div>
          </div>
          
        </div>
        </div>
      <!-- slide 2 -->
        <div class="slide">
         <div class="testimonial-wrap">  
          <div class="col avtar-wrap">
            <div class="rounded-avtar">
                <img src="assets/images/contact.jpg" alt="">
            </div>
          </div>
          
          <div class="col content-wrap">
          
            <div class="credits">
            <strong>Step 2 - </strong> 
            
           
          </div>
            <div class="title"> Contact Form</div>
            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, commodi. Sit veritatis, distinctio velit corrupti nesciunt sint maxime? Consequuntur voluptatum aspernatur ipsam commodi optio velit voluptates maiores asperiores deleniti.</p>
            
            
           <div class="time-line"> 
             <ul>
               <li class=""></li>
               <li class="active"></li>
               <li class=""></li>
              
             </ul>
           </div>
          </div>
          
        </div>
        </div>
      <!-- slide 3 -->
        <div class="slide">
         <div class="testimonial-wrap">  
          <div class="col avtar-wrap">
            <div class="rounded-avtar">
                <img src="assets/images/video.jpg" alt="">
            </div>
          </div>
          
          <div class="col content-wrap">
           
            <div class="credits">
            <strong>Step 3 - </strong> 
           
           
          </div>
            <div class="title">Get Consulated</div>
            <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, commodi. Sit veritatis, distinctio velit corrupti nesciunt sint maxime? Consequuntur voluptatum aspernatur ipsam commodi optio velit voluptates maiores asperiores deleniti.</p>
            
            
           <div class="time-line"> 
             <ul>
               <li class=""></li>
               <li class=""></li>
               <li class="active"></li>
              
             </ul>
           </div>
          </div>
          
        </div>
        </div>
     
            
        </div>
        </div>
      </section>
    
    <!--testimonial end-->
  
  
   	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
                <div class="card mb-3 h-100" >
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="assets/images/generalimage.jpg"  alt="..." class="w3limage" style="height: 290px;">
    </div>
    <div class="col-md-8">
      <div class="card-body text-center bg-warning" >
        <h5 class="card-title text-white">GENARAL CONSULTANCY</h5>
        <ul style="list-style-type:none">
            <li><span>>> </span>Hair Style Color</li>
            <li><span>>> </span>Make-Up</li>
            <li><span>>> </span>Outfits</li>
            
                <a href="https://wa.me/+919881437689"> Rs. 299</a>
                
        </ul>
      </div>
    </div>
  </div>
   </div>
  <div class="card mb-3 mt-5 h-100" >
   <div class="row no-gutters">
    <div class="col-md-8 order-md-2 order-1">
     <div class="card-body text-center occasional">
        <h5 class="card-title text-white">OCCASIONAL CONSULTANCY</h5>
        <ul style="list-style-type:none" >
            <li><span>>> </span>Dates</li>
            <li><span>>> </span>Parties</li>
            <li><span>>> </span>Night Out</li>
            
                <a href="https://wa.me/+919881437689"> Rs. 499</a>
                 
        </ul>
      </div>
    </div>
     <div class="col-md-4 order-md-2 order-1">
      <img src="assets/images/partyimage.jpg" alt="..." class=" w3limage"  style="height: 290px;">
    </div>
    </div>
  </div>
</div>
                </div>
                </div>


      </section>
    
    <!-- //specification-6-->

    <!--<section class="w3l-video-6">-->
     
    <!--    <div class="video-66-info">-->
    <!--        <div class="container-fluid">-->
    <!--            <div class="video-grids-info row">-->
    <!--                <div class="video-gd-right col-lg-8">-->
    <!--                    <div class="video-inner text-center">-->
                            <!--popup-->
    <!--                        <a class="play-button btn popup-with-zoom-anim" href="#small-dialog">-->
    <!--                            <span class="fa fa-play" aria-hidden="true"></span>-->
    <!--                        </a>-->
    <!--                        <div id="small-dialog" class="mfp-hide">-->
    <!--                            <div class="search-top notify-popup">-->
    <!--                                <iframe src="https://player.vimeo.com/video/246139491" frameborder="0"-->
    <!--                                    allow="autoplay; fullscreen" allowfullscreen></iframe>-->
    <!--                            </div>-->
    <!--                        </div>-->
                            <!--//popup-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="video-gd-left col-lg-4 p-lg-5 p-4">-->
    <!--                    <div class="p-xl-4 p-0 video-wrap">-->
    <!--                          <div id="accordion1">-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <a class="card-link" data-toggle="collapse" href="#collapseSix">-->
    <!--                                   Makeup makes things well-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div id="collapseSix" class="collapse show" data-parent="#accordion1">-->
    <!--                                <div class="card-body">-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor-->
    <!--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
    <!--                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">-->
    <!--                                   Prettier when colors applied-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div id="collapseSeven" class="collapse" data-parent="#accordion1">-->
    <!--                                <div class="card-body">-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor-->
    <!--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
    <!--                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseEight">-->
    <!--                                  Rock with BASE ON (makeup base)-->

    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div id="collapseEight" class="collapse" data-parent="#accordion1">-->
    <!--                                <div class="card-body">-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor-->
    <!--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
    <!--                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseNine">-->
    <!--                                  Make things sparkly-->

    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div id="collapseNine" class="collapse" data-parent="#accordion1">-->
    <!--                                <div class="card-body">-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor-->
    <!--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
    <!--                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-header">-->
    <!--                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTen">-->
    <!--                                   Show the shades of YOU-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div id="collapseTen" class="collapse" data-parent="#accordion1">-->
    <!--                                <div class="card-body">-->
    <!--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor-->
    <!--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
    <!--                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
                          
    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- //video-6-->
  
  
    
	
	
	
	<!--/team-sec-->
	
	<!--/team-sec-->
	<section class="w3l-team-main">
<!--		<div class="team py-5">-->
<!--			<div class="container py-lg-5">-->
<!--					<h3 class="hny-title text-center">-->
<!--						Meet Our <span>Stylist</span></h3>-->
				<!--card slider html-->
<!--				<div class="uk-margin"></div>-->
<!--<div class="uk-section"><div class="owl-carousel owl-theme">-->
<!--    <div class="item">-->
<!--         <div class="swiper-slide card">-->
<!--          <div class="card-content">-->
<!--            <div class="image">-->
<!--              <img src="assets/images/team2.jpg" alt="">-->
<!--            </div>-->

<!--            <div class="media-icons">-->
<!--              <i class="fa fa-facebook"></i>-->
<!--              <i class="fa fa-twitter"></i>-->
<!--              <i class="fa fa-github"></i>-->
<!--            </div>-->

<!--            <div class="name-profession">-->
<!--              <span class="name">Nishita Verma</span>-->
<!--              <span class="profession">Founder & CEO</span>-->
<!--            </div>-->

            <!--<div class="rating">-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="far fa-star"></i>-->
            <!--  <i class="far fa-star"></i>-->
            <!--</div>-->

  <!--          <div class="button">-->
  <!--             <a href="#form"> <button class="aboutMe">Contact us</button></a>-->
              
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
      
  <!--</div>-->
     <!--<div class="item">-->
     <!--    <div class="swiper-slide card">-->
     <!--     <div class="card-content">-->
     <!--       <div class="image">-->
     <!--         <img src="assets/images/team2.jpg" alt="">-->
     <!--       </div>-->

     <!--       <div class="media-icons">-->
     <!--         <i class="fa fa-facebook"></i>-->
     <!--         <i class="fa fa-twitter"></i>-->
     <!--         <i class="fa fa-github"></i>-->
     <!--       </div>-->

     <!--       <div class="name-profession">-->
     <!--         <span class="name">Sargun Setti</span>-->
     <!--         <span class="profession">Designer</span>-->
     <!--       </div>-->

            <!--<div class="rating">-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="far fa-star"></i>-->
            <!--  <i class="far fa-star"></i>-->
            <!--</div>-->

  <!--          <div class="button">-->
  <!--             <a href="#form"> <button class="aboutMe">Contact us</button></a>-->
              
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->
      
  <!--</div>-->
     <!--<div class="item">-->
     <!--   <div class="swiper-slide card">-->
     <!--     <div class="card-content">-->
     <!--       <div class="image">-->
     <!--         <img src="assets/images/team3.jpg" alt="">-->
     <!--       </div>-->

     <!--       <div class="media-icons">-->
     <!--         <i class="fa fa-facebook"></i>-->
     <!--         <i class="fa fa-twitter"></i>-->
     <!--         <i class="fa fa-github"></i>-->
     <!--       </div>-->

     <!--       <div class="name-profession">-->
     <!--         <span class="name">Sanket vane</span>-->
     <!--         <span class="profession">Marketing</span>-->
     <!--       </div>-->

            <!--<div class="rating">-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="fas fa-star"></i>-->
            <!--  <i class="far fa-star"></i>-->
            <!--  <i class="far fa-star"></i>-->
            <!--</div>-->

     <!--       <div class="button">-->
     <!--        <a href="#form"> <button class="aboutMe">Contact us</button></a>-->
              
     <!--       </div>-->
     <!--     </div>-->
     <!--   </div>-->
      
<!--  </div>-->
     
    
     
    
<!--</div>-->
<!--  </div>-->
<!--			</div>-->
<!--	</section>-->
	<!--//team-sec-->
    


	<!--//team-sec-->
	

 
	
	<!--owl corousal start-->
<!--	<section>-->
<!--		<div class="owl-carousel owl-theme">-->
<!--    <div class="item">-->
<!--        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">-->
<!--							<a href="#"><img src="assets/images/team2.jpg" class="team_member img-fluid" alt="Team Member"></a>-->
<!--							<div class="team_info mt-3 position-absolute">-->
<!--								<h3><a href="#" class="team_name">Nishita Verma</a></h3>-->
<!--								<span class="team_role">Founder & CEO</span>-->
							<!--	<ul class="team-social mt-3">-->
							<!--		<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>-->
							<!--	</ul>-->
<!--							</div>-->
<!--						</div>-->
<!--    </div>-->
<!--    <div class="item">-->
<!--        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">-->
<!--							<a href="#"><img src="assets/images/team2.jpg" class="team_member img-fluid" alt="Team Member"></a>-->
<!--							<div class="team_info mt-3 position-absolute">-->
<!--								<h3><a href="#" class="team_name">Nishita Verma</a></h3>-->
<!--								<span class="team_role">Founder & CEO</span>-->
							<!--	<ul class="team-social mt-3">-->
							<!--		<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>-->
							<!--	</ul>-->
<!--							</div>-->
<!--						</div>-->
<!--    </div>-->
<!--    <div class="item">-->
<!--        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-4 team-wrapper position-relative">-->
<!--							<a href="#"><img src="assets/images/team2.jpg" class="team_member img-fluid" alt="Team Member"></a>-->
<!--							<div class="team_info mt-3 position-absolute">-->
<!--								<h3><a href="#" class="team_name">Nishita Verma</a></h3>-->
<!--								<span class="team_role">Founder & CEO</span>-->
							<!--	<ul class="team-social mt-3">-->
							<!--		<li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>-->
							<!--		<li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>-->
							<!--	</ul>-->
<!--							</div>-->
<!--						</div>-->
<!--    </div>-->
    <!--<div class="item"><h4>4</h4></div>-->
    <!--<div class="item"><h4>5</h4></div>-->
    <!--<div class="item"><h4>6</h4></div>-->
    <!--<div class="item"><h4>7</h4></div>-->
    <!--<div class="item"><h4>8</h4></div>-->
    <!--<div class="item"><h4>9</h4></div>-->
    <!--<div class="item"><h4>10</h4></div>-->
    <!--<div class="item"><h4>11</h4></div>-->
    <!--<div class="item"><h4>12</h4></div>-->
<!--</div>-->
<!--</section>-->
	
	<!--owl corousal ens-->
    

    <!-- //post-grids-->
    <!--<section class="w3l-customers-sec-6">-->
    <!--    <div class="customers-sec-6-cintent py-5">-->
            <!-- /customers-->
    <!--        <div class="container py-lg-5">-->
    <!--            <h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>-->
    <!--            <p class="mb-5 text-center">What People Say</p>-->
    <!--            <div class="row customerhny my-lg-5 my-4">-->
    <!--                <div class="col-md-12">-->
    <!--                    <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">-->

    <!--                        <ol class="carousel-indicators">-->
    <!--                            <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>-->
    <!--                            <li data-target="#customerhnyCarousel" data-slide-to="1"></li>-->
    <!--                            <li data-target="#customerhnyCarousel" data-slide-to="2" class="active"></li>-->
    <!--                            <li data-target="#customerhnyCarousel" data-slide-to="3"></li>-->
    <!--                        </ol>-->
                            <!-- Carousel items -->
    <!--                        <div class="carousel-inner">-->

    <!--                            <div class="carousel-item active">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-12">-->
    <!--                                        <div class="customer-info text-center">-->
    <!--                                            <div class="feedback-hny">-->
    <!--                                                <span class="fa fa-quote-left"></span>-->
    <!--                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur-->
    <!--                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias-->
    <!--                                                    quas nihil quasis.</p>-->
    <!--                                            </div>-->
    <!--                                            <div class="feedback-review mt-4">-->
    <!--                                                <img src="assets/images/c1.jpg" class="img-fluid" alt="">-->
    <!--                                                <h5>Smith Roy</h5>-->

    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
                                       
    <!--                                </div>-->
                                    <!--.row-->
    <!--                            </div>-->
                                <!--.item-->

    <!--                            <div class="carousel-item">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-12">-->
    <!--                                        <div class="customer-info text-center">-->
    <!--                                            <div class="feedback-hny">-->
    <!--                                                <span class="fa fa-quote-left"></span>-->
    <!--                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur-->
    <!--                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias-->
    <!--                                                    quas nihil quasis.</p>-->
    <!--                                            </div>-->
    <!--                                            <div class="feedback-review mt-4">-->
    <!--                                                <img src="assets/images/c4.jpg" class="img-fluid" alt="">-->
    <!--                                                <h5>John Lee</h5>-->

    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
                                       
    <!--                                </div>-->
                                    <!--.row-->
    <!--                            </div>-->
                                <!--.item-->
    <!--                            <div class="carousel-item">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-12">-->
    <!--                                        <div class="customer-info text-center">-->
    <!--                                            <div class="feedback-hny">-->
    <!--                                                <span class="fa fa-quote-left"></span>-->
    <!--                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur-->
    <!--                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias-->
    <!--                                                    quas nihil quasis.</p>-->
    <!--                                            </div>-->
    <!--                                            <div class="feedback-review mt-4">-->
    <!--                                                <img src="assets/images/c4.jpg" class="img-fluid" alt="">-->
    <!--                                                <h5>John Lee</h5>-->

    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
                                       
    <!--                                </div>-->
                                    <!--.row-->
    <!--                            </div>-->
                                <!--.item-->
    <!--                            <div class="carousel-item">-->
    <!--                                <div class="row">-->
    <!--                                    <div class="col-lg-12">-->
    <!--                                        <div class="customer-info text-center">-->
    <!--                                            <div class="feedback-hny">-->
    <!--                                                <span class="fa fa-quote-left"></span>-->
    <!--                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur-->
    <!--                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias-->
    <!--                                                    quas nihil quasis.</p>-->
    <!--                                            </div>-->
    <!--                                            <div class="feedback-review mt-4">-->
    <!--                                                <img src="assets/images/c4.jpg" class="img-fluid" alt="">-->
    <!--                                                <h5>John Lee</h5>-->

    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
                                       
    <!--                                </div>-->
                                    <!--.row-->
    <!--                            </div>-->
                                <!--.item-->

    <!--                        </div>-->
                            <!--.carousel-inner-->
    <!--                    </div>-->
                        <!--.Carousel-->

    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- //customers-->
    
    <!--<section class="w3l-subscription-6">-->
        
    <!--    <div class="subscription-infhny">-->
    <!--        <div class="container-fluid">-->

    <!--            <div class="subscription-grids row">-->

    <!--                <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">-->
    <!--                    <div class="p-lg-5 py-md-0 py-3">-->
    <!--                        <h3 class="hny-title"><span>Expert stylist</span></h3>-->
    <!--                        <p>Waiting to guide you with the help of well trained experts waiting to help-->
    <!--                            you with the best of their abilities.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="subscription-left forms-25-info col-lg-6 ">-->

    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--</section>-->
    <!-- //customers-6-->

<!-- contacts -->
 <section id="contact" class="w3l-contacts-8">
    <!--<div class="contacts-9 section-gap py-5">-->
    <!--  <div class="container py-lg-5">-->
    <!--    <div class="row top-map">-->
    <!--      <div class="col-lg-6 partners">-->
    <!--        <div class="cont-details">-->
    <!--          <h3 class="hny-title mb-0">Get in <span>touch</span></h5>-->
    <!--          <p class="mb-5">We're ready to lead you into the future with Business Services</p>-->
    <!--          <p class="margin-top"><span class="texthny">Call Us : </span> <a href="tel:+(91) 7666436692">+(91)-->
    <!--              7666436692</a></p>-->
    <!--          <p> <span class="texthny">Email : </span> <a href="mailto:info@example.com">-->
    <!--              Contact@fashioo.in</a></p>-->
    <!--          <p class="margin-top"> 433 California St, Suite 300-->
    <!--            San Francisco, CA 94104, USA </p>-->
    <!--        </div>-->
    <!--        <div class="hours">-->
    <!--          <h3 class="hny-title">Working <span>Hours</span></h5>-->
    <!--          <h6>Business Service:</h6>-->
    <!--          <p> Monday to Friday 8.00 am - 6.00 pm</p>-->
    <!--          <p> Saturday and Sunday - Closed</p>-->
    <!--          <h6 class="margin-top">Customer support:</h6>-->
    <!--          <p> Monday to Friday 8.00 am - 6.00 pm</p>-->
    <!--          <p> Saturday 10.00 am - 4.00 pm</p>-->
    <!--          <p> Sunday - Closed</p>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--      <div class="col-lg-6 map">-->
    <!--        <iframe-->
    <!--          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"-->
    <!--          frameborder="0" style="border:0" allowfullscreen=""></iframe>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <div id ="form" class="map-content-9 form-bg-img">
      <div class="layer section-gap py-5">
        <div class="container py-lg-5">
          <div class="form">
            <h3 class="hny-title two text-center">Fill out the form.</h3>
            <form action="" class="mt-md-5 mt-4" method="post">
              <div class="input-grids">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="sender" placeholder="Email" required="" />
                <input type="number" name="number" id="number" placeholder="number" required="">
              </div>
              <div class="input-textarea">
                <textarea name="message" id="message" placeholder="Message" required=""></textarea>
              </div>
              <button type="submit" class="btn" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //contacts -->



    <section class="w3l-footer-22">
        <!-- footer-22 -->
        <div class="footer-hny py-5">
            <div class="container py-lg-5">
                <div class="text-txt row">
                    <div class="left-side col-lg-4">
                        <h3><a class="logo-footer" href="index.php">
                                Fashi<span class="lohny">o</span>o</a></h3>
                        <!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
                        <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                            consectetur.Vivamus
                            a ligula quam. Ut blandit eu leo non suscipit. </p>
                        <ul class="social-footerhny mt-lg-5 mt-4">

                            <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            </li>
                            <li><a class="google" href="#"><span class="fa fa-google-plus"
                                        aria-hidden="true"></span></a>
                            </li>
                            <li><a class="instagram" href="https://www.instagram.com/fashioo.in/?r=nametag"><span class="fa fa-instagram"
                                        aria-hidden="true"></span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="right-side col-lg-8 pl-lg-5">
                        <h5 class="text-white";>Waiting to guide you with the help of well trained experts waiting to help you with the best of their abilities.</h5>
                        <div class="sub-columns">
                            <div class="sub-one-left">
                                <h6>Useful Links</h6>
                                <div class="footer-hny-ul">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="index.php">Careers</a></li>
                                        <li><a href="index.php">Privacy Policy</a></li>
                                        <li><a href="index.php">Terms and Conditions</a></li>
                                        <li><a href="index.php">Support</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="sub-two-right">
                                <h6>Our Store</h6>
                                <p class="mb-5">49436 Broaddus Honey Court Avenue, Madisonville KY 95020, United States
                                    of America</p>

                                <h6>We accept:</h6>
                                <ul>
                                    <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                                aria-hidden="true"></span></a>
                                    </li>
                                    <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                                aria-hidden="true"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="below-section row">
                    <div class="columns col-lg-6">
                        <ul class="jst-link">
                            <li><a href="#">Privacy Policy </a> </li>
                            <li><a href="#">Term of Service</a></li>
                            <li><a href="contact.html">Customer Care</a> </li>
                        </ul>
                    </div>
                    <div class="columns col-lg-6 text-lg-right">
                        <p>© 2022 fashioo. All rights reserved. Design by <a href="https://iceico.in/" target="_blank">
                                ICEICO Technologies Pvt Ltd</a>
                        </p>
                    </div>
                    <button onclick="topFunction()" id="movetop" title="Go to top">
                        <span class="fa fa-angle-double-up"></span>
                    </button>
                </div>
            </div>
        </div>
        <!-- //titels-5 -->
        <!-- move top -->


              <a href="https://wa.me/+919881437689" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
        </a>



        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->
    </section>
    
     <!--card slider js-->
     <script>
     $('.owl-carousel').owlCarousel({
    loop:true,
 
    margin:30,
    nav:true,
   autoplay:true,
    autoplayTimeout:2000,
  navText : ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>','<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'],
    responsive:{
        0:{
            items:1
        },
        640:{
            items:2
        },
      960:{
            items:3
        },
        1200:{
            items:3
            
        }
    }
})
 </script>    


</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!--//login-->
<script>
    // optional
    $('#customerhnyCarousel').carousel({
        interval: 5000
    });
</script>
<!-- cart-js -->
<script src="assets/js/minicart.js"></script>
<script>
    transmitv.render();

    transmitv.cart.on('transmitv_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) { }
        }
    });
</script>
<!-- //cart-js -->
<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>

   <script>
        /*
  ** original design by Alba Testimonial
  https://www.behance.net/gallery/107872609/DailyUI039-Testimonials?tracking_source=search_projects_recommended%7Ctestimonials
*/
const slides = document.querySelectorAll('.testimonial .slide');

const slidesWrap = document.querySelector('.testimonial .slides-wrap');

var temp = Array.from(slides);

var slideHeights = temp.map((slide)=>{
  return slide.offsetHeight;
});



var slideMaxHeight = Math.max.apply(null, slideHeights);
slidesWrap.style.height = slideMaxHeight+20 + 'px';

var currentSlide = 0;


slides.forEach((slide, index)=>{
  slide.style.transform = `translateX(${100 * index}%)`;
               });

setInterval(()=>{
  next();
}, 4000);

function next(){
  currentSlide++;
  
  currentSlide = currentSlide == slides.length ? 0:currentSlide;
  slides.forEach((slide, index)=>{
    slide.style.transform = `translateX(${100 * (index - currentSlide)}%)`;
  });
  
}


      </script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>