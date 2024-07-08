<?php
/**var_dump($_POST);**/
    require "dbcon.php";
/** to make it more secure  */
  $username= $_POST["username"];
  $password= $_POST["password"];
  $email= $_POST["email"];

  if($username==""|| $password=="" || $email=="" )
  {
    echo '<script> alert("Empty Feild") </script>';
    require "loginn.html"; /**from login.html */
  }
  /** check to see if its in the database or not  */
   else{
    $sql="select * from signup where username='$username' ";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    /**to check if there's a similar username in the database */
    if(mysqli_num_rows($result) >= 1)
    {
        echo '<script> alert("username already taken") </script>';
        require "loginn.html"; 
    }
    else{
        mysqli_query($db,"insert into signup (username, password, email) values ('$username','$password','$email') ");
        require "loginn.html";

    }    
   }
   mysqli_close($db);
?>