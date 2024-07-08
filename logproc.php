<?php
 
 require "dbcon.php";
 $mail=$_POST["mail"];
 $pass=$_POST["pass"];

$query="select * from signup where email='$mail' and password='$pass'";
$result=mysqli_query($db,$query);
if(mysqli_num_rows($result) >= 1)
{
   require "Bookish.html";
}
else
{
    echo '<script> alert("Invalid Email or password") </script>';
    require "login.html";
}
?>