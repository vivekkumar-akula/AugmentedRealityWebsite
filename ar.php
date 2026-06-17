<?php
session_start();
  $link = mysqli_connect("localhost","u472303742_kvus1","Edodwajakvus1","u472303742_kvus1");
  if(mysqli_connect_error())
  {
    die("Database connection Error");
  }
    $query = "SELECT * FROM `items` WHERE branch='AR'";
    $result = mysqli_query($link, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Augmented reality|Edodwaja</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="The real education" name="keywords">
    <meta content="The real education" name="description">
    <meta name="description" content="What is Augumented Reality(AR)?"/>
    <meta name="description" content="What is Augumented Reality(AR)"/>
    <meta name="description" content="AR"/>
    <meta name="description" content="ar"/>
    <meta name="description" content="Ar"/>
    <meta name="description" content="Ar website"/>
    <meta name="description" content="AR website"/>
    <meta name="description" content="Best ar websites"/>
    <meta name="description" content="Edodwaja"/>
    <meta name="description" content="ar.edodwaja.com"/>
    <meta name="description" content="What is a AR used for?"/>
    <meta name="description" content="What is the concept of AR?"/>
    <meta name="description" content="What does AR stand for in reality?"/>
    <meta name="description" content="Augmented reality ( AR) is an interactive experience that combines the real world and computer-generated content. The content can span multiple sensory modalities, including visual, auditory"/>
    <!-- Favicon -->
    <link href="img/Logo Infinity Symbol.png" rel="icon">
    <link rel="stylesheet" href="ar.css">
    
    

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


    <!-- Topbar Start -->
    <?php include 'topbar.php' ?>
    <!-- Topbar End -->
<script>document.addEventListener('contextmenu', event => event.preventDefault());</script>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <?php include 'header2.php' ?>
        <div class="container-fluid bg-primary py-5" style="margin-bottom: 90px;background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/bckg_ar.jpg) center center no-repeat;
    background-size: cover;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">ARGUMENTED REALITY</h1>
                    <a href="" class="h5 text-white">EDODWAJA</a>
                    <i class="far fa-hypen text-white px-2"></i>
                    <a href="" class="h5 text-white">-The Real Education</a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

            <div class="container">
            <div class="row g-3">
    <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
           <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <a href="<?php echo $rows['anchor']?>"><img src="img/<?php echo $rows['image']?>"  class="card-img-top" style="height: 58mm;" alt="AR"></a>
                    
                    <a href="<?php echo $rows['anchor']?>" class="btn btn-primary" style="width: 100%; background-color: #ADD8E6;" ><?php echo $rows['name'] ?></a>
                    </div>
            </div>
            <?php 
        }
         ?>
         </div>
    </div>

    &nbsp;
<!-- Footer Start -->

<?php include 'footer1.php' ?>
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