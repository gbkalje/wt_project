<?php

$db = mysqli_connect("localhost","root","","hospital");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>