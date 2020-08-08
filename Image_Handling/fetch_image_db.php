<?php
    require_once "config.php";
    // For Displaying Images you can use path
    $sql = "SELECT * FROM `image`";
    $result = mysqli_query($conn, $sql);
    // $fetch = var_dump(mysqli_fetch_assoc($result));
    // echo $fetch;
    while ($row = mysqli_fetch_assoc($result)) {
        $row_path = $row['image_location'];
        echo '<img src="' . $row_path . '">';
    }
?>