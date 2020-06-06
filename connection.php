<?php
$conn=@mysqli_connect('localhost','root','','bakery') or die (@mysqli_error());
if (!$conn) 
{ 
    die("connect error: " . mysqli_connect_error()); 
} 
?>