<?php 
include_once 'connection.php';

    $query1 = "select * from  one_choice where difficulty='easy' AND onhold=0 ORDER BY rand() limit 1;" ;
    $result1 = mysqli_query($con, $query1);
    if (mysqli_num_rows($result1) === 1) {
        $row1 = mysqli_fetch_assoc($result1);
    } else {
        echo "Error fetching questions." . mysqli_error($con);
    }

    $query1 = "select * from  true_false where difficulty='easy' AND onhold=0 ORDER BY rand() limit 2;";
    $result2 = mysqli_query($con,$query1);
    if (mysqli_num_rows($result2) != 2) {
        echo "Error fetching questions." . mysqli_error($con);
    }

    $query1 = "select * from  multiple_choices where difficulty='easy' AND onhold=0 ORDER BY rand() limit 1;";
    $result3 = mysqli_query($con,$query1);
    if (mysqli_num_rows($result3) === 1) {
        $row3 = mysqli_fetch_assoc($result3);
    } else {
        echo "Error fetching questions." . mysqli_error($con);
    }


    $query1 = "select * from  text_completion where difficulty='easy' AND onhold=0 ORDER BY rand() limit 1;";
    $result4 = mysqli_query($con,$query1);
    if (mysqli_num_rows($result4) === 1) {
        $row4 = mysqli_fetch_assoc($result4);
    } else {
        echo "Error fetching questions: " . mysqli_error($con);
    }

    /*===============================================Medium============================================================ */

    $query2 = "select * from  one_choice where difficulty='medium' AND onhold=0 ORDER BY rand() limit 1;" ;
    $result5 = mysqli_query($con, $query2);
    if (mysqli_num_rows($result5) === 1) {
        $row5 = mysqli_fetch_assoc($result5);
    } else {
        echo "Error fetching questions." . mysqli_error($con);
    }


    $query2 = "select * from  true_false where difficulty='medium' AND onhold=0 ORDER BY rand() limit 2;";
    $result6 = mysqli_query($con,$query2);
    if (mysqli_num_rows($result6) != 2) {
        echo "Error fetching questions." . mysqli_error($con);
    }

    $query2 = "select * from  multiple_choices where difficulty='medium' AND onhold=0 ORDER BY rand() limit 1;";
    $result7 = mysqli_query($con,$query2);
    if (mysqli_num_rows($result7) === 1) {
        $row7 = mysqli_fetch_assoc($result7);
    } else {
        echo "Error fetching questions." . mysqli_error($con);
    }

    $query2 = "select * from  text_completion where difficulty='medium' AND onhold=0 ORDER BY rand() limit 1;";
    $result8 = mysqli_query($con,$query2);
    if (mysqli_num_rows($result8) === 1) {
        $row8 = mysqli_fetch_assoc($result8);
    } else {
        echo "Error fetching questions: " . mysqli_error($con);
    }


  /*===============================================Hard============================================================ */


    $query3 = "select * from  one_choice where difficulty='hard' AND onhold=0 ORDER BY rand() limit 1;" ;
    $result9 = mysqli_query($con, $query3);
    if (mysqli_num_rows($result9) === 1) {
        $row9 = mysqli_fetch_assoc($result9);
    } else {
        echo "Error fetching questions." . mysqli_error($con);
    }

    $query3 = "select * from  true_false where difficulty='hard' AND onhold=0 ORDER BY rand() limit 2;";
    $result10 = mysqli_query($con,$query3);
    if (mysqli_num_rows($result10) != 2) {
        echo "Error fetching questions." . mysqli_error($con);
    } 

    $query3 = "select * from  multiple_choices where difficulty='hard' AND onhold=0 ORDER BY rand() limit 1;";
    $result11 = mysqli_query($con,$query3);
    if (mysqli_num_rows($result11) === 1) {
        $row11 = mysqli_fetch_assoc($result11);
    } else {
        echo "Error fetching questions." . mysqli_error($con);
    }


    $query3 = "select * from  text_completion where difficulty='hard' AND onhold=0 ORDER BY rand() limit 1;";
    $result12 = mysqli_query($con,$query3);
    if (mysqli_num_rows($result12) === 1) {
        $row12 = mysqli_fetch_assoc($result12);
    } else {
        echo "Error fetching questions: " . mysqli_error($con);
    }



?> 