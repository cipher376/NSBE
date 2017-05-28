<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html ng-app='NSB'>
<head>
  <title>NSBE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"><base href='/NSBE/public/'/>  
  <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- ANIMATE STYLE  -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FLEXSLIDER STYLE  -->
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- PRETTY PHOTO FOR GALLERY  -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />

        <link href="assets/layout/styles/custom.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    
   
  <link href="assets/layout/styles/pure-count.css" rel="stylesheet" type="text/css" media="all"> 
  <link rel="stylesheet" href="http://hilios.github.io/jQuery.countdown/css/syntax.css">
  <link href="assets/layout/styles/countdown.css" rel="stylesheet" type="text/css" media="all"> 
  <link href="assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"> 
  <link href="assets/layout/styles/custom.css" rel="stylesheet" type="text/css" > 

     <script src="assets/layout/scripts/jquery.min.js"></script>
  <script src="assets/plugins/slider/js/jssor.slider-23.1.0.mini.js" type="text/javascript"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
 <link rel="icon" href="assets/images/logogh.ico" type="image/x-icon">
 <script src="assets/layout/scripts/jquery.countdown.min.js"></script>
    </head>
    <body id="top" ng-controller='HomeCtrl'>
      <div class="">
        <div class="relative bgded  "> 
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
          <!-- Top Background Image Wrapper -->
          <!-- #region Jssor Slider Begin -->
         <style>
         #slideshow-sec{
          position: absolute;
          z-index: -1;
         }
         .wow{
          margin-top:200px;
         }
          #slideshow-sec .carousel-inner .item h2{
          width:auto;
          text-align: center;
          margin-left:25%;
          display: block;
         }
         </style>
  <div id="slideshow-sec">
        <div id="carousel-div" class="carousel slide" data-ride="carousel" >
                   
                    <div class="carousel-inner">
                        <div class="item active">

                            <img src="assets/images/slider/banner1.jpg" width='100%' alt="" />
                            <div class="carousel-caption">
                          <h2 class="wow slideInLeft" data-wow-duration="5s"  class="heading">NSBE CONFERENCE</h1>      
                            </div>
                           
                        </div>

                        <div class="item">
                            <img src="assets/images/slider/banner4.jpg" alt="" />
                            <div class="carousel-caption">
                                 <h2 class="wow slideInRight" data-wow-duration="3s" >Engineering your future </h2>  
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/images/slider/banner3.jpg" alt="" />
                            <div class="carousel-caption">
                          <h2 class="wow slideInLeft" data-wow-duration="3s" >Book a place <a href='/NSBE/innerlayout/#!/register'>Now!</a></h1>      
                            </div>
                           
                        </div>
                         <div class="item">

                            <img src="assets/images/slider/banner2.jpg" width='100%' alt="" />
                            <div class="carousel-caption">
                          <h2 class="wow slideInRight" data-wow-duration="5s"  class="heading">Registered already? <br>hit login!</h1>      
                              
                            </div>
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                     <ol class="carousel-indicators">
                        <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-div" data-slide-to="1"></li>
                        <li data-target="#carousel-div" data-slide-to="2"></li>
                    </ol>
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-div" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-div" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
                </div>
    </div>
   
     <!-- PARALLAX LIKE SECTION END-->
  
        <!-- ################################################################################################ -->
        <div class="wrapper row0" style="z-index:500">
          <div id="topbar" class="hoc clear"> 
            <!-- ################################################################################################ -->
            <div class="fl_left">
              <ul class="nospace inline pushright">
                <li><i class="fa fa-user"></i> <a href="../innerlayout/#!/register">Register</a></li>
                <li><i class="fa fa-sign-in"></i> <a href="/NSBE/main/login">Login</a></li>
              </ul>
            </div>
            <div class="fl_right">
              <ul class="faico clear">
                <li><a class="faicon-facebook" href="../"><i class="fa fa-facebook"></i></a></li>
                <li><a class="faicon-pinterest" href="../"><i class="fa fa-pinterest"></i></a></li>
                <li><a class="faicon-twitter" href="../"><i class="fa fa-twitter"></i></a></li>
                <li><a class="faicon-dribble" href="../"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="faicon-linkedin" href="../"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="faicon-google-plus" href="../"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="faicon-rss" href="../"><i class="fa fa-rss"></i></a></li>
              </ul>
            </div>
            <!-- ################################################################################################ -->
          </div>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper" style="z-index:500">
          <header id="header" class="hoc clear"> 
            <!-- ################################################################################################ -->
            <div id="logo" class="fl_left">
              <h1><a href="../"></a>National Society 
                <img src="assets/images/logo.png" /> Black Engineers</h1>
              </div>
              <div class="fl_right">
                <ul class="nospace inline pushright">
                  <li><i class="fa fa-phone"></i> (+233) 208351347</li>
                  <li><i class="fa fa-envelope-o"></i> allancoolr@gmail.com</li>
                </ul>
              </div>
              <!-- ################################################################################################ -->
            </header>
          </div>
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
          <div class="wrapper row2" style="z-index:500">
            <nav id="mainav" class="hoc clear"> 
              <!-- ################################################################################################ -->
              <ul class="clear">
                <li><a href="../">Home</a></li>
                <li><a href="../innerlayout/#!/about">About</a></li>
                <li><a href="../innerlayout/#!/agenda">Agenda</a></li>
                <li><a href="../innerlayout/#!/accomodation">Accomodation</a></li>
                <li><a href="../innerlayout/#!/gallery">Gallery</a></li>
                
              </ul>
              <!-- ################################################################################################ -->
            </nav>
          </div>
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
          <!-- ################################################################################################ -->
     
          <!-- ################################################################################################ -->
        </div>
        <!-- End Top Background Image Wrapper -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
      <style>
      
