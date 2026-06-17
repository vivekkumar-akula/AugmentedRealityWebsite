<?php
$error="";
				if(array_key_exists("submit",$_POST))
				{
					$link = mysqli_connect("localhost","u472303742_kvus1","Edodwajakvus1","u472303742_kvus1");
					if(mysqli_connect_error())
					{
						die("Database connection Error");
					}
					if($error != "")
					{
						$error = "<p>There were errors in your sign up!</p>".$error;
					}
					else
					{
					$query = "INSERT INTO `users` VALUES ('".mysqli_real_escape_string($link, $_POST['username'])."',
																		'".mysqli_real_escape_string($link, $_POST['pass'])."',
																		'".mysqli_real_escape_string($link, $_POST['gmail'])."') ";
													if((mysqli_query($link, $query)))
													{
														header("Location:index.php");
													}
													else
													{
													    echo '<script>alert("User name already exists")</script>';
													    header("Location:signup.php");
													}
				
					}

				}
 ?>

 <div id="error"><?php echo $error; ?></div>
