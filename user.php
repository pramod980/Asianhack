<?php
require_once("connection.php");
if(isset($_POST["submit"])){
   $name= $_POST["name"];
   $address= $_POST["address"];
   $contact= $_POST["contact"];
   $username= $_POST["email"];
   $password= $_POST["password"];
   $cpassword= $_POST["cpassword"];
    $sql="INSERT INTO `users` (`name`, `address`, `contact`, `email`, `password`, `cpassword`) VALUES ('$name','$address','$contact','$username','$password','$cpassword')";
    if(mysqli_query($conn,$sql)){
        header("location: login.php");
    }
    else{
        header("location: signup.php");
    }
}
else{
    header("location: signup.php");
}
?>