<?php
session_start();
  $link = mysqli_connect("localhost","u472303742_kvus1","Edodwajakvus1","u472303742_kvus1");
  if(mysqli_connect_error())
  {
    die("Database connection Error");
  }
    $query = "SELECT * FROM `items` WHERE branch='HERO'";
    $result = mysqli_query($link, $query);

?>

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
                            <a href="ar.php" class="dropdown-item">AR</a>
                            <a href="vr.php" class="dropdown-item ">VR</a>
                            <a href="webtech.php" class="dropdown-item ">SPACE SHUTTLE</a>
                            <a href="robotics.php" class="dropdown-item ">Robotics</a>
                            <a href="iot.php" class="dropdown-item ">IoT</a>
                        </div>
                    </div>
                    <a href="superheros.php" class="nav-item nav-link active" style="color: #0077b6;">Super heros</a>
                    <a href="index.php" class="nav-item nav-link" style="color: White;">Home</a>
                    <a href="about.php" class="nav-item nav-link" style="color: White;">About</a>
                    <a href="contact.php" class="nav-item nav-link" style="color: White;">Contact</a>
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
               </div>  
        </nav>
        
        <div class="container-fluid bg-primary py-5 bg-header3" style="margin-bottom: 90px;background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/bckg_hero.jpg) center center no-repeat;
    background-size: cover;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">SUPER HEROES</h1>
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
                    
                    <a href="<?php echo $rows['anchor']?>" class="btn btn-primary" style="width: 100%;background-color: #ADD8E6;" ><?php echo $rows['name'] ?></a>
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