<?php
	session_start();
		$error="";
					if(array_key_exists("submit",$_POST))
					{
							$link = mysqli_connect("localhost","u472303742_kvus1","Edodwajakvus1","u472303742_kvus1");
							if(mysqli_connect_error())
							{
								die("Database connection Error");
							}
							{
									$query = "SELECT * FROM `users` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."'";
									$result = mysqli_query($link, $query);
									$row = mysqli_fetch_array($result);
                                    if(array_key_exists("username", $row))
									{
                    if($_POST['pass'] == $row['password']){
											$_SESSION['username']=$_POST['username'];
				                                        $_SESSION['id']=1;
											header("Location:../index.php");}
										else
										{
										$error = "Incorrect password<br>";
										}
									}
							}
					}
 ?>
 <div id="error"><?php echo $error; ?></div>