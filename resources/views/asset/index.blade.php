<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box;}
    
    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #555;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
    }
    
    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }
    
    /* Add styles to the form container */
    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }
    
    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }
    
    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }
    
    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
    }
    
    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover {
      opacity: 1;
    }</style>
  <title>Online Chat Platfrom</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
         
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light" ><a class="scrollto"><span><img src="img/skiledge-03.png" width="250px" hight="250px" alt="" class="img-fluid"></a></span></a></h1>
        <!--- <a href="#header" class="scrollto"><img src="img/skiledge-03.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#testimonials">Features</a></li>
          <li><a href="#services">Resources</a></li>
          @if (Route::has('login'))
              
                    @auth
                       <li> <a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}">Register</a></li>
                        @endif
                

                    @endauth
               
            @endif

         <!-- <li><a href=""{{ route('login') }}">Login</a></li>
          <li><a href="{{asset('auth/register.blade.php')}}">SingUP For Free</a></li>-->
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
  <button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
 
    <h1>How Can I Help You</h1>
   
<p id="chatLog">let’s chat? - We're online<br> </p>

       
       
<input id="userBox" type="text" onkeydown="if(event.keyCode == 13) {talk()}">



  <!-- <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Start</button>--->

    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
  know = {

"hi" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hi there!",
"hello" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hello there!",
"HELLO" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Hi there!",
"Who are you?" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am Nikhil's Assistant",
"How are you?" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am Fine",
"How old are you?" : "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp I am infinity in age"
};

function talk() {
var user = document.getElementById("userBox").value;
document.getElementById("userBox").value= "";
document.getElementById("chatLog").innerHTML += user+"<br>";

if (user in know) {
document.getElementById("chatLog").innerHTML += know[user] + "<br>";
} else 

{
document.getElementById("chatLog").innerHTML += "I don't understand... <br>";
}
}


function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Connect With <br>Your Customer<span> In Real Time!</span></h2>
          <div>
             @if (Route::has('register'))
                          
             <a href="{{ route('register') }}" class="btn-get-started scrollto">SingUP For Free</a>
             @endif
          </div> 
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->
  

    
    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>The struggle is real!
              People on your site need
              help every day…</h4>
              <p>
                Live Chat for Websites-The Skiledge widget allows you to chat with multiple visitors at the same time, which is impossible to do by phone.
                The app’s features aim to boost your team’s efficiency and communication opportunities.
              
              </p>
      
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>assist them 
              in live chat and watch
              your sales grow!</h4>
            <p>
              Chat with your colleagues in a reliable team messenger Chat one-on-one, create groups, send messages and files, manage access to business conversations in Skiledge team chats.
            
            </p>
            
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

   
    <!--==========================
     Feture Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Features</h3>
  
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">
    
              <div class="testimonial-item">
          <img src="img/Livechat.png" class="testimonial-img" alt="">
                <h3>Live Chat for Websites</h3>
                <p>The Skiledge widget allows you to chat with multiple visitors at the same time, which is impossible to do by phone.
                  The app’s features aim to boost your team’s efficiency and communication opportunities.
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/whatsup.png" class="testimonial-img" alt="">
               <h3>WhatsApp Business</h3>
                
                <p>
                  Connect WhatsApp to Skiledge to sell ​​products and services in your customers' favorite messenger

                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/teamchat.png" class="testimonial-img" alt="">
                <h3>Skiledge Team Chats</h3>
                <p>
                  Chat with your colleagues in a reliable team messenger Chat one-on-one, create groups, send messages and files, manage access to business conversations in Skiledge team chats.
            
                </p>
              </div>
    
              <div class="testimonial-item">
                <img src="img/email.jpg" class="testimonial-img" alt="">
                <h3>Company`s Email Integration</h3>
                <p>Email support just got faster
                  Receive emails from clients directly to your Skiledge inbox and respond to them as quickly as chats!
                  </p>
               
              </div>
              <div class="testimonial-item">
                <img src="img/facebook.png" class="testimonial-img" alt="">
                <h3>Facebook Integration</h3>
                <p>Connect your team’s Facebook page with  and reply to incoming messages
                  from Facebook, your website, calls, and emails — inside one app.
                  </p>
               
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="wow fadeInUp section-bg">

      <div class="container">

        <header class="section-header">
          <h3>Pricing</h3>
          <p>For big and small companies<br>
            5 minute installation · Try Team plan features for 14 days · No credit card required</p>
        </header>

        <div class="row flex-items-xs-middle flex-items-xs-center">
      
          <!-- Basic Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Basic Plan
                </h4>
                <ul class="list-group">
                
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          <!-- Regular Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Regular Plan
                </h4>
                <ul class="list-group">
                  
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
          <!-- Premium Plan  -->
          <div class="col-xs-12 col-lg-4">
            <div class="card">
              <div class="card-header">
                <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
              </div>
              <div class="card-block">
                <h4 class="card-title"> 
                  Premium Plan
                </h4>
                <ul class="list-group">
                  
                  <li class="list-group-item">24/7 Support System</li>
                </ul>
                <a href="#" class="btn">Choose Plan</a>
              </div>
            </div>
          </div>
      
        </div>
      </div>

    </section><!-- #pricing -->

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
        
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Why Skiledge ?<i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Because you need a free and easy way to communicate with your customers
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How does it work? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Add a small JavaScript snippet to your site-it takes 30 seconds to get started
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- #faq -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                  
                      <li><a href="#intro">Home</a></li>
                      <li><a href="#footer">Contact us</a></li>
                      <li><a href="#pricing">Pricing</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      Tecure Technolgy<br>
                      Grow-works, Office, No. 07,<br>
                      Old Mumbai – Pune Hwy,   <br>
                      Bhimjyot Nagar,<br>
                      Dapodi, Pune,<br>
                      Maharashtra 411012<br>
                      <strong>Phone:</strong><p>7387790316<br>
                        8830090013<br>
                        9322628431</p>
                      <strong>Email:</strong> vishal.tecuretechnology@gmail.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
             
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Online Chat</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
      </a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
