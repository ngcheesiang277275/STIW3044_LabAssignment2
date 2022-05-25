<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MY Tutor</title>
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

  <body>
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
        <a href="" class="w3-bar-item w3-button w3-hide-small"
          >LOGOUT</a
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
    </div>

    <div class="w3-center w3-padding-64">
      <h3>Welcome to MY Tutor</h3>
      <img
          src="../assets/welcome.png"
          alt="MYTutor Logo"
          width="300"
        />
    </div>
    
  </body>
</html>
