<?php
require("connection.php");

if(!empty($_POST['submit']))
{
    $username=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from users where email='$username' and password= '$password' ";
    $result=mysqli_query($conn,$query);
    $user=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
    if ($count >0)
    {
        header("location:home.php");

        session_start();
        $_SESSION['Email']=$user['emial'];
        $_SESSION['Password']=$user['password'];
        
    }
    else
    {
    
        echo "<script type='text/jscript'>alert('Wrong Email or password.')</script>";

    }
}
else{

    echo "<script type='text/jscript'>alert('Wrong Email or password.')</script>";


}


?>