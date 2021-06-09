<?php
session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'query');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];


$a = "SELECT * FROM `data`";
$b = mysqli_query($con,$a);
$c = mysqli_num_rows($b);

if($c == 1){
    echo "hai";
}
else{
$reg = "INSERT INTO `table`(`firstname`, `lastname`, `email`,`feedback`) VALUES ('$firstname','$lastname','$email','$feedback')";
mysqli_query($con,$reg);