<?php
include_once 'connection.php';
$type= $_GET["type"];

if($type==1){
    $sql = "UPDATE  multiple_choices SET onhold=0 WHERE id='". $_GET["id"]."';";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
else if($type==2){
    $sql = "UPDATE  one_choice SET onhold=0 WHERE id='". $_GET["id"]."';";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
else if($type==3){
    $sql = "UPDATE  text_completion SET onhold=0 WHERE id='". $_GET["id"]."';";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
else if($type==4){
    $sql = "UPDATE  true_false SET onhold=0 WHERE id='". $_GET["id"]."';";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>