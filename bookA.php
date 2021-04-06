<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "hospital");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$time = mysqli_real_escape_string($link, $_REQUEST['time']);
$doctor = mysqli_real_escape_string($link, $_REQUEST['doct']);
$fees = mysqli_real_escape_string($link, $_REQUEST['fee']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['phone']);
 
// Attempt insert query execution
$sql = "INSERT INTO `appoint1`( `Name`, `email`, `date`,`time`, `dname`, `fees`, `mobile`) VALUES ('$name','$email','$date','$date','$doctor','$fees','$mobile')";
if(mysqli_query($link, $sql)){
    echo "Appointment Book successfully.";
    header('location:index1.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>