<?php session_start();?>
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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" style="color: #0077b6;">Technologies</a>
                        <div class="dropdown-menu m-0">
                            <a href="ar.php" class="dropdown-item">AR</a>
                            <a href="vr.php" class="dropdown-item ">VR</a>
                            <a href="webtech.php" class="dropdown-item ">SPACE SHUTTLE</a>
                            <a href="robotics.php" class="dropdown-item ">Robotics</a>
                            <a href="iot.php" class="dropdown-item ">IoT</a>
                        </div>
                    </div>
                    <a href="superheros.php" class="nav-item nav-link" style="color: white;">Super heros</a>
                    <a href="index.php" class="nav-item nav-link " style="color: white;">Home</a>
                    <a href="about.php" class="nav-item nav-link" style="color: white;">About</a>
                    <a href="contact.php" class="nav-item nav-link" style="color: white;">Contact</a>
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
        