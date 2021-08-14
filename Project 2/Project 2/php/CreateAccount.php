<?php
    session_start();

    include("connection.php");

    $name = $_POST['name'];
    $lname = $_POST['lastname'];
    $date = $_POST['date'];
    $gender = $_POST['sex'];
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $password2 = $_POST['password1'];
    $email = $_POST['email'];

    $destination = "../media/";
    if (!empty($_FILES)) {
        $destination .= $username . "-";                    //adding the username infront of the photo name incase a user uploads a photo with the same name of another user's photo
        $destination .= $_FILES["uploadfile"]["name"];
        $filename = $_FILES["uploadfile"]["tmp_name"];
    }

    if (!empty($username) && !empty($password1) && !empty($password2) && !is_numeric($username) &&  $password1 === $password2) {
        
        $query = "select * from users where username = '$username' limit 1;";    
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) == 0) {
            if(is_file($filename)) {
                move_uploaded_file($filename, $destination);
                $query = "insert into users (name,lastname,date,sex,username,password,email,photo,role) values ('$name','$lname','$date','$gender','$username','$password1','$email','$destination','user')";
            }
            else{
                $destination = "../media/Default-user.png";
                $query = "insert into users (name,lastname,date,sex,username,password,email,photo,role) values ('$name','$lname','$date','$gender','$username','$password1','$email','$destination','user')"; 
            }    
            mysqli_query($con, $query);
            unset($_SESSION["SignUpErrors"]);
            header("location: ../login.html");
        }
        else {
            $_SESSION["SignUpErrors"]="This username already exists";
            header("location: ../sign-up.php");
        }
    }
    else {
        $_SESSION["SignUpErrors"]="Please fill the inputs correctly";
        header("location: ../sign-up.php");
    }

?>