#introblocks .elements .elementwrapper {
    padding: 10px;
    background: #fff;
    border: none;
    padding-bottom: 0px;
    height: 470px;
}
#introblocks .elements li .elementinfo {
  
    height: 235px;
    
}
      </style>
        <div class="wrapper row3" style="z-index:1000; margin-top:410px">
          <main id="introblocks" class="hoc container clear"> 
            <!-- main body -->
            <!-- ################################################################################################ -->
            <ul class="nospace group elements">
              <li class="one_third first">
                <article class="elementwrapper">
                  <figure><img src="assets/images/pre-collegiates/precollegiate.png" alt="">
                    <figcaption><a href="../innerlayout/#!/pre-collegiates"><img src="assets/images/logoicon.png"></a></figcaption>
                  </figure>
                  <div class="elementinfo">
                    <a href="../innerlayout/#!/pre-collegiates"><h4 class="heading font-x1">Pre-collegiates</h4></a>
                    <p>Compete with other pre-college students in invigorating workshops and competitions, &hellip;</p>
                  </div>

                </article>
              </li>
              <li class="one_third">
                <article class="elementwrapper">
                  <figure><img src="assets/images/collegiates/collegiate.png" alt="">
                    <figcaption><a href="../innerlayout/#!/collegiates"><img src="assets/images/logoicon.png"></a></figcaption>
                  </figure>
                  <div class="elementinfo">
                    <a href="../innerlayout/#!/pre-collegiates"><h4 class="heading font-x1">collegiates</h4></a>
                    <p>Land your Dream Job at the  Career Fair and Networking Hospitality Suites &hellip;</p>
                  </div>

                </article>
              </li>
              <li class="one_third">
                <article class="elementwrapper">
                  <figure><img src="assets/images/professional/professional.png" alt="">
                    <figcaption><a href="../innerlayout/#!/professionals"><img src="assets/images/logoicon.png"></a></figcaption>
                  </figure>
                  <div class="elementinfo">
                    <a href="../innerlayout/#!/pre-collegiates"><h4 class="heading font-x1">Professionals</h4></a>
                    <p>Build Leadership Skills at Executive Roundtables and Attain Technical Certifications and Qualifications&hellip;</p>
                  </div>
                </article>
              </li>
            </ul>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
          </main>
        </div>

  <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
