<?php
include_once 'connection.php';
$type= $_GET["type"];

session_start();

if($type=="updateProfile"){

    $username = $_POST['username'];
    $destination = "../media/";

    if($_POST["password1"] != $_POST["password2"]){
        $_SESSION["PasswordMessage"]="Error";
        header ("location: user.php");
    }
    else{
        if (!empty($_FILES)) {
            $destination .= $username . "-"; //adding the username infront of the photo name incase a user uploads a photo with the same name of another user's photo
            $destination .= $_FILES["photo"]["name"];
            $filename = $_FILES["photo"]["tmp_name"];
        }
        if(is_file($filename)) {
            move_uploaded_file($filename, $destination);
            $sql = "UPDATE users SET name='".$_POST["name"]."',lastname='".$_POST["lastname"]."',date='".$_POST["date"]."',sex='".$_POST["sex"]."' ,password='".$_POST["password1"]."',email='".$_POST["email"]."',photo='".$destination."' WHERE id='". $_POST["id0"]."';";
        }
        else{
            $sql = "UPDATE users SET name='".$_POST["name"]."',lastname='".$_POST["lastname"]."',date='".$_POST["date"]."',sex='".$_POST["sex"]."' ,password='".$_POST["password1"]."',email='".$_POST["email"]."' WHERE id='". $_POST["id0"]."';";
        }
        if (mysqli_query($con, $sql)) {
           header ("location: user.php");
        } else {
            echo "Error updating profile: " . mysqli_error($con);
        }
        unset( $_SESSION["PasswordMessage"]);
    }
}


/*===============================Adding-Questions=====================-*/
/*------------Type=1---------------*/
if($type=="addQuestion1"){

    if(isset($_POST['correct_answear1_a'])){
        $correct_answear1=1;
    }
    else{
        $correct_answear1=0;
    }

    if(isset($_POST['correct_answear1_b'])){
        $correct_answear2=1;
    }else{
        $correct_answear2=0;
    }

    if(isset($_POST['correct_answear1_c'])){
        $correct_answear3=1;
    }else{
        $correct_answear3=0;
    }

    if(isset($_POST['correct_answear1_d'])){
        $correct_answear4=1;
    }else{
        $correct_answear4=0;
    }

    $sql = "INSERT INTO multiple_choices (question,ans1,ans2,ans3,ans4,correct_ans1,correct_ans2,correct_ans3,correct_ans4,difficulty,onhold)  VALUES ('".$_POST["question1"]."','".$_POST["answear1"]."','".$_POST["answear2"]."','".$_POST["answear3"]."' ,'".$_POST["answear4"]."',$correct_answear1,$correct_answear2,$correct_answear3,$correct_answear4,'".$_POST['difficulty1']."',1) ;";

    if (mysqli_query($con, $sql)) {
        header ("location: user.php");
    } else {
        echo "Error adding question: " . mysqli_error($con);
    }
}

/*------------Type=2---------------*/
if($type=="addQuestion2"){
    
    $sql = "INSERT INTO one_choice (question,ans1,ans2,ans3,ans4,correct_answear,difficulty,onhold)  VALUES ('".$_POST["question2"]."','".$_POST["answear_1"]."','".$_POST["answear_2"]."','".$_POST["answear_3"]."' ,'".$_POST["answear_4"]."','".$_POST["correct_answear2"]."','".$_POST['difficulty2']."',1) ;";
    
    if (mysqli_query($con, $sql)) {
        header ("location: user.php");
    } else {
        echo "Error adding question: " . mysqli_error($con);
    }
}
/*--------------Type-3----------------*/
if($type=="addQuestion3"){

    $sql = "INSERT INTO text_completion (question,answear,difficulty,onhold)  VALUES('".$_POST["question3"]."' ,'".$_POST["answear"]."','".$_POST['difficulty3']."',1)    ;";

    if (mysqli_query($con, $sql) ) {
        header ("location: user.php");
    } else {
        echo "Error adding question: " . mysqli_error($con);
    }
}
/*---------------Type-4------------------- */
if($type=="addQuestion4"){

    $sql = "INSERT INTO true_false (question) VALUES('".$_POST["question4"]."')   ;";

    if($_POST['answear_t_f'] == "True"){
        $correct_answear4=1;
    }    
    else {
        $correct_answear4=0;
    }

    $sql = "INSERT INTO true_false (question,answear,difficulty,onhold) VALUES('".$_POST["question4"]."',".  $correct_answear4.",'".$_POST['difficulty4']."', 1 )   ;";
    if (mysqli_query($con, $sql) ) {
        header ("location: user.php");
    } else {
        echo "Error adding question: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>