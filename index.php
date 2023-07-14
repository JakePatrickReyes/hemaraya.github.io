<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <title>Hemaraya || Blood Donation</title>
     <!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <link rel="stylesheet" href="css/magnific-popup.css">

     <link rel="stylesheet" href="css/owl.theme.css">
     <link rel="stylesheet" href="css/owl.carousel.css">

     <link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

     <!-- Main css -->
     <link rel="stylesheet" href="css/style.css">




</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


     <!-- PRE LOADER -->

     <div class="preloader">
          <div class="sk-spinner sk-spinner-pulse"></div>
     </div>



     <!-- Navigation Section -->

     <div class="navbar navbar-default navbar-fixed-top">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="images/HemaLogo.png" alt=""
                              style="height: 50px; width: 200px;display: block;"></a>
               </div>

               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"
                         style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                         <li><a href="#home" class="smoothScroll">ABOUT</a></li>
                         <li><a href="#about" class="smoothScroll">OUR AIM</a></li>
                         <li><a href="#screenshot" class="smoothScroll">FEATURES</a></li>
                         <li><a href="#pricing" class="smoothScroll">FAQ</a></li>
                         <div class="fa fa-user" id="login-btn" style="color: var(--black);
                         font-size: 2.5rem;
                         padding: 2.5rem 1.5rem;
                         cursor: pointer;"></div>
                    </ul>

               </div>

               <div class="accesscodeform" style="font-family:'Source Sans Pro', sans-serif;">
                    <div class="wrapper">
                         <div class="title"><span style="text-align: center"> PLEASE ENTER </span></div>
                         <form action="#">
                              <div class="row">
                                   <i class="fa fa-asterisk"></i>
                                   <input type="password" id="accesscode" placeholder="Access Code" required>
                              </div>

                              <div class="row1">
                                   <input type="text" class="form-control" readonly id="capt" style="text-align:center;">
                                   <input type="text" id="captcha-form" placeholder="Enter Captcha text" required>
                                   <h6 style="font-family:'Source Sans Pro', sans-serif;">Load Captcha. Click here<img src="images/ref.png" width="40px" onclick="cap()"></h6>
                              </div>

                              <div class="row button">
                              <input type="button" onclick="check(this.form)" value="Verify"/>
                              </div>
                         </form>
                    </div>
               </div>

               <div class="loginform" style="font-family:'Source Sans Pro', sans-serif;">
                    <div class="wrapper">
                         <div class="title"><span>Login Admin Account</span></div>
                         <form action="verify.php" method="post">
                              <div class="row">
                                   <i class="fa fa-user"></i>
                                   <input type="text" id="username" name="username" placeholder="Username" required>
                              </div>
                              <div class="row">
                                   <i class="fa fa-lock"></i>
                                   <input type="password" id="password" name="password" placeholder="Password" required>
                              </div>

                              <div class="row button">
                              <input type="submit" value="Verify"/>
                              </div>
                              
                               <?php 
                                   error_reporting(0);
                                   if ($_GET['stat']==1){
                                        echo '<script>alert("Wrong Credentials!")</script>;';
                                   }else if($_GET['stat']==2){
                                        echo '<script>alert("Not an Admin!")</script>;';
                                   }
                              ?>     
                         </form>
                    </div>
               </div>

          </div>

     </div>


     <!-- Home Section -->

     <section id="home" class="main">



          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0"
                         data-wow-delay="0.2s">
                         <img src="images/hom.png" class="img-responsive" alt="Home">
                    </div>

                    <div class="col-md-6 col-sm-7 col-xs-12">
                         <div class="home-thumb">
                              <h1 class="wow fadeInUp" data-wow-delay="0.6s"
                                   style="color: #33333F; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; -webkit-text-stroke: 1px #F5DEB2;">
                                   HEMARAYA</h1>
                              <p class="wow fadeInUp" data-wow-delay="0.8s" style="font-size: 25px;">Hemaraya is an app
                                   that helps to streamline blood donation which puts the power to save a life in the
                                   palm of your hand.</p>
                              <a href="#pricing" class="wow fadeInUp section-btn btn btn-success smoothScroll"
                                   data-wow-delay="1s" style="color: #F5DEB2;">Download App</a>
                         </div>
                    </div>

               </div>


          </div>
     </section>


     <!-- About Section -->

     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="wow bounceIn section-title">
                              <h1
                                   style="color: #F5DEB2;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">
                                   OUR AIM</h1>
                              <hr>
                         </div>
                    </div>

                    <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                         <div class="about-thumb">
                              <img src="images/aim1.png" class="img-responsive" alt="Team">
                              <div class="">
                                   <h3>Digitalising of current
                                        Blood Donation Process</h3>

                              </div>
                         </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                         <div class="about-thumb">
                              <img src="images/aim2.png" class="img-responsive" alt="Team">
                              <div class="">
                                   <h3>Promote ease of
                                        donating blood</h3>

                              </div>
                         </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                         <div class="about-thumb">
                              <img src="images/aim3.png" class="img-responsive" alt="Team">
                              <div class="">
                                   <h3>Spread Blood
                                        Donation Awareness</h3>

                              </div>
                         </div>
                    </div>
                    <div class="wow fadeInUp col-md-3 col-sm-6" data-wow-delay="0.4s">
                         <div class="about-thumb">
                              <img src="images/aim4.png" class="img-responsive" alt="Team">
                              <div class="">
                                   <h3>Build a sustainable
                                        Blood ecosystem</h3>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- Divider Section -->
     <hr style="width: 80%;">


     <!-- Screenshot Section -->

     <section id="screenshot">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                         <div class="section-title">
                              <h1
                                   style="color: #F5DEB2;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">
                                   HEMARAYA FEATURES</h1>
                              <p class="wow fadeInUp" data-wow-delay="0.8s"></p>
                              <hr>
                         </div>
                    </div>

                    <!-- Screenshot Owl Carousel -->
                    <div id="screenshot-carousel" class="owl-carousel">

                    <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img9.jpg" class="image-popup">
                                   <img src="images/img9.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img1.jpg" class="image-popup">
                                   <img src="images/img1.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img2.jpg" class="image-popup">
                                   <img src="images/img2.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img3.jpg" class="image-popup">
                                   <img src="images/img3.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img4.jpg" class="image-popup">
                                   <img src="images/img4.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img5.jpg" class="image-popup">
                                   <img src="images/img5.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img6.jpg" class="image-popup">
                                   <img src="images/img6.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img7.jpg" class="image-popup">
                                   <img src="images/img7.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img8.jpg" class="image-popup">
                                   <img src="images/img8.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img10.jpg" class="image-popup">
                                   <img src="images/img10.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         <div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                              <a href="images/img11.jpg" class="image-popup">
                                   <img src="images/img11.jpg" class="img-responsive" alt="screenshot">
                              </a>
                         </div>

                         

                    </div>

               </div>
          </div>
     </section>

     <hr style="width: 80%;">

     <!-- Pricing Section -->

     <section id="pricing">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1
                                   style="color: #F5DEB2;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; ">
                                   Frequently Asked Questions</h1>
                              <hr>
                         </div>
                    </div>

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                         <div class="pricing-plan">
                              <div class="pricing-month">
                                   <h2>What is the minimum age to donate?</h2>
                              </div>
                              <div class="pricing-title">
                                   <h3>Answer</h3>
                              </div>
                              <p>The minimum age requirement for giving blood in Brunei is 17 years old (with parental
                                   consent), and donors must weigh 45kg and above, and be deemed fit by doctors before
                                   they can give blood. <br><br></p>

                         </div>
                    </div>

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                         <div class="pricing-plan">
                              <div class="pricing-month">
                                   <h2>If I have a cold or the flu, can I donate blood?</h2>
                              </div>
                              <div class="pricing-title">
                                   <h3>Answer</h3>
                              </div>
                              <p>No. To donate, you must be symptom-free from cold, flu, or fever on the day of
                                   donation.<br><br><br><br></p>

                         </div>
                    </div>

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                         <div class="pricing-plan">
                              <div class="pricing-month">
                                   <h2>How long does a blood donation take?</h2>
                              </div>
                              <div class="pricing-title">
                                   <h3>Answer</h3>
                              </div>
                              <p>The entire process takes about 1 hour and 15 minutes; the actual donation of a pint of
                                   whole blood unit takes 8 to 10 minutes.<br><br><br><br></p>
                         </div>
                    </div>
                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                         <div class="pricing-plan">
                              <div class="pricing-month">
                                   <h2>How often can I donate blood?</h2>
                              </div>
                              <div class="pricing-title">
                                   <h3>Answer</h3>
                              </div>
                              <p>Donors must wait for at least 8 weeks (56 days) between donations of whole
                                   blood.<br><br><br><br></p>


                         </div>
                    </div>
                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.8s">
                         <div class="pricing-plan">
                              <div class="pricing-month">
                                   <h2>Where can Hemaraya be used?</h2>
                              </div>
                              <div class="pricing-title">
                                   <h3>Answer</h3>
                              </div>
                              <p>Hemaraya is currently operational at Blood Bank, RIPAS Hospital and JPMC as well as
                                   selected blood donation drive event.<br><br><br></p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- Newsletter Section -->




     <!-- Footer Section -->
     <hr style="width: 80%;">
     <footer>
          <div class="container">
               <div class="row">

                    <div class="col-md-8 col-sm-6">
                         <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                              Design: <h2 style="float: right;">Reach Us</h2>
                              </p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                              <li><a href="#" class="fa fa-facebook" style="color: #F5DEB2;"></a></li>
                              <li><a href="#" class="fa fa-twitter" style="color: #F5DEB2;"></a></li>
                              <li><a href="#" class="fa fa-instagram" style="color: #F5DEB2;"></a></li>

                         </ul>
                    </div>

               </div>
          </div>
     </footer>


     <!-- Modal Contact -->




     <!-- Back top -->

     <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


     <!-- SCRIPTS -->

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/magnific-popup-options.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/custom.js"></script>
     <script type="text/javascript" src="js/script.js"></script>


     <script type="text/javascript">


    function cap() {
      var alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'
        , 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
        'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$', '%', '^', '&', '*', '+'];
      var a = alpha[Math.floor(Math.random() * 71)];
      var b = alpha[Math.floor(Math.random() * 71)];
      var c = alpha[Math.floor(Math.random() * 71)];
      var d = alpha[Math.floor(Math.random() * 71)];
      var e = alpha[Math.floor(Math.random() * 71)];
      var f = alpha[Math.floor(Math.random() * 71)];

      var final = a + b + c + d + e + f;
      document.getElementById("capt").value = final;
    }

    function validcap() {
      var stg1 = document.getElementById('capt').value;
      var stg2 = document.getElementById('captcha-form').value;
      var uname = document.getElementById('username').value;
      var pass = document.getElementById('password').value;

      if (stg2=="") {
        alert("Please input captcha");
      } 

      else{
          if (stg1 != stg2) {
               alert("Please enter captcha correctly!");
               return false;
          }else{
               accesscodeform.classList.remove('active'); 
               loginform.classList.toggle('active'); 
          }
      }
    }
    
  </script>

      <script language="javascript">
        function check(form)
         {
            if (form.accesscode.value != "8888") {
               alert("Error Access Code")
            }else{
               validcap()
            }
        }
    </script>

</body>

</html>