<?php
session_start();
require 'dbCon.php';

if(isset($_POST['save-student'])){
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$course = mysqli_real_escape_string($con, $_POST['course']);

$query = "INSERT INTO students (name,email,phone,course)VALUES
     ('$name','$email','$phone','$course')";

$query_run = mysqli_query($con,$query);
if($query_run){
    $_SESSION['message']="STUDENT CREATED SUCCEFULLY!!";
    header("Location: student-create.php");
    exit(0);
   }else
   {
    $_SESSION['message']="STUDENT NOT CREATED!!";
    header("Location: student-create.php");
    exit(0);
   }
}



?>