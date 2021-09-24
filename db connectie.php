<?php
$con = mysqli_connect("localhost","root","","login_db");

//Dit checkt de connetie
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
}

//Database connectie voor video's

$con = mysqli_connect('localhost','root','','login_db')
?>