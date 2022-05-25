<?php
if(isset($_POST["submit"])){
  include 'dbconnect.php';
  $email  = $_POST["email"];
  $password = sha1($_POST["password"]);
  $stmt = $conn->prepare("SELECT * FROM tbl_mytutor_user WHERE email = '$email' AND password = '$password'");
  $stmt->execute();
  $number_of_rows = $stmt->fetchColumn();

  if($number_of_rows > 0){
    echo "<script>alert('Login success');</script>";
    echo "<script>window.location.replace('mainpage.php')</script>";

  }else{
    echo "<script>alert('Login failed');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login to MY Tutor</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="mytutorStyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@600&display=swap"
      rel="stylesheet"
    />
  </head>

  <script>
    function hamburgerMenu() {
      var x = document.getElementById("idMenuBar");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

  <script src = "js/login.js"></script>

  <body onload = "loadCookies()">
    <!-- Top navigation bar -->
      <div class="w3-bar w3-black w3-padding-16" id="navBar">
        <a href="index.html" class="w3-bar-item w3-button w3-wide w3-">
          <b>MY Tutor</b></a
        >
        <a href="#browse" class="w3-bar-item w3-button w3-hide-small">Browse</a>
        <a href="#tutorials" class="w3-bar-item w3-button w3-hide-small"
          >Tutorials</a
        >
        <a href="#tutors" class="w3-bar-item w3-button w3-hide-small">Tutors</a>
        <!-- Right-sided navbar links -->
        <div class="w3-right">
          <a href="login.php" class="w3-bar-item w3-button w3-hide-small"
            >LOGIN</a
          >
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a
          href="javascript:void(0)"
          class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
          onclick="hamburgerMenu()"
        >
          <i class="fa fa-bars"></i>
        </a>
      </div>

    <!-- Hamburger menu -->
    <div
      id="idMenuBar"
      class="w3-bar-block w3-card w3-white w3-hide w3-hide-large w3-hide-medium"
    >
      <a href="#browse" class="w3-bar-item w3-button w3-center">Browse </a>
      <a href="#tutorials" class="w3-bar-item w3-button w3-center">Tutorials</a>
      <a href="#tutors" class="w3-bar-item w3-button w3-center">Tutors</a>
      <a href="login.php" class="w3-bar-item w3-button w3-center">LOGIN</a>
    </div>

    <div id = "cookieNotice" class="w3-block" style="display: none;">
      <div class="w3-black">
        <h4>Cookie Consent</h4>
        <p>Cookies and similar technologies are used in this website to 
          provide you a better and faster experience. 
          By continuing to use our website, you agree to our <b>Privacy Policy</b></p>
          <div class="w3-btn">
            <button onclick="acceptCookieConsent();">Accept</button>
          </div>
      </div>
    </div>
  </body>

  <div class="w3-content w3-padding-top-64" style="max-width: 900px">
     <!-- Header -->
      <div class="w3-header w3-container">
      <div class="w3-col m6 w3-padding-large w3-center">
        <img
          src="../assets/Logo.png"
          alt="MYTutor Logo"
          width="300"
        />
      </div>
      <!-- col -->

      <div class="w3-col m6 w3-padding-small">
          <div class="w3-container w3-padding-32"> 
              <div class="w3-card-4 w3-round w3-padding">
                <form name="loginForm" action="login.php" method="post">
                    <h3 class="w3-center">Login</h3>
                    <p>
                        <label><b>Email</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="email" name="email" id="idemail"
                            placeholder="Enter your email" required>
                    </p>
                    <p>
                        <label><b>Password</b></label>
                        <input class="w3-input w3-round-xxlarge w3-border" type="password" name="password" id="idpassword"
                            placeholder="Enter your password" required>
                    </p>
                    <p>
                        <input class="w3-check" name="rememberme" type="checkbox" id="idremember" onclick="rememberMe()">
                        <label>Remember Me</label>
                    </p>
                    <p>
                        <button class="w3-btn w3-black w3-round-xxlarge w3-block" type="submit" name="submit" value="login">Login</button>
                    </p>
                    <div class="w3-center"> <p>New to MY Tutor? <a href="register.php"><b>Register now !</b> </a></p></div>
                    </form>
              </div>
          </div>
      </div>
      
      <!-- col -->
        </div>
     </div>
   </div>
    <!-- header -->
    <div class="w3-padding-top-64"></div>
    

  <!-- footer -->
  <footer class="w3-row-padding w3-padding-16 w3-center w3-black">
    <div class="w3-small">
      <a href="#browse" class="w3-bar-item w3-button">Browse</a>
      <a href="#tutorials" class="w3-bar-item w3-button">Tutorials </a>
      <a href="#tutors" class="w3-bar-item w3-button">Tutors</a>
    </div>

    <h6>© 2022 MY Tutor</h6>
  </footer>

  <script>
    let cookieConsent = getCookie("user_cookie_content");
    if (cookieConsent != ""){
      document.getElementById("cookieNotice").style.display = "none";
    } else {
      document.getElementById("cookieNotice").style.display = "block";
    }
  </script>


</html>
