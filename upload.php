<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Page</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="upload.css">
</head>
<body>

<header>
    <h2 style="text-align: center">Music For You!</h2>
</header>

<nav>
    <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="feature.html">Explanation</a></li>
        <li><a href="upload.php">Upload</a></li>
        <li><a href="video.php">Custom Video</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>

<form method="post" action="upload.php" enctype="multipart/form-data">

    <input type="file" name="file" accept="video/*">
    <input type="submit" name="upload" value="UPLOAD">

</form>

</body>
</html>

<?php

include ('db connectie.php');

if (!empty($_FILES['file']) && !empty($_POST['upload']))
 {
    $path = $_FILES['file']['name'];
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    if (move_uploaded_file($tmp, "videos/" . $name)) {

    }

    $sql = "INSERT INTO vid (name, path) VALUES ('" . $name . "','" . $path . "')";

    $res = mysqli_query($con, $sql);

if ($res) {
    echo "<h1>video inserted successfully</h1>";
} else {
    echo "Error: " . mysqli_error($con);
}}

function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
?>