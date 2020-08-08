<?php
    // Connection with Database.
    require_once "config.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // For File Input Type you have to use super global $_FILES.
        $image = $_FILES['photo'];
        // print_r($image);
        // If you would run above command then it would give you associative array, which corresponds to $_FILES.
        // So it has name, tmp_name and error.
        $image_name = $image['name'];
        // echo $image_name;
        // You would be able to see your uploaded filename from above command with file type.
        // To Check File Extension use pathinfo()
        $ext = pathinfo($image_name, PATHINFO_EXTENSION);
        echo $ext;
        // Now you can use above function with conditionals and validate your filetype.
        $image_path = $image['tmp_name'];
        $image_error = $image['error'];
        if ($image_error) {
            echo 'Error: Image Error';
        }
        elseif ($ext != 'gif' || $ext!= 'png' || $ext!= 'jpg') {
            echo 'Please Enter Valid Picture Type (gif, png, jpg)';
        }
        else {
            // Now If you want to store file in its original extension in your server.
            $dest_path = 'uploaded_image/'.$image_name;
            $move = move_uploaded_file($image_path, $dest_path);
            // If you want to store BLOB in your Database use following command and include it to your database rows insertion query:
            // $image_store = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
            $sql = "INSERT INTO `image` (`image_location`, `date`) VALUES ('$dest_path', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result && $move) {
                echo 'Success';
            }
            else {
                echo 'Error';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Image Upload to Database</title>
  </head>
  <body>
    <div class="container">
        <h1>Please Choose Image to Upload on Database</h1>
    </div>
    <div class="form-file form-file-lg mb-3">
    <!-- If using Input Tag with file type, then you have to define form tag with action, method and enctype attribute -->
    <!-- If you want to upload photo to database you have to write enctype attribute as multipart/form-data -->
    <form action="file_extension_check.php" method="post" enctype="multipart/form-data">
    <input type="file" class="form-file-input" id="customFileLg" name="photo">
  <label class="form-file-label" for="customFileLg">
    <span class="form-file-text">Choose file... (Enter Only jpg, png, or gif. Any Other File Type is not Supported.)</span>
    <span class="form-file-button">Browse</span>
  </label>
  <hr>
  <center>
  <button class="btn btn-success" type="submit">Submit</button>
  </center>
    
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>