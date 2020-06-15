<?php


$name=$_POST['name'];

$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

$conn= mysqli_connect('localhost','root','','sankalpa');
    
$sql=mysqli_query($conn,"insert into praveen(name,email,number,message) values('$name','$email','$number','$message')");

if($sql)
{
    echo "Registered Successfully!!!";
}
else
{
    echo "Try Again";
}
   
?>
