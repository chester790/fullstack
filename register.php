<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<p style="color: white">Register!</p>

<form method="POST">
    <input type="text" id="user" name="username" placeholder="username"/><br
><br>
    <input type="text" id="pass" name="password" placeholder="password"/><br
><br>
    <button type="submit" id="btn" name="register" default>register</button><br
</form>

<?php
    if (!empty($_POST['username']) && $_POST['password']) {
        include("db connectie.php");
        $query = "INSERT INTO login (username, password) VALUES ('".$_POST['username']."', '".$_POST['password']."')";
        if (mysqli_query($con,$query)) {
            echo "<p style='color: white'>Account created!</p>";
        } else {
            echo mysqli_error($con);
        }
    }
?>

<br>

<a href="login.php" style="color: white;">Log in!</a>
</body>
</html>