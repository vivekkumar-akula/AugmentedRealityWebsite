<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Web Developers</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="The real education" name="keywords">
    <meta content="The real education" name="description">
    <meta name="description" content="Uday edodwaja"/>
    <meta name="description" content="Sridhar edodwaja"/>
    <meta name="description" content="Vivek edodwaja"/>
    <meta name="description" content="kirthi edodwaja"/>
    <meta name="description" content="Edodwaja"/>
    <meta name="description" content="A web developer is a programmer who develops World Wide Web applications using a client–server model. The applications typically use HTML, CSS, and JavaScript in the client, and any general-purpose programming language in the server."/>
    <meta name="description" content="What a web developer is?"/>
    <meta name="description" content="What would a web developer do?"/>
    <meta name="description" content="Web developers create and maintain websites. They are also responsible for the site's technical aspects, such as its performance and capacity, which are measures of a website's speed and how much traffic the site can handle. In addition, web developers may create content for the site."/>
    <meta name="description" content="Is web developer a good salary?"/>
    
    <!-- Favicon -->
    <link href="img/Logo Infinity Symbol.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-color: #061429;">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->
<script>document.addEventListener('contextmenu', event => event.preventDefault());</script>

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i><a href="https://www.google.co.in/maps/place/EDODWAJA+PVT.+LTD./@17.4997235,78.3980087,17z/data=!3m1!4b1!4m6!3m5!1s0x3bcb915866620f4f:0xd6cbe905458901f6!8m2!3d17.4997235!4d78.4001974!16s%2Fg%2F11rhv_q26k" target="_blank" rel="noopener noreferrer" style="color: white;">KPHB, Telangana, India</a></small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i><a href="tel:9010388921" style="color:white;">+91 9010388921</a></small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a href="mailto:edodwaja1306@gmail.com" style="color: white;">contact@edodwaja.com</a></small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/edodwaja"   target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/people/Edodwaja-Clairvoyance/100069273602308/"     target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F75578886%2Fadmin%2F"   target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/edodwaja/"  target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCoD-y8Ra8YT08-ejF-t-blg"  target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="https://edodwaja.com/" class="navbar-brand p-0" target="_blank">
               
                <img style="width: 160px; height: 45px;" src="img/e_11.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: White;">Technologies</a>
                              <?php
                    if(array_key_exists("id",$_SESSION) or ((isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']!='')))
                    {
                   
                    ?>
                        
                        <div class="dropdown-menu m-0">
                            <a href="ar.php" class="dropdown-item">AR</a>
                            <a href="vr.php" class="dropdown-item">VR</a>
                            <a href="webtech.php" class="dropdown-item">SPACE SHUTTLE</a>
                            <a href="robotics.php" class="dropdown-item">Robotics</a>
                            <a href="iot.php" class="dropdown-item">IoT</a>
                        </div>
                    <?php
                    }
                    else
                    {?>
                    <div class="dropdown-menu m-0">
                            <a href="ar.php" class="dropdown-item">AR</a>
                            <a href="vr.php" class="dropdown-item">VR</a>
                            <a href="webtech.php" class="dropdown-item">SPACE SHUTTLE</a>
                            <a href="robotics.php" class="dropdown-item">Robotics</a>
                            <a href="iot.php" class="dropdown-item">IoT</a>
                        </div>
                    <?php }?>    
                    </div>
                     <?php
                 if(array_key_exists("id",$_SESSION) or ((isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']!='')))
                 {?>
                
                <a href="superheros.php" class="nav-item nav-link" style="color: White;">Super heros</a>
                    <a href="index.php" class="nav-item nav-link " style="color: White;">Home</a>
                    <a href="about.php" class="nav-item nav-link active" style="color: White;">About</a>
                    <a href="contact.php" class="nav-item nav-link" style="color: White;">Contact</a>
                <?php }else{ ?>
                <a href="superheros.php" class="nav-item nav-link" style="color: White;">Super heros</a>
                    <a href="index.php" class="nav-item nav-link " style="color: White;">Home</a>
                    <a href="about.php" class="nav-item nav-link active" style="color: #0077b6;">About</a>
                    <a href="contact.php" class="nav-item nav-link" style="color: White;">Contact</a>
                    <?php }?>
                
                 <?php
                 if(array_key_exists("id",$_SESSION) or ((isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']!='')))
                 {
                echo '<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #0077b6;"><img  src="https://tse4.mm.bing.net/th?id=OIP.ZgcU25vAtf6dJAGi_J4c0QHaHa&pid=Api&P=0" width="30" height="30 "></a>
                        <div class="dropdown-menu m-0">
                             <a href="logout.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                    '; 
                }else{?>
                 <?php }
                 ?>
                 
                 <?php
                 if(array_key_exists("id",$_SESSION) or isset($_SESSION['FB_ID']) )
                 {
                 if(array_key_exists("id",$_SESSION)){?>
                 <a href="#" class ="nav-item nav-link" style="color: #0077b6;"><?php echo $_SESSION['username']?></a>
                 <?php }else{ ?>
                 <a href="#" class ="nav-item nav-link" style="color: #0077b6;"><?php echo $_SESSION['FB_NAME']?></a>
                 <?php 
                 }}?>
                </div>

        </nav>
        

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <h5 style="display:inline" class="h5 text-white">EDODWAJA</h5>
                    <h5 style="display:inline" class="h5 text-white">-</h5>
                    <h5 style="display:inline" class="h5 text-white">The Real Education</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0" style="color: white;">Experience the Extraordinary: Where Reality and Imagination Meet with Extended Reality.</h1>
                    </div>
                    <p class="mb-4" style="color: white; text-align: justify;">We are a young group of people, specializing in our own technical and management domains, differentiated by our experiences, perspectives and working styles but united by one common passion and goal - TO LEARN AND GROW BIG AS A GROUP , ALL TOGETHER. We are working hard towards this goal with passion through EDODWAJA - The Real Education. Edodwaja provides students with opportunities and resources to understand, learn and further build technology. We make empirical learning accessible to students for better learning experiences , we guide them through the entire learning and understanding process, which will help our team in turn in learning better, as teaching is one of the best ways to keep learning.
                        EDODWAJA IS HERE FOR YOUR GROWTH HENCEFORTH!</p>
                      <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3 text-white"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3 text-white"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3 text-white"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3 text-white"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/xr1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0" style="color: aquamarine;">Professional Staffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/sridhar1.png" alt="sridhar"  >
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/Sridhar54377933?t=Bi0ANCE-CXNbtSPhPccvzA" target="_blank"><i class="fab fa-twitter fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/sri.sridhar.92754397" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/sridhar_patlola/" target="_blank"><i class="fab fa-instagram fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com/in/patlola-sridhar-6a05231b4" target="_blank"><i class="fab fa-linkedin-in fw-normal"  ></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Patlola Sridhar</h4>
                            <p class="text-uppercase m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/vivekkumara.png" alt="vivek"  >
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/AkulaVivekKumar" target="_blank"><i class="fab fa-twitter fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/vivekvalor?mibextid=ZbWKwL" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://instagram.com/vivekvalour/" target="_blank"><i class="fab fa-instagram fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com/in/akula-vivek-kumar-715a72230" target="_blank"><i class="fab fa-linkedin-in fw-normal"  ></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Akula Vivek Kumar</h4>
                            <p class="text-uppercase m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/udaykiranp.jpg" alt="uday"  >
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/20eg105432" target="_blank"><i class="fab fa-twitter fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/profile.php?id=100056126594497" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://instagram.com/udaykiran398/" target="_blank"><i class="fab fa-instagram fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com/in/udaykiran15" target="_blank"><i class="fab fa-linkedin-in fw-normal"  ></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Paladi Uday Kiran</h4>
                            <p class="text-uppercase m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/Kirthik.png" alt="kirthi"  >
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://twitter.com/KalikarKirthi?t=4c9n2GsJUwdyFWszTcrHng&s=09" target="_blank"><i class="fab fa-twitter fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/smiley.samiksha.73" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://instagram.com/kirthi.ot7?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram fw-normal"  ></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.linkedin.com/in/kirthi-kalikar-803974198" target="_blank"><i class="fab fa-linkedin-in fw-normal"  ></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Kirthi Kalikar</h4>
                            <p class="text-uppercase m-0">Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
     
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="https://edodwaja.com/" class="navbar-brand" target="_blank">
                        <img style="height: 60px;" src="img/e_11.png" alt="Logo">
                    </a>
                    <p class="mt-3 mb-4" style="text-align: justify;">Edodwaja Pvt.Ltd  provides practical education to students so that they can get an understanding about the latest technologies and find their purpose of education for their future goal. The education provided through a mobile bus with a good infrastructure (robotics lab, computer, latest technologies etc). We also encourage students to take entrepreneurship as one of their passion. We are always ready to work with passionate and hard-working people to achieve success.</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2" style="color: darkcyan;"></i><a href="https://www.google.co.in/maps/place/EDODWAJA+PVT.+LTD./@17.4997235,78.3980087,17z/data=!3m1!4b1!4m6!3m5!1s0x3bcb915866620f4f:0xd6cbe905458901f6!8m2!3d17.4997235!4d78.4001974!16s%2Fg%2F11rhv_q26k" target="_blank" rel="noopener noreferrer" style="color: white;">KPHB, Telangana, India</a></small>
                        </div>
                        <div class="d-flex mb-2">
                            
                            <small class="text-light"><i class="fa fa-envelope-open me-2" style="color: darkcyan;"></i><a href="mailto:contact@edodwaja.com" style="color: white;">contact@edodwaja.com</a></small>
                        </div>
                        <div class="d-flex mb-2">
                            <small class="me-3 text-light"><i class="fa fa-phone-alt me-2" style="color: darkcyan;"></i><a href="tel:9010388921" style="color:white;">+91 9010388921</a></small>
                        </div>
                       
                        <div class="d-flex mt-4">
                            <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/edodwaja"   target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/people/Edodwaja-Clairvoyance/100069273602308/"     target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F75578886%2Fadmin%2F"   target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/edodwaja/"  target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCoD-y8Ra8YT08-ejF-t-blg"  target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Quick Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                           
                            
                            <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Popular Links</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            
                            <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="index.php">Edodwaja</a>. All Rights Reserved. 
                    
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>