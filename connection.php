<?php
$server='localhost';
$user='root';
$password='';
$dbname="asianhack";
$conn=mysqli_connect($server,$user,$password,$dbname);
if(!$conn)
{
    die("connection to the server is failed".mysqli_connect_error());
}
?>