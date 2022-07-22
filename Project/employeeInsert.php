<?php

include "database.php";

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$contact=$_POST['phone'];
$email=$_POST['email'];

$sql="insert into employee(FirstName,LastName,ContacNumber,Email) values ('$fn','$ln','$contact','$email')";

$result=mysqli_query($con,$sql);

if($result){
    header("location: home.php");
}else{
    echo "error";
}

?>