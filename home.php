<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Main Menu</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>

    <a href="logout proces.php"><div style="float:right"><button>logout</button></div></a>

    <header>
        <h2 style="text-align: center">Music For You!</h2>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="contact.html">Contact</a>
    </nav>

    <h1>Welcome at Music For You!</h1>
    <p>Press on a picture and watch the video!</p>

    <div class="video1">
        <a href="https://music.youtube.com/watch?v=BFLNfXsfLhA&list=RDAMVMBFLNfXsfLhA"><img src="img/vid1.jpg" alt="video1" style="width:150px;height:100px;">

    </div>

    <footer>
        <div class="links">
            <a href="home.php">Home</a>
            <a href="contact.html">Contact</a>
            <br>
        </div>
        <div id="copyright">
            <p>  Copyright © Chester790</p>
        </div>
    </footer>

</body>
</html>
