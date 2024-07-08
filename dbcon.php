<?php
    //Connect to databse
    $db = mysqli_connect("localhost", "root", "", "bookstore");
if($db){
    print"Error-could not connect";
    exit;
}
else
print"success";
$username="toqaa";
$password="123456";
$email="toqa@gmail.com";
$query="INSERT INTO bookish(username,password,email)
VALUES('$username','$password','$.email')";
$result= mysqli_query($db,$query) or die("couldn't excute.");

?>