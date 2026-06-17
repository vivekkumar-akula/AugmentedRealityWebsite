<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EDODWAJA WEBSITE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="The real education" name="keywords">
    <meta content="The real education" name="description">

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
                <!-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>EDODWAJA</h1> -->
                <img style="height: 60px;" src="img/e_11.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: White;">Technologies</a>
                        <div class="dropdown-menu m-0">
                            <a href="ar.php" class="dropdown-item ">AR</a>
                            <a href="vr.php" class="dropdown-item ">VR</a>
                            <a href="webtech.php" class="dropdown-item ">SPACE SHUTTLE</a>
                            <a href="robotics.php" class="dropdown-item ">Robotics</a>
                            <a href="iot.php" class="dropdown-item ">IoT</a>
                        </div>
                    </div>
                    <a href="superheros.php" class="nav-item nav-link" style="color: White;">Super heros</a>
                    <a href="index.php" class="nav-item nav-link" style="color: White;">Home</a>
                    <a href="about.php" class="nav-item nav-link" style="color: White;">About</a>
                    <a href="contact.php" class="nav-item nav-link active" style="color: #0077b6;">Contact</a>
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

                </div>
                
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header1" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                    <a href="" class="h5 text-white">EDODWAJA</a>
                    <i class="far fa-hypen text-white px-2"></i>
                    <a href="" class="h5 text-white">-The Real Education</a>
                    
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


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0" style="color: white;">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2" style="color: white;">Call to ask any question</h5>
                            <h4 class="text-primary mb-0"><a href="tel:9010388921" style="color:dodgerblue;">+91 9010388921</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2" style="color: white;">Email to get free quote</h5>
                            <h4 class="text-primary mb-0"><a href="mailto:edodwaja1306@gmail.com" style="color: dodgerblue;">contact@edodwaja.com</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2" style="color: white;">Visit our office</h5>
                            <h4 class="text-primary mb-0"><a href="https://www.google.co.in/maps/place/EDODWAJA+PVT.+LTD./@17.4997235,78.3980087,17z/data=!3m1!4b1!4m6!3m5!1s0x3bcb915866620f4f:0xd6cbe905458901f6!8m2!3d17.4997235!4d78.4001974!16s%2Fg%2F11rhv_q26k" target="_blank" rel="noopener noreferrer" style="color: dodgerblue;">KPHB, Telangana, India</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="post" action="save.php">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;" name="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;" name="Email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;" name="Subject">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message" name="Text"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <iframe class="position-relative rounded w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.163152575349!2d78.39800871467234!3d17.49972348801144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb915866620f4f%3A0xd6cbe905458901f6!2sEDODWAJA%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1676469826340!5m2!1sen!2sin"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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
                    <form action="email.php">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email" name="email">
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
                            
                            <small class="text-light"><i class="fa fa-envelope-open me-2" style="color: darkcyan;"></i><a href="mailto:edodwaja1306@gmail.com" style="color: white;">contact@edodwaja.com</a></small>
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