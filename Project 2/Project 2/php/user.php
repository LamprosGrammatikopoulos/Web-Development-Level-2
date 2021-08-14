<?php
    session_start();
    include("connection.php");
    $result = mysqli_query($con,"SELECT * FROM users WHERE username='". $_SESSION["username"]."';");
    $result1 = mysqli_query($con,"SELECT * FROM users_history WHERE username='". $_SESSION["username"]."';");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="../styles/user.css" />
    <link rel="stylesheet" type="text/css" href="../styles/navbar.css" />
    <script type="text/javascript" src="../scripts/quiz.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/popup_style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>   <!--Profile Icon-->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript">
                    $(function(){
                            $("#nav-placeholder").load("../navbar2.php");
                    });
    </script>
    <style>
            .hidden {
                display: none;
            }
            .show {
                display: block;
            }
    </style>
</head>
<body>

    <!--===================================NavBar================================-->
    <div id="nav-placeholder">

    </div>
    <!--===================================Main================================-->

    
      <!--  --------------------Show-quiz-scores----------------------------------->
<div class="row">
    <div class="col-12 col-s-12">
        <article>
            <table class="styled-table" >
                    <tr style="background: #2B7A78;">
                        <th >Username</th>
                        <th >Ημερομηνία</th>
                        <th >Δυσκολία</th>
                        <th >Score</th>
                    </tr>    
                <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result1)) {
                ?>
                <tr>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["difficulty"]; ?></td>
                    <td><?php echo $row["score"]."/5"; ?></td>
                </tr>
                <?php
                    $i++;
                    }
                ?>
            </table>
        </article>

    </div><!--col-12-->

    <!----------------------------Change-Profile---------------------------------------->
        <div class="col-12 col-s-12">
        
            <?php $row1 = mysqli_fetch_array($result)?>
            <div id="updateProfile" class="FormBox">

                <img id="showImage" src='<?php echo $row1["photo"]; ?>' >


                <form action="edit-user.php?type=updateProfile" method="post" enctype="multipart/form-data">

                    <label class="hidden" for="id0"><b>Id</b></label>
                    <input class="hidden" type="text" name="id0" id="id0" value=<?php echo $row1["id"]; ?>>
        
                    <p><b>Name</b></p>
                    <input type="text" name="name" id="name" value='<?php echo $row1["name"];?>' placeholder="Name" required>

                    <p><b>Last name</b></p>
                    <input type="text" name="lastname" id="lastname" value='<?php echo $row1["lastname"];?>' placeholder="Last name" required>

                    <p><b>Date</b></p>
                    <input type="date" name="date" id="date" value=<?php echo $row1["date"]; ?> required>

                    <p><b>Sex</b></p>
                    <div style="display: grid;grid-template-columns: repeat(2,1fr); grid-column-gap: 5px;">
                        <p><b>Female</b></p>
                        <p><b>Male</b></p>
                        <?php if($row1["sex"] == "female"){ ?>
                            <input type="radio" name="sex" value="female" checked>
                        <?php } else{ ?>
                            <input type="radio" name="sex" value="female" >
                        <?php } ?>

                        <?php if($row1["sex"] == "male"){ ?>
                            <input type="radio" name="sex" value="male" checked>
                        <?php } else{ ?>
                            <input type="radio" name="sex" value="male" >
                        <?php } ?>
                    </div>

                    <p><b>Username</b></p>
                    <input type="text" name="username" id="username" value='<?php echo $row1["username"]; ?>' readonly>

                    <p><b>Password</b></p>
                    <input type="password" name="password1" id="password1" value='<?php echo $row1["password"]; ?>' placeholder="Password" required> 

                    <p><b>Confirm Password</b></p>
                    <input type="password" name="password2" id="password2" value='<?php echo $row1["password"]; ?>' placeholder="Confirm Password" required> 

                    <p><b>Email</b></p>
                    <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,62}$" type="email" name="email" id="email" placeholder="Email" value=<?php echo $row1["email"]; ?> required>

                    <p><b>Photo</b></p>
                    <input type="file" id="img" name="photo" accept="image/jpeg,image/png,image/jpg">


                    <button class="btn btn-white btn-animation-1" type="submit" value="Edit Profile" onclick="CheckPasswords()">Submit</button>
                    
                    <?php if( isset($_SESSION["PasswordMessage"])){ ?>
                        <p class="warning"><b>Paswords must match</b></p>
                    <?php } ?>
                </form>  
            </div> 

        </div> <!--col-12 -->


  <!--------------------------------------------Add-Questions----------------------------------->



    <div class="col-12 col-s-12 ButtonsBox">
        <button class="dropdownButton1" onclick="myFunction1()">Multiple Choices</button>
        <div id="dropDown1" class="dropdown-container">
            <form action="edit-user.php?type=addQuestion1" method="post">

                <input class="hidden" type="text" name="id1" id="id1">

                <p><b>Question</b></p>
                <input type="text" name="question1" id="question1">

                <p><b>Answear 1</b></p>
                <input type="text" name="answear1" id="answear1">

                <p><b>Answear 2</b></p>
                <input type="text" name="answear2" id="answear2">

                <p><b>Answear 3</b></p>
                <input type="text" name="answear3" id="answear3">

                <p><b>Answear 4</b></p>
                <input type="text" name="answear4" id="answear4">

                <p><b>Correct answear</b></p>
                <div style="display: grid;grid-template-columns: repeat(4,1fr); grid-column-gap: 5px;">
                    <p><b>Answear 1</b></p>
                    <p><b>Answear 2</b></p>
                    <p><b>Answear 3</b></p>
                    <p><b>Answear 4</b></p>
                    <input type="checkbox" name="correct_answear1_a" value="correct_answear1">
                    <input type="checkbox" name="correct_answear1_b" value="correct_answear2">
                    <input type="checkbox" name="correct_answear1_c" value="correct_answear3">
                    <input type="checkbox" name="correct_answear1_d" value="correct_answear4">
                </div>

                <p style="margin-bottom: 15px;"><b>Difficulty</b></p>
                <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                    <p><b>Easy</b></p>
                    <p><b>Medium</b></p>
                    <p><b>Hard</b></p>
                    <input type="radio" name="difficulty1" value="easy" checked>
                    <input type="radio" name="difficulty1" value="medium">
                    <input type="radio" name="difficulty1" value="hard">
                </div>

                <button class="btn btn-white btn-animation-1" type="submit" value="Add question">Add</button>
            </form>  
        </div>
        <button class="dropdownButton2" onclick="myFunction2()">One Choice</button>
        <div id="dropDown2" class="dropdown-container">
            <form action="edit-user.php?type=addQuestion2" method="post">

                <label class="hidden" for="id2"><b>Id</b></label>
                <input class="hidden" type="text" name="id2" id="id2">

                <p><b>Question</b></p>
                <input type="text" name="question2" id="question2">

                <p><b>Answear 1</b></p>
                <input type="text" name="answear_1" id="answear_1">

                <p><b>Answear 2</b></p>
                <input type="text" name="answear_2" id="answear_2">

                <p><b>Answear 3</b></p>
                <input type="text" name="answear_3" id="answear_3">

                <p><b>Answear 4</b></p>
                <input type="text" name="answear_4" id="answear_4">

                <p><b>correct_answear</b></p>
                <input type="text" name="correct_answear2" id="correct_answear">

                <p><b>Difficulty</b></p>
                <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                    <p><b>Easy</b></p>
                    <p><b>Medium</b></p>
                    <p><b>Hard</b></p>
                    <input type="radio" name="difficulty2" value="easy" checked>
                    <input type="radio" name="difficulty2"  value="medium">
                    <input type="radio" name="difficulty2"   value="hard">
                </div>    

                <button class="btn btn-white btn-animation-1" type="submit" value="Add question">Add</button>
            </form> 
        </div>
        <button class="dropdownButton3" onclick="myFunction3()">Text Complition</button>
        <div id="dropDown3" class="dropdown-container">
            <form action="edit-user.php?type=addQuestion3" method="post">
                <label class="hidden" for="id3"><b>Id</b></label>
                <input class="hidden" type="text" name="id3" id="id3">

                <p><b>Question</b></p>
                <input type="text" name="question3" id="question3">

                <p><b>Answear</b></p>
                <input type="text" name="answear" id="answear">

                <p><b>Difficulty</b></p>
                <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                    <p><b>Easy</b></p>
                    <p><b>Medium</b></p>
                    <p><b>Hard</b></p>
                    <input type="radio" name="difficulty3" value="easy" checked>
                    <input type="radio" name="difficulty3" value="medium">
                    <input type="radio" name="difficulty3" value="hard">
                </div>    

                <button class="btn btn-white btn-animation-1" type="submit" value="Add question">Add</button>
            </form>  
        </div>
        <button class="dropdownButton4" onclick="myFunction4()">True/False</button>
        <div id="dropDown4" class="dropdown-container">
        <form action="edit-user.php?type=addQuestion4" method="post">
                <label class="hidden" for="id4"><b>Id</b></label>
                <input class="hidden" type="text" name="id4" id="id4">

                <p><b>Question</b></p>
                <input type="text" name="question4" id="question4">

                <p><b>Answear</b></p>
                <div style="display: grid;grid-template-columns: repeat(2,1fr); grid-column-gap: 5px;">
                    <p><b>True</b></p>
                    <p><b>False</b></p>
                    <input type="radio" name="answear_t_f"  value="True">
                    <input type="radio" name="answear_t_f"  value="False">
                </div>
                <p><b>Difficulty</b></p>
                <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                    <p><b>Easy</b></p>
                    <p><b>Medium</b></p>
                    <p><b>Hard</b></p>     
                    <input type="radio" name="difficulty4" value="easy" checked>
                    <input type="radio" name="difficulty4" value="medium">
                    <input type="radio" name="difficulty4" value="hard">
                </div>

                <button class="btn btn-white btn-animation-1" type="submit" value="Add question">Add</button>
            </form>  
        </div>

    </div><!-- col-12-->

</div><!--row-->
    <script>
        function myFunction1() {
            document.getElementById("dropDown1").classList.toggle("show");
        }
        function myFunction2() {
            document.getElementById("dropDown2").classList.toggle("show");
        }
        function myFunction3() {
            document.getElementById("dropDown3").classList.toggle("show");
        }
        function myFunction4() {
            document.getElementById("dropDown4").classList.toggle("show");
        }
        
        </script>
       
    </body>
</html>
