<?php
include_once 'connection.php';
$type= $_GET["type"];

if($type==1){

    $sql = "UPDATE  multiple_choices SET question='".$_POST["question1"]."',ans1='".$_POST["ans1_a"]."',ans2='".$_POST["ans1_b"]."',ans3='".$_POST["ans1_c"]."',ans4='".$_POST["ans1_d"]."' ,correct_ans1='".$_POST["correct_ans1_a"]."',correct_ans2='".$_POST["correct_ans1_b"]."',correct_ans3='".$_POST["correct_ans1_c"]."',correct_ans4='".$_POST["correct_ans1_d"]."' , difficulty='".$_POST["difficulty1"]."' WHERE id='". $_POST["id1"]."';";
   
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error editing record: " . mysqli_error($con);
    }
}
else if($type==2){
    
    $sql = "UPDATE  one_choice SET question='".$_POST["question2"]."', ans1='".$_POST["ans2_a"]."',ans2='".$_POST["ans2_b"]."',ans3='".$_POST["ans2_c"]."',ans4='".$_POST["ans2_d"]."',correct_answear='".$_POST["correct_answear"]."' , difficulty='".$_POST["difficulty2"]."' WHERE id='". $_POST["id2"]."';";
    
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error editing record: " . mysqli_error($con);
    }
}
else if($type==3){

    $sql = "UPDATE  text_completion SET question='".$_POST["question3"]."', answear='".$_POST["answear3"]."' , difficulty='".$_POST["difficulty3"]."' WHERE id='". $_POST["id3"]."';";
   
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error editing record: " . mysqli_error($con);
    }
}
else if($type==4){

    $sql = "UPDATE  true_false SET question='".$_POST["question4"]."', answear='".$_POST["answear4"]."' , difficulty ='".$_POST["difficulty4"]."' WHERE id='". $_POST["id4"]."';";
    
    if (mysqli_query($con, $sql)) {
        header ("location: moderator.php");
    } else {
        echo "Error editing record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>