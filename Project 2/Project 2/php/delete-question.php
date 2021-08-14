<?php
include_once 'connection.php';
$type= $_GET["type"];

if($type==1){
    $sql = "DELETE FROM  multiple_choices WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
else if($type==2){
    $sql = "DELETE FROM one_choice WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
else if($type==3){
    $sql = "DELETE FROM text_completion WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
else if($type==4){
    $sql = "DELETE FROM true_false WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
mysqli_close($con);
?>