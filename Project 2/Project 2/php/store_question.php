<?php 
    session_start();
    include_once 'connection.php';


    $sql = "INSERT INTO users_history (username,date,difficulty,score) VALUES ('".$_SESSION["username"]."', now(), '".$_POST["difficultyText"]."', ".$_POST["scoreText"]."); ";
    if (mysqli_query($con, $sql)) {
        header ("location: ../quiz.php");
    } else {
        echo "Error submitting quiz data: " . mysqli_error($con);
    }
    
    mysqli_close($con);
?>