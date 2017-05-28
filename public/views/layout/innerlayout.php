<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html ng-app='NSB'>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
     <base href='/NSBE/public/'/>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>NSBE-Conference-Gallery</title>

    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- PRETTY PHOTO FOR GALLERY  -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />

        <link href="assets/layout/styles/custom.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONTS  -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    <style>
ul {
    list-style-image: url('assets/images/icons/choice-yes.gif');
}
 a:hover{
  color:#ff656c;
 }
    </style>
    <link rel="icon" href="assets/images/logogh.ico" type="image/x-icon">
</head>
<body ng-controller='InnerLayoutCtrl'>
 <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand inner-logo" href="/NSBE/main">

                <img src="assets/images/logo3.png" /> Conference
              </a>
            </div>
            <div class="right-div">
<strong>Support : </strong>  info@nsbegh.com
            </div>
          
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="/NSBE/main" >HOME</a></li>     
                            <li><a href="../innerlayout/#!/agenda">AGENDA</a></li>
                            <li><a href="../innerlayout/#!/accomodation">ACCOMODATION</a></li>
                            <li><a href="../innerlayout/#!/about">ABOUT US</a></li>
                            <li><a href="../innerlayout/#!/gallery" >GALLERY</a></li>
                            <li><a href="/NSBE/main/login" >Login</a></li>
                            <li><a href="../innerlayout/#!/register">REGISTER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
  
   

   <div ng-view=''>

	</div>



<!--JUST SECTION END-->
<div class="parallax-like">
  <div class="overlay">


   <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h1 class="head-line">Currently Registered</h1>
      <br />
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="just-txt-div">
        <strong> 300+</strong> 
        <p>
          Pre-collegiates
        </p>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="just-txt-div">
        <strong> 200+</strong> 
        <p>
          collegiates
        </p>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="just-txt-div">
        <strong> 100+</strong> 
        <p>
          Professionals
        </p>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
      <div class="just-txt-div">
        <strong> 300+</strong> 
        <p>
          Non-member
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

         
     <!--CLIENT SECTION END-->
    
  <div class="footer-sec">
 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


     <h3> <strong>NSBE Conference Ghana</strong> </h3>
     <div class="just-txt-div">
            <img src="assets/images/logogh.png" class="img-responsive" height="100" width="130" style="border-radius: 50px" />

          </div>
   </div>
   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 social-div">



    <h3> <strong>SOCIAL PRESENCE</strong> </h3>
    We love to be social,Catch Us On
    <a href="#" ><h4>FACEBOOK </h4></a>
    <a href="#" ><h4>TWITTER </h4></a>
    <a href="#" ><h4>LINKEDIN </h4></a>


  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
    <h3> <strong>LOCATION FOR CONFERENCE</strong> </h3>
    <div id="map" style="width:300px;height:300px">

    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <hr />
    <div style="text-align:right;padding:5px;">
      &copy;2017 nsbeconference-gh.com | <a href="https://natlink.net" style="color:#fff;" target="_blank">Designed by: natlink.net</a>
    </div>
  </div>
</div>
</div>
</div>

       </div>
     <!--FOOTER SECTION END-->
      <!-- WE PUT SCRIPTS AT THE END TO LOAD PAGE FASTER-->

  <!--CORE SCRIPTS PLUGIN-->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
     <!--BOOTSTRAP SCRIPTS PLUGIN-->
    <script src="assets/js/bootstrap.js"></script>
 
   <script src="assets/angular/angular.min.js"></script>
    <script src="assets/angular/angular-route.min.js"></script>
    <script src="assets/angular/angular-cookies.min.js"></script>
      <script src="assets/scripts/layout.js"></script>


<script>
  function myMap() {

 var uluru = {lat:6.094853 , lng:-0.255985 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmGxs2AmIP38Mykh0cpuERf8AcRdB125c&callback=myMap"></script>
</body>
</html>