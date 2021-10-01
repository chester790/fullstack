<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Custom Video's</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="video.css">
</head>
<body>

<header>
    <h2 style="text-align: center">Music For You!</h2>
</header>

<nav>
    <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="feature.php">Features</a></li>
        <li><a href="upload.php">Upload</a></li>
        <li><a href="video.php">Custom Video</a></li>
        <li><a href="watch.php">Watch</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

include ('db connectie.php');

$q= "select * from vid";
$query = mysqli_query($con, $q);
while ($row=mysqli_fetch_assoc($query)) {
    $id = $row('id');
    $name = $row('name');
    echo "<a href ='watch.php?id=$id'>$name</a><br>";
}
?>

<footer>
    <div class="links">
        <a href="home.php">Home</a>
        <a href="video.php">Video's</a>
        <a href="upload.php">Upload</a>
        <a href="contact.html">Contact</a>
        <br>
    </div>
</footer>

</body>
</html>
