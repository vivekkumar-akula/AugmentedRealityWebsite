<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Sign In</title>
</head>
<body>
  <h1>Google Sign In</h1>
  <div class="g-signin" data-onsuccess="onSignIn"></div>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script>
  function onSignIn(googleUser) {
    // Get the user's email address.
    const email = googleUser.getBasicProfile().email;
    
    // Redirect the user to the next page.
    window.location.href = "next-page.html?email=" + email;
  }
  </script>
</body>
</html>


<!--script>
const handleSignIn = (user) => {
  // Get the user's email address.
  // Do something with the user's email address.
  // For example, you could store it in a database or send an email to the user.
import React, { useState } from "react";
import { useRouter } from "next/router";
import GoogleSignIn from "react-google-signin";

const SignIn = () => {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  const router = useRouter();

  const handleSignIn = async () => {
    try {
      const response = await GoogleSignIn.signIn();
      setIsLoggedIn(true);
      router.push("/");
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <div>
      {isLoggedIn ? (
        <h1>You are logged in!</h1>
      ) : (
        <button onClick={handleSignIn}>Sign in with Google</button>
      )}
    </div>
  );
};

export default SignIn;
}
<script src="https://apis.google.com/js/platform.js" async defer></script>
</script>
<div class="g-signin" data-onsuccess="onSignIn">
<button onClick={handleSignIn}>Sign in with Google</button>
</div-->