<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Page</title>
</head>
<body>

<h1><a href="video.php">Video's</a></h1>

<form method="post" action="upload.php" enctype="multipart/form-data">

    <input type="file" name="file" accept="video/*">
    <input type="submit" name="upload" value="UPLOAD">

</form>

</body>
</html>

<?php

include ('db connectie.php');
print_r($_FILES);
if (!empty($_POST['file']) && !empty($_POST['upload']))
 {
    print_r($_FILES);
    $path = $_FILES['file']['name'];
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp, "videos/" . $name);

    $sql = "INSERT INTO vid (name, path) VALUES ('" . $name . "','" . $path . "')";

    $res = mysqli_query($con, $sql);

if ($res) {
    echo "<h1>video inserted successfully</h1>";
} else {
    echo "Error: " . mysqli_error($con);
}}


?>