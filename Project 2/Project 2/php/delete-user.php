<?php
include("connection.php");

$sql = "DELETE FROM users WHERE username='" . $_GET["username"] . "'";
if (mysqli_query($con, $sql)) {
    header ("location: administrator.php");
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?> 