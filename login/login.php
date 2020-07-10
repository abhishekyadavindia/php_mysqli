<?php
  session_start();
   if (isset($_SESSION['loggedin'])) {
     header("location: /php_video/login/welcome.php");
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

    <title>PHP Login System!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PHP Login System!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php_video/login/register.php">Register</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/php_video/login/login.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty(trim($email)) || empty(trim($password))) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error:</strong> Email or Password cannot be empty.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    else {
      $sql = "SELECT * FROM `register` WHERE `Email` = '$email'";
      $result = mysqli_query($conn, $sql);
      $result_check = mysqli_num_rows($result);
      if ($result_check == 1) {
        $password_fetch = mysqli_fetch_assoc($result);
        $password_check = $password_fetch['Password'];
        $password_verify = password_verify($password, $password_check);
        if ($password_verify) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        $_SESSION['email'] = $email;
        $_SESSION['loggedin'] = true;
        header("location: /php_video/login/welcome.php");
        }
        else {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error:</strong> Password is incorrect.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
      }
      else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> Your Account does not Exist. <a href="/php_video/login/register.php" class="alert-link">Please register here</a> first.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
    }
  }

?>
    <div class="container my-4">
    <h2>Please Enter here</h2>
    </div>
    <hr>
    <div class="container">
    <form action="/php_video/login/login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
