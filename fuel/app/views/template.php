<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet/less" type="text/css" href="http://localhost/dmkl/public/assets/css/styles.less" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js" ></script>
    <?php echo Asset::css('main.css')?>  
    <?php echo Asset::js('scrollreveal.js') ?>
    <script>window.sr = ScrollReveal();</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DMKL | HOME</title>
</head>
    <body>
      <!-- START HEADER -->
       <header class="header">
        <!-- START TOP HEADER -->
        <section class="section" id="top">
          <div class="container">
            <div class="row">
              <div class="hidden-sm-down col-md-4 col-lg-4 col-xl-1-12">
                <div class="header-contact">
                  <i class="fa fa-mobile"></i> +254-706-650691 | <i class="fa fa-mobile"></i> +254-729-490500 
                </div>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-1-4">
                <ul class="social-links">
                  <li class="slink"> <a href="#" class="facebook"> <i class="fa fa-facebook"></i> </a> </li>
                  <li class="slink"> <a href="#" class="twitter"> <i class="fa fa-twitter"></i> </a> </li>
                  <li class="slink"> <a href="#" class="instagram"> <i class="fa fa-instagram"></i> </a> </li>
                  <li class="slink"> <a href="#" class="linkedin"> <i class="fa fa-linkedin"></i> </a> </li>
                </ul>
              </div>
              <div class="hidden-sm-down col-md-4 col-lg-4 col-xl-1-12 text-right">
                <div class="header-email">
                  <i class="fa fa-envelope-o"></i> info@dmkl.co.ke | <i class="fa fa-envelope-o"></i> quotation@dmkl.co.ke
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END TOP HEADER -->
        <!-- START MID HEADER -->
        <section class="section" id="logo-options">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-1-12">
                <?php echo Asset::img('./logo/logo.jpg', array('class'=>'logo img-fluid')) ?>
              </div>
            </div>
          </div>
        </section>
        <!-- END MID HEADER -->
        <!-- START HEADER NAVIGATION -->
        <section class="section" id="navigation">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">     
                <nav class="navbar navbar-expand-lg navbar-dark bg-black text-center">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> </span> Menu
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
                      <a class="nav-item nav-link" href="about">About</a>
                      <a class="nav-item nav-link" href="#">Services</a>
                      <!--<a class="nav-item nav-link disabled" href="#">Bookings</a>
                      <a class="nav-item nav-link disabled" href="#">Quotation</a>
                      <a class="nav-item nav-link disabled" href="#">Training</a>-->
                      <a class="nav-item nav-link" href="#">Gallery</a>
                      <a class="nav-item nav-link" href="contact">Contact-Us</a>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>      
        </section>
        <!-- END HEADER NAVIGATION -->
       </header>
       <!-- END HEADER -->

       <!-- START BODY -->
        <main>
            <?php echo $content; ?>
        </main>
        <!-- END BODY -->

        <!-- START FOOTER -->
        <footer class="footer">
          <section class="section" id="footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 |xl-1-12|auto footer-logo">
                  <?php echo Asset::img('./logo/logo.jpg', array('class'=>'logo-footer img-fluid')) ?>
                  <p><strong> Dante Mixologists Kenya Limited </strong>(DMKL) is a hospitality based organisation bringing together 3 major pillars in the beverage department with over 5 years experience as a limited company. The beverage industry consists of:<br>
                  Wine, Spirits, Beers, Soft drinks, Energy drinks and Bar Knowledge. Mixology on events and bar operations ... <a class="footer-link" href="http://localhost/odmkl/public/about">Read More</a></p>
                </div>
                <div class="col-lg-3 |xl-1-12|auto footer-contact">
                  <h6>CONTACT US</h6>
                  <span class="fcont">info@dmkl.co.ke</span>
                  <span class="fcont">Kamiti Rd, Off Thika Rd, Nairobi, Kenya</span>
                  <span class="fcont">Just behind BUY-RITE supermarket.</span>
                  <span class="fcont">+254-706-650691 | +254-729-490500</span>
                </div>
                <div class="col-lg-3 |xl-1-12|auto footer-newsletter">
                  <h6>NEW LETTER</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                    <div class="input-group mb-3">
                      <input type="text" class="form-control flat" placeholder="example@email.com" aria-label="" aria-describedby="basic-addon1">
                      <div class="input-group-prepend">
                        <button class="btn bg-pri text-dark" type="button"> <i class="fa fa-envelope-o"></i></button>
                      </div>
                    </div>
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="section" id="copyright">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-1-12 auto">
                  <div class="bottom">  
                    <ul class="social-links">
                      <li class="slink"> <a href="#" class="facebook"> <i class="fa fa-facebook"></i> </a> </li>
                      <li class="slink"> <a href="#" class="twitter"> <i class="fa fa-twitter"></i> </a> </li>
                      <li class="slink"> <a href="#" class="instagram"> <i class="fa fa-instagram"></i> </a> </li>
                      <li class="slink"> <a href="#" class="linkedin"> <i class="fa fa-linkedin"></i> </a> </li>
                    </ul>
                    <span class="copyrights">&copy; 2018 DMKL. All Rights Reserved.</span>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </footer>
        <!-- END FOOTER -->
        <!-- START SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript">
                var slink = {
                  origin   : "top",
                  distance : "24px",
                  duration : 1500,
                  scale    : 1.05,
                }

                var navigation = {
                  origin   : "bottom",
                  distance : "64px",
                  duration : 900,
                  delay    : 1500,
                  scale    : 1,
                }

                var logo = {
                  origin   : "left",
                  distance : "32px",
                  rotate: { x: 100, y: 100, z: 0 },
                  duration : 600,
                  delay    : 1200,
                  scale    : 0,
                }

                var slider = {
                  origin   : "top",
                  distance : "32px",
                  duration : 600,
                  delay    : 1800,
                  scale    : 0,
                }
                var footerleft = {
                  origin   : "left",
                  distance : "64px",
                  duration : 900,
                  delay    : 400,
                  scale    : 1,
                }
                var footerright = {
                  origin   : "right",
                  distance : "64px",
                  duration : 900,
                  delay    : 400,
                  scale    : 1,
                }

                var topflow = {
                  origin   : "top",
                  distance : "64px",
                  duration : 900,
                  delay    : 400,
                  scale    : 1,
                }

                var bottomflow = {
                  origin   : "bottom",
                  distance : "64px",
                  duration : 900,
                  delay    : 400,
                  scale    : 1,
                }

                var quotation = {
                  origin   : "top",
                  distance : "32px",
                  easing: "ease-in-out",
                  duration : 600,
                  delay    : 700,
                  scale    : 0,
                }
          sr.reveal('.slink',slink);
          sr.reveal('#navigation', navigation);
          sr.reveal('.logo', logo);
          sr.reveal('#slider', slider);
          sr.reveal('.footer-logo', footerleft);
          sr.reveal('.footer-contact', footerright);
          sr.reveal('.footer-newsletter', footerright);
          sr.reveal('.header-contact', footerleft);
          sr.reveal('.header-email', footerright);
          sr.reveal('#quotation', quotation);

          sr.reveal('.l', footerleft);
          sr.reveal('.r', footerright);
          sr.reveal('.t', topflow);
          sr.reveal('.b', bottomflow);
        </script>
        <!-- END SCRIPTS -->
    </body>
</html>
