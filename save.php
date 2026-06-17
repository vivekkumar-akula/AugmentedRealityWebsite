<?php
  $link = mysqli_connect("localhost","u472303742_kvus1","Edodwajakvus1","u472303742_kvus1");
  if(mysqli_connect_error())
  {
    die("Database connection Error");
  }
   $query = "INSERT into contact VALUES('".mysqli_real_escape_string($link, $_POST['Name'])."','".mysqli_real_escape_string($link, $_POST['Email'])."','".mysqli_real_escape_string($link, $_POST['Subject'])."','".mysqli_real_escape_string($link, $_POST['Text'])."')";
    if(mysqli_query($link, $query))
    {
        header("Location:index.php");
    }
    else
    {
        echo $_POST['Name'];
        echo $_POST['Email'];
        echo $_POST['Subject'];
        echo $_POST['Text'];
    }
?>
