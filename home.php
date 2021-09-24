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
    <link rel='icon' href="img/icon.jpg"/>
</head>
<body>

    <a href="logout proces.php"><div style="float:right"><button>logout</button></div></a>

    <header>
        <h2 style="text-align: center">Music For You!</h2>
    </header>
    <nav>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="feature.php">Features</a></li>
            <li><a href="upload.php">Upload</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>

        <div class="welcome">
            <p>Press on a picture and watch the video!</p>
        </div>

        <div class="video1">
            <a href="https://music.youtube.com/watch?v=BFLNfXsfLhA&list=RDAMVMBFLNfXsfLhA">
                <img src="img/vid1.jpg" alt="video1" style="width:200px;height:100px;">
            </a>
        </div>
        <div class="video2">
            <a href="https://music.youtube.com/watch?v=y1xZ_kAhjMc&list=RDAMVMy1xZ_kAhjMc">
                <img src="img/vid2.jpg" alt="video2" style="width: 200px; height: 100px">
            </a>
        </div>
        <div class="video3">
            <a href="https://music.youtube.com/watch?v=UTHLKHL_whs&list=RDAMVMUTHLKHL_whs">
                <img src="img/vid3.jpg" alt="video3" style="width: 200px; height: 100px">
            </a>
        </div>

        <div class="videos">
            <a href="videos.php">
                <img src="img/videos.jpg" alt="videos" style="width: 200px; height: 100px">
            </a>

        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer>
            <div class="links">
                <a href="home.php">Home</a>
                <a href="contact.html">Contact</a>
                <br>
            </div>
        </footer>

    </body>
    </html>