<style>
.mission h6 {
       font-size: 16px;
    background-color: #9771bd;
    padding: 5px;
    color: #fffbfc;
    width: 200%;
    padding-left: 35%;
    margin-left: -30%;
    text-align: center;
    padding-right: 70%;
    border:2px solid;
}
.mission ul{
      background: white;
        margin-top: -43px;
    padding-top: 13px;
    color:#9771bd;
    font-family: monospace;
}
.mission h2{
      text-align: right;
    color:  #fffbfc;
    background:#9771bd;
    width: auto;
    padding: 7px;
    margin-bottom: -17px;
}
.mission .container{
  padding:0px;
}
ul {
    list-style-image: url('assets/images/icons/choice-yes.gif');
}
</style>
<section id="services" class="wrapper row3 mission"  style="z-index:100;background:#f36174;color:white">
          <div class="hoc container clear" style="background-image: url('assets/images/torch.png')"> 
          <!-- <h2 class="header font-x2 btmspace-30" style="text-align: right;"></h2>-->
           <p>
            <h6 style="font-size:16px; margin-top: -13px;" ><b>Mission:</b> To increase the number of culturally responsible Black Engineers who excel academically, succeed professionally and positively impact the community.</h6>
            <br>
        </p>

          </div>
          </section>
          <!----################################################################################################-->
          <!----################################################################################################-->
          <!----################################################################################################-->
          <!----################################################################################################-->

 <section id="services" class="wrapper row3 rate parallax-like" style="z-index:100;margin-top: -57px">
          <div class="hoc container clear overlay" style="width: 100%"> 
            <!-- ################################################################################################ -->
            <h2 style="color:#fff " class="header font-x2 btmspace-30">What NSBE GH stands for:</h2>
           
            <p>
            <h6 style="color:#fff ">The objective of the National Society is<h6>
            <ul style="color:#fff;font-size: .9em; text-transform:lowercase;">
            <li>To stimulate and develop student interest in the various engineering disciplines and other science related fields.</li>
            <li>Encourage members to seek advanced degrees in engineering or related fields.</li>
            <li>To obtain professional engineering careers and advise the youth in their pursuit of an engineering and other science related fields’ career.</li>

             <li>To strive to increase the number of minority students studying engineering, technology, applied and physical sciences at the Junior High, Senior High, the undergraduate and graduate levels</li>
            
           <li> Promote public awareness of the engineering and opportunities available for the youth Function as a representative body on issues  and developments that affects the careers of the youth</li>

            <li>To endeavour in the advancement of the ethnic minority engineer in the professional industry</li>
            </ul>
            </p>




            <!-- ################################################################################################ -->
          </div>
        </section>

           <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper bgded clear split" style="background-image:url('assets/images/bg1.jpeg') ;background-repeat: repeat-x;background-position: right top;margin-top: 0;">
          <article class="box box2"> 
            <!-- ################################################################################################ -->
            <h4 class="heading font-x3">Don't miss the next conference. </h4>
            <p class="btmspace-30"><div id="top">
              <div class="pure-g-r">
                
<div class="pure-u-1-2">
        <div class="main-example">
  <p>
    Next conference begins at:
  </p>
  <div class="countdown-container" id="main-example"></div>
</div>
<script type="text/template" id="main-example-template">
  <div class="time <%= label %>">
    <span class="count curr top"><%= curr %></span>
    <span class="count next top"><%= next %></span>
    <span class="count next bottom"><%= next %></span>
    <span class="count curr bottom"><%= curr %></span>
    <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
  </div>
</script>

<script type="text/javascript">
  $(window).on('load', function() {
    var labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'],
      nextYear = (new Date().getFullYear() + 1) + '/01/01',
      template = _.template($('#main-example-template').html()),
      currDate = '00:00:00:00:00',
      nextDate = '00:00:00:00:00',
      parser = /([0-9]{2})/gi,
      $example = $('#main-example');
    // Parse countdown string to an object
    function strfobj(str) {
      var parsed = str.match(parser),
        obj = {};
      labels.forEach(function(label, i) {
        obj[label] = parsed[i]
      });
      return obj;
    }
    // Return the time components that diffs
    function diff(obj1, obj2) {
      var diff = [];
      labels.forEach(function(key) {
        if (obj1[key] !== obj2[key]) {
          diff.push(key);
        }
      });
      return diff;
    }
    // Build the layout
    var initData = strfobj(currDate);
    labels.forEach(function(label, i) {
      $example.append(template({
        curr: initData[label],
        next: initData[label],
        label: label
      }));
    });
    // Starts the countdown
    $example.countdown("2017/08/014", function(event) {
      var newDate = event.strftime('%w:%d:%H:%M:%S'),
        data;
      if (newDate !== nextDate) {
        currDate = nextDate;
        nextDate = newDate;
        // Setup the data
        data = {
          'curr': strfobj(currDate),
          'next': strfobj(nextDate)
        };
        // Apply the new values to each node that changed
        diff(data.curr, data.next).forEach(function(label) {
          var selector = '.%s'.replace(/%s/, label),
              $node = $example.find(selector);
          // Update the node
          $node.removeClass('flip');
          $node.find('.curr').text(data.curr[label]);
          $node.find('.next').text(data.next[label]);
          // Wait for a repaint to then flip
          _.delay(function($node) {
            $node.addClass('flip');
          }, 50, $node);
        });
      }
    });
  });
