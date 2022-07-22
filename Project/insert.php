<?php

include "database.php";

$un=$_POST['username'];
$pwd=$_POST['password'];
$repwd=$_POST['retype_password'];

$sql="insert into user(username,password,retypepassword) values ('$un','$pwd','$repwd')";

$result=mysqli_query($con,$sql);

if($result){
    header("location: index.php");
}else{
    echo "error";
}

?>