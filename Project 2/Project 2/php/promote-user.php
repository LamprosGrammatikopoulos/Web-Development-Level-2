<?php
include_once 'connection.php';
$sql = "SELECT * FROM users WHERE username='".$_GET["username"]."'";
$result=mysqli_query($con, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    if($row["role"]=="user"){
        $sql = "UPDATE users SET role='moderator' WHERE username='".$_GET["username"]."';";
        $result=mysqli_query($con, $sql);
    }
    // if($row["role"]=="moderator"){
    //     $sql = "UPDATE users SET role='admin' WHERE username='".$_GET["username"]."';";
    //     $result=mysqli_query($con, $sql);
    // }
    // if($row["role"]=="admin"){
    //     $sql = "UPDATE users SET role='admin' WHERE username='".$_GET["username"]."';";
    //     $result=mysqli_query($con, $sql);
    // }
    header ("location: administrator.php");
} else {
    echo "Error changing record: " . mysqli_error($con);
}
mysqli_close($con);
?>