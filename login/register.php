<?php
  require_once "config.php";
  session_start();
  if (isset($_SESSION['loggedin'])) {
    header("location: /php_video/login/welcome.php");
    exit;
  }
  ?>
<!-- Here we are using Bootstrap -->
<!-- Author- Abhishek Yadav -->
<!-- Please visit - https://abhishekyadavindia.blogspot.com -->
<!-- Please also visit my youtube channel - https://www.youtube.com/channel/UCpWAaAz70iWB5h-BayZPqig -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Registration Form using PHP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Register Using PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/php_video/login/login.php">Login</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/php_video/login/register.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  $address = $_POST['select'];
  if (empty(trim($name)) || empty(trim($email)) || empty(trim($address)) || empty(trim($password))) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error:</strong> Some of the fields are blank below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  else {
    // Error Checking for Password
    if (trim($password) != trim($cpassword)) {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error: </strong> Passwords should Match.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    }
    else if (strlen(trim($password)) < 5) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> Passwords should be more than five characters.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      else if (strlen(trim($password)) > 5){
        $sql = "SELECT * FROM `register` WHERE `Email` = '$email'";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($result);
        if ($check > 0) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error: </strong> Account with this Email already exists.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
        }
        else {
          // For Login System checking password using password_verify
          // $check_password = mysqli_fetch_assoc($result);
          // $check_password_true = $check_password['Password'];
          $password_hash = password_hash($password, PASSWORD_DEFAULT);
          $query = "INSERT INTO `register` (`Email`, `Password`, `Name`, `dt`, `Address`) VALUES ('$email', '$password_hash', '$name', CURRENT_TIMESTAMP, '$address')";
          $run = mysqli_query($conn, $query);
          if ($run) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Account Builded Successfully. <a href="/php_video/login/login.php" class="alert-link">Click here to Login.</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
      }
    }
  }

?>
    <div class="container my-4">
        <h2>Please Enter here</h2>
    </div>
    <hr>
    <div class="container">
    <form action="/php_video/login/register.php" method="post">
    <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter your Name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter your Email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Enter your Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="exampleFormControlInput1" placeholder="Confirm Password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Address</label>
    <!-- For select type sending to database you can use name attribute in select tag and value attribute in option tags -->
    <select class="form-control" id="exampleFormControlSelect1" name="select">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
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