</script>
   </div>
    </div>
              </div>
            </div>

          </p>

          <!-- ################################################################################################ -->
        </article>
      </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper bgded clear split light rightaligned" style="background-image:url('assets/images/bg2.jpeg') ; margin-top:-40px">
        <article class="box right box1"> 
          <!-- ################################################################################################ -->
          <h4 class="heading font-x2">Compete in Hands on Workshops & Competitions</h4>
          <p class="btmspace-30">Meet with leaders of Fortune 500 companies, Top Engineering Program Deans, and BLACK engineering students who will share real-world experiences with you for your future</p>
          <!-- ################################################################################################ -->
        </article>
      </div>
      <!--###########################################################################################-->
        <style>
        .rate h2, .rate h6{
          color:#9771bd;
        }
        </style>
        <section id="services" class="wrapper row3 rate" style="z-index:100">
          <div class="hoc container clear"> 
            <!-- ################################################################################################ -->
            <h2 class="header font-x2 btmspace-30">ONSITE REGISTRATION RATES</h2>
            <ul class="nospace group btmspace-30">
              <li class="one_half first btmspace-30">
                <article><i class="icon fa fa-tag"></i>
                  <h6 class="heading" style='color:#FF7659'>Pre-collegiates <span>FREE</span></h6>
                  <p><a href="#"><i class="fa fa-arrow-circle-right"></i></a></p>
                </article>
              </li>
              <li class="one_half btmspace-30">
                <article><i class="icon fa fa-tag"></i>
                  <h6 class="heading" >Collegiates <span>Ghc100</span></h6>
                  <p><a href="#"><i class="fa fa-arrow-circle-right"></i></a></p>
                </article>
              </li>

              <li class="one_half first">
                <article><i class="icon fa fa-tag"></i>
                  <h6 class="heading" style='color:#F36174'>Professionals <span>Ghc150</span></h6>
                  <p><a href="#"><i class="fa fa-arrow-circle-right"></i></a></p>
                </article>
              </li>
              <li class="one_half">
                <article><i class="icon fa fa-tag"></i>
                  <h6 class="heading" style="color:#F9CD36">Non-Members <span>Ghc200</span></h6>
                  <p><a href="#"><i class="fa fa-arrow-circle-right"></i></a></p>
                </article>
              </li>
            </ul>
            <!-- ################################################################################################ -->
          </div>
        </section>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <div class="wrapper bgded clear split" style="background-image:url('assets/images/bg3.jpeg') ;background-repeat: repeat-x;background-position: right top;">
          <article class="box box2"> 
            <!-- ################################################################################################ -->
            <h4 class="heading font-x2">Message from professionals</h4>
            <p class="btmspace-30"><div id="top">
              <div class="pure-g-r">
                <div class="pure-u-1-2">

                  <div class="main-example">
                    <p>
                      Add something here
                    </p>
                    <div class="countdown-container" id="main-example">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </p>

          <!-- ################################################################################################ -->
        </article>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="wrapper bgded clear split light rightaligned" style="background-image:url('assets/images/bg4.jpeg') ;">
        <article class="box right box1"> 
          <!-- ################################################################################################ -->
          <h4 class="heading font-x2">Join engineering community while still in college</h4>
          <p class="btmspace-30">Meet with leaders of Fortune 500 companies, Top Engineering Program Deans, and BLACK engineering students who will share real-world experiences with you for your future</p>
          <!-- ################################################################################################ -->
        </article>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <div class="wrapper row3">
        <section class="hoc container clear" style="padding-top:0;margin-top:0;"> 
          <!-- ################################################################################################ -->
          <div class="center btmspace-80" style="background-color: white;width:200%;margin-left:-50%">
            <h3 class="heading"><img src="assets/images/bloglogo.jpg"/></h3>
          </div>
          <div class="one_third first">
            <ul class="nospace group">
             
          <li class="">
            <article> 
              <!-- ################################################################################################ -->
              <style>
              figure a{
                color:white;
              }
              </style>
              <figure class="btmspace-10"><img class="borderedbox inspace-10 btmspace-15" src="assets/images/president.jpg" alt="">
                <figcaption>
                  <ul class="nospace postmeta">
                    <li><i class="fa fa-user"></i> <a>President</a></li>
                   
                  </ul>
                </figcaption>
              </figure>
               <figure class="btmspace-10"><img class="borderedbox inspace-10 btmspace-15" src="assets/images/organizer.jpg" alt="">
                <figcaption>
                  <ul class="nospace postmeta">
                    <li><i class="fa fa-user"></i> <a>National Organizer</a></li>
                   
                  </ul>
                </figcaption>
              </figure>
             
              <!-- ################################################################################################ -->
            </article>
          </li>
        </ul>
      </div>
      <div class="two_third">
        <article class="testimonial borderedbox"> 
          <!-- ################################################################################################ -->
          <style>
          blockquote p{
            color:#9771bd;
          }
         .testimonial blockquote .heading{
            color:#f36174;
          }

          </style>
          <blockquote>
            <h6 class="heading font-x1 blockquote">KNOW THE TORCH</h6>
            <p>The NSBE torch symbolizes our everlasting burning desire to achieve success in this competitive society and to affect a positive change on the quality of life for all people.</p>
            <p>The Lightening bolt represents the striking impact that will be felt by the society and industry due to the contributions and accomplishments mad by dedicated memebers of the National Society of Black Engineers.</p>
            <h6 class="heading font-x1 blockquote">Official Colors</h6>
            <p>N is green: Pantone Matching System (PMS)361</p>
            <p>SBE & Handle is black</p>
            <p>Flame of the torch  is red (PMS 485)</p>
            <p>Lightening bolts is yellow (cmyk process)</p>

          </blockquote>
          <figure class="group"><img class="circle" src="assets/images/logoicon.png" alt="">
            <figcaption><strong>Mr. Mensah Sitti</strong> <em> Submitted by</em></figcaption>
          </figure>
          <!-- ################################################################################################ -->
        </article>
      </div>
      <!-- ################################################################################################ -->
      <div class="clear"></div>
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Bottom Background Image Wrapper -->
  <div class="bgded" style="background-image:url('assets/images/gradbg1.jpg');"> 
    <!-- ################################################################################################ -->
    <div class="wrapper coloured">
      <div id="newsletter" class="hoc clear"> 
        <!-- ################################################################################################ -->
        <div class="one_quarter first">
          <h6 class="heading">Just comment?</h6>
        </div>
        <form class="three_quarter" method="post" action="#">
          <div class="clear">
            <input class="one_third first" type="email" ng-model="data.email" value="" placeholder="Email" required>
            <input class="one_third" type="text" ng-model="data.comment" value="" placeholder="Comment" required>
            <button class="one_third" type="submit" ng-click="postcomment()" title="Post">Post</button>
          </div>
        </form>
        <!-- ################################################################################################ -->
        <div class="clear"></div>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4">
      <footer id="footer" class="hoc topspace-0 clear" style="color:white;"> 
        <!-- ################################################################################################ -->
        <div class="one_third first">
          <h6 class="title">Categories</h6>
          <ul class="nospace linklist">
            <li><a href="../innerlayout/#!/pre-collegiates"  style="color:white;">Pre-collegiates</a></li>
            <li><a href="../innerlayout/#!/collegiate"  style="color:white;">Collegiates</a></li>
            <li><a href="../innerlayout/#!/professional"  style="color:white;">Professional</a></li>
            
          </ul>
        </div>
        <div class="one_third">
          <h6 class="title">Quick contact</h6>
          <ul class="nospace linklist contact">
            <li><i class="fa fa-map-marker"></i>
              <address>
               Koforidua(E/R), +233, GH
              </address>
            </li>
            <li><i class="fa fa-phone"></i> (+233) 208351347</li>
            <li><i class="fa fa-envelope-o"></i> allancoolr@gmail.com</li>
          </ul>
        </div>
        <div class="one_third">
          <h6 class="title">Conference Location</h6>
          <div id="map" style="width:300px;height:300px">

    </div>
          
        </div>
        <!-- ################################################################################################ -->
      </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
      <div id="copyright" class="hoc clear"> 
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Design by New Age Developers Group <a href="natlink.net"> http://Natlink.net</a></p>
        <!-- ################################################################################################ -->
      </div>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- End Bottom Background Image Wrapper -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="../#top"><i class="fa fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
 
  <script src="assets/layout/scripts/jquery.backtotop.js"></script>
  <script src="assets/layout/scripts/jquery.mobilemenu.js"></script>
  <!-- IE9 Placeholder Support -->  <script src="assets/layout/scripts/jquery.placeholder.min.js"></script>
  

    <script src="assets/angular/angular.min.js"></script>
    <script src="assets/angular/angular-route.min.js"></script>
    <script src="assets/angular/angular-cookies.min.js"></script>
      <script src="assets/scripts/layout.js"></script>

  <!-- / IE9 Placeholder Support -->
</div>

  <!--BOOTSTRAP SCRIPTS PLUGIN-->
    <script src="assets/js/bootstrap.js"></script>
     <!--WOW SCRIPTS PLUGIN-->
    <script src="assets/js/wow.js"></script>
     <!--FLEXSLIDER SCRIPTS PLUGIN-->
    <script src="assets/js/jquery.flexslider.js"></script>
     <!--PRETTY PHOTO FOR GALLERY -->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
     <!--PHOTO FILTER -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
     <!--CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

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