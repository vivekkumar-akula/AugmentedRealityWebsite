<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EDODWAJA NEW</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="The real education" name="keywords">
    <meta content="The real education" name="description">

    <!-- Favicon -->
    <link href="img/Logo Infinity Symbol.png" rel="icon">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="css/style.css">

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


    <!-- Navbar & Carousel Start -->
<?php include 'head3sup.php' ?>     
    <!-- Navbar & Carousel End -->
    
    <div style="padding-top: 8%;">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script></div> -->

  <script>
    $(document).ready(function () {
      $("#myModal").modal("show");
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
 
  &nbsp;  &nbsp;

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
  crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
    $("#myModal").modal("show");
  });
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
  crossorigin="anonymous"></script> -->



<!-- 3d content -- variable1=glbfile variable2=usdzfile variable3=alt -->
<div class="view">
<model-viewer src="https://cdn.glitch.me/bebaaa81-8f4d-4b9b-b39c-7c08eecc2525/zombie.glb?v=1679068471755" ios-src=""
  poster="" ar-modes="scene-viewer quick-look webxr" shadow-intensity="1" camera-controls autoplay="true" ar>
</model-viewer>
</div>
&nbsp;
  
<!-- Loads <model-viewer> for modern browsers: -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<!--model-viewerfor old browsers like IE11: -->
<script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
<!-- windows modal script -->
<script>
// Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("w1");

// Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal
  btn.onclick = function () {
    modal.style.display = "block";
  };
// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
  };
// When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
</script>
<script>
function myFunction() {
var dots = document.getElementById("dots");
var moreText = document.getElementById("more");
var btnText = document.getElementById("myBtn");

if (dots.style.display === "none") {
  dots.style.display = "inline";
  btnText.innerHTML = "Read more"; 
  moreText.style.display = "none";
} else {
  dots.style.display = "none";
  btnText.innerHTML = "Read less"; 
  moreText.style.display = "inline";
}
}
</script>
</div>  



<div class="row-lg-5"  style="margin-left: 10%; margin-right: 10%;  height: 50%;
width: flex;
background-color:#caf0f8;
border: 1px solid black;
border-radius:10px;
padding:20px;">
    <div class=" d-flex justify-content-between">
    <div style="height: 70%;"><h3>ZOMBIE</h3>
    
      </div>
      <div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        QR Code
      </button></div>
</div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h3 class="text-primary" style="text-align: center; margin: auto;"><b>Scan through mobile </b></h3> 
      </div>
      <div class="modal-body">
          <img src="img/sh_zombie.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Close
        </button> 
        <!-- <button class="modal-title" id="exampleModalLongTitle" type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button> -->
      </div>
    </div>
  </div>
  </div>
&nbsp;
<div style="height:50%;
background-color:#caf0f8;
border: 1px solid black;
border-radius:10px;
padding:20px;

margin-left: auto;
margin-right: auto; margin-left: 10%; margin-right: 10%;"

  >


    <div class="body">
      <h1 style="font-family:'Times New Roman', Times;">Revolutionizing the future with our humanoid robot - where technology meets humanity.</h1>
    <details>
      <summary>
        <span id="open" style="color:#0e0e52"><u>read more</u></span> 
      </summary>
      <h4 style="color: #0e0e52;">All about Zombie</h4>
      <p style="color: #00296b;">A zombie is a fictional creature that is typically described as an undead human that has been reanimated through some sort of virus or supernatural means. Zombies are often characterized as slow-moving, brain-eating monsters that have an unsatisfying appetite for human flesh. Despite their lack of intelligence and slow movement, zombies are often portrayed as relentless and difficult to kill. They are typically depicted as being able to sustain significant amounts of damage without feeling pain or stopping the pursuit of their prey.
        </p>
    </details>
    </div>
    </div>

          

<!-- Footer Start -->
<?php include 'footer1.php' ?>
<!-- Footer End -->


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> -->


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