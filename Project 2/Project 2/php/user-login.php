<?php
session_start();
include("connection.php");
$_SESSION["role"] = "";

$username=$_GET['username'];
$password=$_GET['password'];


$message="";

if (!empty($username) && !empty($password) && !is_numeric($username)) {
    
    
    $query = "select * from users where username = '$username' and password ='$password';";
    $result = mysqli_query($con,$query);
    
    if (mysqli_num_rows($result) == 1) {
        
        $row = mysqli_fetch_assoc($result);
        
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $row['role'];
        $_SESSION["log_status"] = "loggedin";
        $message= "done";
                   
    }
    else {
        $message="Inavlid username or password";
    }
}
else {
   
    $message="Give username and password";
} 
echo  $message;
?>