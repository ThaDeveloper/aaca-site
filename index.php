<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Abdi-Nur & Asiimwe Co.</title>

    <!-- Bootstrap 
    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php include("form_process.php"); ?>
   
<!--NAVIGATION-->

<div id="myNavbar" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <a href="#" class="navbar-brand">Abdi-Nur & Asiimwe</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#screenshot-carousel">Home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#team">team</a></li>
                <li><a href="#client">clients</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div>
    </div>
</div>
   
<!--- End Navigation -->
  
<!--- Header -->
 
 <div class="slide">
        <section>
            <div class="carousel slide" id="screenshot-carousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#screenshot-carousel" data-slide-to="1"></li>
                    <li data-target="#screenshot-carousel" data-slide-to="2"></li>
                    <li data-target="#screenshot-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/carousel/law1.jpg" alt="Law and Order">
                        <div class="carousel-caption">
                        <h3>Law and Order</h3>
                        <p> Get represented now </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/carousel/law2.jpg" alt="Corporate Image">
                    </div>
                    <div class="item">
                        <img src="images/carousel/law3.jpg" alt="Justice at Hand">
                    </div>
                    <div class="item">
                        <img src="images/carousel/law4.jpg" alt="Closing Deals">
                    </div>
                </div> <!-- End inner -->
                <a href="#screenshot-carousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#screenshot-carousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div><!-- End carousel -->
            <hr>
        </section>
    </div><!--End Gallery -->
  
<!-- End Header -->

<!-- Expertise  
    <div class="container">
        <section>
            <div class="page-header" id="expertise">
                <h2> Area of Expertise </h2>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <h3> Sports Law</h3>
                    <p>
                    Kenyan sports industry has over the years been on the world map specifically on the field of Athletics but in the recent times other sports have come up taking up the global challenge and winning major trophies across the world and the continent. Just to mention a few, rugby, volleyball, swimming, javelin, rollboll skating etc. With the rise of the industry, an equivalent rise of need for legal services has been captioned but the legal fraternity has not responded to the need with the force and fulltime expertise it deserves with most practicing lawyers or firms sticking to traditional legal fields.
                    </p>

                    <p>With a handful of legal practitioners taking up sports mostly as part of services they provide, we have decided to give this full and undivided special attention</p>
                </div>
                <div class="col-sm-4">
                    <img src="images/sportlaw.jpg" class="img-responsive" alt="area1">
                </div>
            </div>
            
            <hr>
            
        </section>
    </div> ENd expertise -->
 
 <!-- Services -->
 
 <div id="services" class="services">
     <div class="container">
         <h2 class="wow fadeInUp">Services</h2>
         <p class="wow fadeInUp" data-wow-delay="0.4">We are a firm that specializes on sports law and provides general legal services that includes but not limited to:</p>
         <div class="row">
             <div class="col-sm-3 wow fadeInLeft" data-wow-delay="1.8s">
                 <i class="fa fa-gavel" aria-hidden="true"></i>
                 <h4>Legal Advice</h4>
                 <p>For any corporate legal advice.</p>
             </div>
             <div class="col-sm-3 wow fadeInLeft" data-wow-delay="1.4s">
                 <i class="fa fa-briefcase" aria-hidden="true"></i>
                 <h4>Consultancy</h4>
                 <p>We are with you in your business journey</p>
             </div>
             <div class="col-sm-3 wow fadeInLeft" data-wow-delay="0.8s">
                 <i class="fa fa-hourglass-half" aria-hidden="true"></i>
                  <h4>Litigation</h4>
                 <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
             </div>
             <div class="col-sm-3 wow fadeInLeft" data-wow-delay="0.4s">
                 <i class="fa fa-home" aria-hidden="true"></i>
                 <h4>Conveyancing</h4>
                 <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
             </div>
         </div>
     </div>
 </div>
  
<!-- End Services -->
 
<!-- Pricing -->

<div id="about" class="about">
    <div class="container">
        <div class="row">
            <div id="firm">
            <h2 class="wow fadeInUp">About the Firm</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">Abdi-Nur & Asiimwe Company Advocates is a firm that specializes on sports law and provides general legal services to a wide range of clients across Kenya.
            Our specialists will work in a very competitive environment and will maneuver around regulatory regimes to get our clients the best deals. We have experience in hard ball negotiations and we work to negotiate in high stake sports related transactions to deliver value for our clients.</p>
            </div>
            <div class="col-md-6 col-sm-6 wow flipInY" data-wow-delay="0.8s">
                <div class="goal">
                <h4>Our Vision</h4>
                    <p>To provide client-oriented based legal solution services that help them to ensure growth and high profit ends for their business by minimising disputes or settling conflict amicably and quickly whenever they arise without hurting their business environment. 
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 wow flipInY" data-wow-delay="1.2s">
                <div class="goal">
                <h4>Our Mission</h4>
                <p>
                  Our mission is to be a leading legal service provider in East Africa not only in the sports law but also in the fields of conveyance, commercial law, corporate, intellectual property by providing client oriented legal solutions and services.
                  </p>
                </div>
            </div>
            
        </div>
    </div>
