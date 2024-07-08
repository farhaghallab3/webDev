<?php
    $db = mysqli_connect("localhost", "root", "", "database");
if($db){
    print"Error-could not connect";
    exit;
}
else
print"success";

?>