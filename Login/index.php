<?php
//awebthgj_yt
session_start();
?>

<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="images/Logo Infinity Symbol.png" rel="icon">

    <meta name="google-signin-client_id" content="518129436539-9ou9fgjae1kd3mr532s093u2v0kbmqgt.apps.googleusercontent.com">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
    <!--script>
  window.onload = function () {
    google.accounts.id.initialize({
      client_id: '518129436539-9ou9fgjae1kd3mr532s093u2v0kbmqgt.apps.googleusercontent.com',
      callback: handleCredentialResponse
    });
    google.accounts.id.prompt();
  };
  google.accounts.id.initialize(IdConfiguration)
</script-->
    

<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId      : '1267347987511179',
		  cookie     : true,
		  xfbml      : true,
		  version    : 'v16.0'
		});
		FB.AppEvents.logPageView();   
	  };

	  (function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "https://connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	   
	   function fbLogin(){
			FB.login(function(response){
				if(response.authResponse){
				    
					fbAfterLogin();
				}
			});
	   }
	   
	   function fbAfterLogin(){
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {   // Lo
				FB.api('/me', function(response) {
				  jQuery.ajax({
					url:'check_login.php',
					type:'post',
					data:'name='+response.name+'&id='+response.id,
					success:function(result){
						window.location.href='https://ar.edodwaja.com/index.php';
					}
				  });
				});
			}
		});
	   }
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="js/main.js"></script>
	<!--script>
    function signOut() {
        //google.accounts.oauth2.initCodeClient();
      //var auth2 = gapi.auth2.getAuthInstance();
      //auth2.signOut().then(function () {
        //console.log('User signed out.');
     // });
    }

    /*function onLoad() {
      gapi.load('auth2', function() {
        gapi.auth2.init();
        gapi.load("client:auth2", initAuth);
      });
    }*/
   /* function init() {
  gapi.load('auth2', function() {
  client_id: '408263934042-o5f49rcn3qt5adfrjei3ci44jo731tq6.apps.googleusercontent.com'
   scope: 'profile email';
   options = new gapi.auth2.SigninOptionsBuilder();
options.setAppPackageName('com.example.app');
options.setFetchBasicProfile(True);
options.setPrompt('select_account');
options.setScope('profile').setScope('email');
  });
}*/
  </script-->
  <script src="https://apis.google.com/js/platform.js" async defer></script>
<!--script>
function onSignIn(googleUser) {
   // google.accounts.oauth2.initCodeClient();
//    var profile = googleUser.getBasicProfile();
    
    // Extract the relevant details
    //var name = profile.getName();
    //var email = profile.getEmail();
   // var imageUrl = profile.getImageUrl();
  //  saveUserDetails(name, email, imageUrl);
  /*	  jQuery.ajax({
					url:'check_login.php',
					type:'post',
					data:'name='+response.name+'&id='+response.id,
					success:function(result){
						window.location.href='https://ar.edodwaja.com/index.php';
					})*/
  	//window.location.href='https://ar.edodwaja.com/index.php';
//    window.location.assign("https://ar.edodwaja.com")
}


function saveUserDetails(name, email, imageUrl) {
    // Here, you could use JavaScript to send an HTTP request to your server
    // and pass the user details as parameters in the request. For example:
    /*
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/save-user-details");
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.send(JSON.stringify({
        name: name,
        email: email,
        imageUrl: imageUrl
    }));
    */
    // The server would then handle the request and save the user details in a database.
}
</script-->
    
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="POST" > 
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<!--a href="#" onclick="fbLogin() class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a-->
						<?php
if(isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']!=''){
	echo 'Welcome '.$_SESSION['FB_NAME'];
	echo "<br/>";
	?>
	<a href="logout.php">Logout</a>
	<?php
}else{
?>
<a href="javascript:void(0)" onclick="fbLogin()" class="btn-face m-b-20"><i class="fa fa-facebook-official"></i>
						Facebook</a>
						
<?php } ?>
      <script src="https://accounts.google.com/gsi/client" async defer></script>
      <script src="https://accounts.google.com/gsi/client?hl=fr" async defer></script>
<!--div id="g_id_onload"
     data-client_id="681268929278-bi1jvg3d3le0c3mvbmj8urkupodb1i0u.apps.googleusercontent.com"
     data-callback="handleCredentialResponse">
</div-->
<!--script>
  function handleCredentialResponse(response) {
     // decodeJwtResponse() is a custom function defined by you
     // to decode the credential response.
    // const responsePayload = decodeJwtResponse(response.credential);

     console.log("ID: " + responsePayload.sub);
    console.log('Full Name: ' + responsePayload.name);
     console.log('Given Name: ' + responsePayload.given_name);
     console.log('Family Name: ' + responsePayload.family_name);
     console.log("Image URL: " + responsePayload.picture);
     console.log("Email: " + responsePayload.email);
  }
</script-->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<div class="g-signin" data-onsuccess="onSignIn"></div>

<script>
function onSignIn(googleUser) {
  // Get the user's email address.
  const email = googleUser.getBasicProfile().email;
   if(console.log(email))windows.location.assign("validate.php");
  // Do something with the user's email address.
  // For example, you could store it in a database or send an email to the user.
}
</script>
<button class="signInButton" onclick="onSignIN()">google</button>
					<div class="p-t-31 p-b-9" >
						<span class="txt1">
							Username
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="submit">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="signup.php" class="txt2 bo1">
							Register
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div><?php $client->authenticate($_GET['code']);?>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
</body>
</html>

