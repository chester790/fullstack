<?php
if (isset ($_GET['id']))
{
    $id = $_GET['id'];
    $q = "select name from vid where id=$id";
    $query = mysqli_query($con, $q);
    while($row = mysqli_fetch_assoc($query))
    {
        $name = $row('name');
    }
    echo "You are watching ".$name."<br>";
    echo "<video width='400' controls><source src='videos/".$name."' type='video/webm'></video>";
}
else
{
    echo "error";
}
?>