</div>
 
 <!--- End Pricing -->
 
 <!--- Team -->
 
 
<div id="team" class="team">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Meet our team</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">Lorem Ipsum passages, and more recently with desktop publishing software</p>
            <div class="col-md-3 col-sm-3 wow fadeInLeft" data-wow-delay="2s">
                <img src="images/team/team-1.jpg" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-3 col-sm-3  wow fadeInLeft"  data-wow-delay="1.6s">
                <img src="images/team/team-2.jpg" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-3 col-sm-3  wow fadeInLeft"  data-wow-delay="1.2s">
                <img src="images/team/team-3.jpg" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-3 col-sm-3  wow fadeInLeft" 0.8>
                <img src="images/team/team-4.jpg" class="img-circle" alt="">
                <h4>John Doe</h4>
                <b>CEO and Founder</b>
                <p>Lorem Ipsum passages, and more recently with desktop publishing software</p>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
 
<!-- End Team -->


<!--- Clients -->

<div id="client" class="clients">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Trusted by</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">Below are some of our happy clients.</p>
            <div class="col-md-3 col-sm-3 wow fadeInLeft" data-wow-delay="2s">
                <li><img src="images/clients/client1.jpg" alt=""></li>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInLeft" data-wow-delay="1.6s">
                <li><img src="images/clients/client2.jpg" alt=""></li>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInLeft" data-wow-delay="1.2s">
                <li><img src="images/clients/client3.jpg" alt=""></li>
            </div>
            <div class="col-md-3 col-sm-3 wow fadeInLeft" data-wow-delay="0.8s">
                <li><img src="images/clients/client4.jpg" alt=""></li>
            </div>
        </div>
    </div>
</div>
 
<!-- End Clients -->

<!--- Contact -->

<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <h2 class="wow fadeInUp">Contact</h2>
            <p class="wow fadeInUp" data-wow-delay="0.4">Send us a message, or contact us from the address below</p>
            <form id="contactus" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form-horizontal">
            <div class="col-md-6 col-sm-6">
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" name="name" class="form-control" aria-describedby="sizing-addon1" value="<?= $name ?>" placeholder="Full Name">
                    <span class="error"><?= $name_error ?></span>
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" name="email" class="form-control" aria-describedby="sizing-addon1" value="<?= $email ?>" placeholder="Email Address">
                    <span class="error"><?= $email_error ?></span>
                </div>
                <div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
                    <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" name="phone" class="form-control" aria-describedby="sizing-addon1" value="<?= $phone ?>" placeholder="Phone Number">
                    <span class="error"><?= $phone_error ?></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="input-group wow fadeInUp" data-wow-delay="2s">
                    <textarea value="<?= $message ?>" name="message" id="message" cols="80" rows="6" class="form-control"></textarea>
                </div>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s">Submit Your Message</button>
            </div>
             <div class="success"><?= $success ?></div>
            </form>
        </div>
    </div>
</div>
 
 <!-- End Contact -->



 <!---Footer -->
 
 <div id="footer" class="footer">
     <div class="container">
         <div class="row">
             <div class="col-md-4 col-sm-4">
                 <h4 class="wow fadeInUp">Contact Us</h4>
                 <p><i class="fa fa-home" aria-hidden="true"></i>Bruce House, 3rd Floor, Nairobi CBD</p>
                 <p><i class="fa fa-envelope" aria-hidden="true"></i>info@abdinurasiimwe.ac.ke</p>
                 <p><i class="fa fa-phone" aria-hidden="true"></i> +25422569583 or +256 7005620162</p>
                 <p><i class="fa fa-globe" aria-hidden="true"></i> abdinurasiimwe.ac.ke </p>
             </div>
             <div class="col-md-4 col-sm-4">
                 <h4>About</h4>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i> About Us</p>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i> Privacy</p>
                 <p><i class="fa fa-square-o" aria-hidden="true"></i> Term & Condition</p>
                 <p>&copy; Copyright @ 2107</p>
             </div>
             <div class="col-md-4 col-sm-4">
                 <h4>Stay in touch</h4>
                 <i class="social fa fa-facebook" aria-hidden="true"></i>
                 <i class="social fa fa-twitter" aria-hidden="true"></i>
                <i class="social fa fa-linkedin" aria-hidden="true"></i>
                <i class="social fa fa-pinterest" aria-hidden="true"></i>
                <i class="social fa fa-youtube" aria-hidden="true"></i>
                <i class="social fa fa-github" aria-hidden="true"></i><br>
               <!-- <input type="email" placeholder="Subscribe For Updates"><button class="btn btn-success">Subscribe</button> -->
             </div>
         </div>
        
     </div>
 </div>
 
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <!--<script src="js/bootstrap.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>