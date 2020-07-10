<?php
// Author- Abhishek Yadav
// Please visit - https://abhishekyadavindia.blogspot.com
// Please also visit my youtube channel - https://www.youtube.com/channel/UCpWAaAz70iWB5h-BayZPqig
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location:/php_video/login/login.php");
        exit;
    }
    require_once "config.php";
?>
<!-- Here we are using Bootstrap -->
<!-- Author- Abhishek Yadav -->
<!-- Please visit - https://abhishekyadavindia.blogspot.com -->
<!-- Please also visit my youtube channel - https://www.youtube.com/channel/UCpWAaAz70iWB5h-BayZPqig -->
<!-- Source: https://getbootstrap.com -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome Page!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Welcome Page!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php_video/login/logout.php">Logout</a>
      </li>
    </ul>
    <div class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="nav-link"><?php echo "Welcome " . $_SESSION['email']; ?></a>
        </li>
    </div>
  </div>
</nav>
    <div class="container">
        <h2><?php echo "Welcome " . $_SESSION['email']; ?></h2>
        <hr>
        <p>You are logged in.</p>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
