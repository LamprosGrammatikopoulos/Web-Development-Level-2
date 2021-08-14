<?php
    include_once 'connection.php';
    $multiple_choices = mysqli_query($con,"SELECT * FROM multiple_choices");
    $one_choice = mysqli_query($con,"SELECT * FROM one_choice");
    $text_completion = mysqli_query($con,"SELECT * FROM text_completion");
    $true_false = mysqli_query($con,"SELECT * FROM true_false");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale-1.0">
   <title>index</title>
   <link rel="stylesheet" type="text/css" href="../styles/moderator.css" />
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
    </style>
</head>
    <body>
      <!--===================================NavBar================================-->
      <div id="nav-placeholder">

    </div>
     <!--===================================Main================================-->
        <div class="col-12 col-s-12 row" >
            <!--=======================================Table-1====================================================-->
            <article>
            <b class="Type_of_array">Multiple choices</b>
                <table id="table1" >
                    <thead>
                        <tr >
                            <th  scope="col" class="hidden">Id</td>
                            <th  scope="col">Question</td>
                            <th  scope="col">Answear 1</td>
                            <th  scope="col">Answear 2</td>
                            <th  scope="col">Answear 3</td>
                            <th scope="col">Answear 4</td>
                            <th  scope="col">Correct answear 1</th>
                            <th  scope="col">Correct answear 2</th>
                            <th  scope="col">Correct answear 3</th>
                            <th  scope="col">Correct answear 4</th>
                            <th  scope="col">Difficulty</th>
                            <th  scope="col">On hold</th>
                        </tr>
                    </thead>
                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($multiple_choices)) {
                    ?>
                    <tr>
                        <td data-label="Id" class="hidden"><?php echo $row["id"]; ?></td>
                        <td data-label="Question"><?php echo $row["question"]; ?></td>
                        <td data-label="Answear 1"><?php echo $row["ans1"]; ?></td>
                        <td data-label="Answear 2"><?php echo $row["ans2"]; ?></td>
                        <td data-label="Answear 3"><?php echo $row["ans3"]; ?></td>
                        <td data-label="Answear 4"><?php echo $row["ans4"]; ?></td>
                        <td data-label="Correct answear 1"><?php echo $row["correct_ans1"]; ?></td>
                        <td data-label="Correct answear 2"><?php echo $row["correct_ans2"]; ?></td>
                        <td data-label="Correct answear 3"><?php echo $row["correct_ans3"]; ?></td>
                        <td data-label="Correct answear 4"><?php echo $row["correct_ans4"]; ?></td>
                        <td data-label="Difficulty1"><?php echo $row["difficulty"]; ?></td>
                        <td data-label="On hold"><?php echo $row["onhold"]; ?></td>
                        <td class="AcceptButton"><a href="accept-question.php?type=1&id=<?php echo $row["id"];?>">Accept</a></td>
                        <td class="EditButton"><a href="#" onclick="togglePopup1();">Edit</a></td>
                        <td class="DeleteButton"><a href="delete-question.php?type=1&id=<?php echo $row["id"];?>">Delete</a></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                    <!--==========================================PopUp-1======================================================-->
                    <div class="line"></div>
                    <div class="popup" id="popup-1">
                        <div class="overlay"></div>
                        <div class="content">
                        
                            <form id="form1" class="col-5 col-s-7 row" action="edit-question.php?type=1" method="post">

                            <div style="display: grid;grid-template-columns: repeat(1,1fr); grid-column-gap: 5px;">
                               
                                <label class="hidden" for="id1"><b>Id</b></label>
                                <input class="hidden" type="text" name="id1" id="id1">
                        
                                <p><b>Question</b></p>
                                <input type="text" name="question1" id="question1">

                                <p><b>Answear 1</b></p>
                                <input type="text" name="ans1_a" id="ans1_a">

                                <p><b>Answear 2</b></p>
                                <input type="text" name="ans1_b" id="ans1_b">

                                 <p><b>Answear 3</b></p>
                                <input type="text" name="ans1_c" id="ans1_c">

                                <p><b>Answear 4</b></p>
                                <input type="text" name="ans1_d" id="ans1_d">

                                <p><b>Correct answear 1</b></p>
                                <input type="text" name="correct_ans1_a" id="correct_ans1_a">

                                <p><b>Correct answear 2</b></p>
                                <input type="text" name="correct_ans1_b" id="correct_ans1_b">

                                <p><b>Correct answear 3</b></p>
                                <input type="text" name="correct_ans1_c" id="correct_ans1_c">

                                <p><b>Correct answear 4</b></p>
                                <input type="text" name="correct_ans1_d" id="correct_ans1_d">

                                <p><b>Difficulty</b></p>
                                <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                                    <p><b>Easy</b></p>
                                    <p><b>Medium</b></p>
                                    <p><b>Hard</b></p>
                                    <input type="radio" name="difficulty1" id="Easy1" value="easy" >
                                    <input type="radio" name="difficulty1" id="Medium1" value="medium">
                                    <input type="radio" name="difficulty1" id="Hard1" value="hard">
                                </div>

                                <button class="btn btn-white-reload btn-animation-1-reload" onclick="togglePopup1()" type="submit" value="Edit">Edit</button>
                                
                                <a onclick="togglePopup1()" href="#">Close</a>

                            </div>    
                            </form>
                        </div>
                    </div>
                </table>
            </article>




            <!--=======================================Table-2====================================================-->
            <article>
                <b class="Type_of_array">One choice</b>
                <table id="table2" >
                <thead>
                    <tr>
                        <th scope="col" class="hidden">Id</th>
                        <th scope="col">Question</th>
                        <th scope="col">Answear 1</th>
                        <th scope="col">Answear 2</th>
                        <th scope="col">Answear 3</th>
                        <th scope="col">Answear 4</th>
                        <th scope="col">Correct answear</th>
                        <th scope="col">Difficulty</th>
                        <th scope="col">On hold</th>
                    </tr>
                    </thead>
                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($one_choice)) {
                    ?>
                    <tr>
                        <td data-label="Id" class="hidden"><?php echo $row["id"]; ?></td>
                        <td data-label="Question"><?php echo $row["question"]; ?></td>
                        <td data-label="Answear 1"><?php echo $row["ans1"]; ?></td>
                        <td data-label="Answear 2"><?php echo $row["ans2"]; ?></td>
                        <td data-label="Answear 3"><?php echo $row["ans3"]; ?></td>
                        <td data-label="Answear 4"><?php echo $row["ans4"]; ?></td>
                        <td data-label="Correct answear"><?php echo $row["correct_answear"]; ?></td>
                        <td data-label="Difficulty"><?php echo $row["difficulty"]; ?></td>
                        <td data-label="On hold"><?php echo $row["onhold"]; ?></td>
                        <td class="AcceptButton"><a href="accept-question.php?type=2&id=<?php echo $row["id"];?>">Accept</a></td>
                        <td class="EditButton"><a href="#" onclick="togglePopup2()">Edit</a></td>
                        <td class="DeleteButton"><a href="delete-question.php?type=2&id=<?php echo $row["id"];?>">Delete</a></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                    <!--==========================================PopUp-2======================================================-->
                    <div class="line"></div>
                    <div class="popup" id="popup-2">
                        <div class="overlay"></div>
                        <div class="content">
                            <form class="col-5 col-s-7 row" action="edit-question.php?type=2" method="post">

                            <div style="display: grid;grid-template-columns: repeat(1,1fr); grid-column-gap: 5px;">
                                <label class="hidden" for="id2"><b>Id</b></label>
                                <input class="hidden" type="text" name="id2" id="id2">

                                <label for="question2"><b>Question</b></label>
                                <input type="text" name="question2" id="question2">

                                <label for="ans2_a"><b>Answear 1</b></label>
                                <input type="text" name="ans2_a" id="ans2_a">

                                <label for="ans2_b"><b>Answear 2</b></label>
                                <input type="text" name="ans2_b" id="ans2_b">

                                <label for="ans2_c"><b>Answear 3</b></label>
                                <input type="text" name="ans2_c" id="ans2_c">

                                <label for="ans2_d"><b>Answear 4</b></label>
                                <input type="text" name="ans2_d" id="ans2_d">

                                <label for="correct_answear"><b>Correct answear</b></label>
                                <input type="text" name="correct_answear" id="correct_answear">

                                <p><b>Difficulty</b></p>
                                <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                                    <p><b>Easy</b></p>
                                    <p><b>Medium</b></p>
                                    <p><b>Hard</b></p>
                                    <input type="radio" name="difficulty2" id="Easy2" value="easy" >
                                    <input type="radio" name="difficulty2" id="Medium2" value="medium">
                                    <input type="radio" name="difficulty2" id="Hard2" value="hard">
                                </div>

                                <button class="btn btn-white-reload btn-animation-1-reload" onclick="togglePopup2()" type="submit" value="Edit">Edit</button>
                                
                                <a onclick="togglePopup2()" href="#">Close</a>
                            </div>    
                            </form>   
                        </div>
                    </div>
                </table>
            </article>




            <!--=======================================Table-3====================================================-->
            <article>
                <b class="Type_of_array">Text completion</b>
                <table id="table3" >
                    <thead>
                        <tr>
                            <th  scope="col" class="hidden">id</th>   
                            <th  scope="col">Question</th>
                            <th  scope="col">Answear</th>
                            <th  scope="col">Difficulty</th>
                            <th  scope="col">On hold</th>
                        </tr>
                    </thead>
                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($text_completion)) {
                    ?>
                    <tr>
                        <td data-label="id" class="hidden" ><?php echo $row["id"]; ?></td>
                        <td data-label="Question"><?php echo $row["question"]; ?></td>
                        <td data-label="Answear"><?php echo $row["answear"]; ?></td>
                        <td data-label="Difficulty"><?php echo $row["difficulty"]; ?></td>
                        <td data-label="On hold"><?php echo $row["onhold"]; ?></td>
                        <td class="AcceptButton"><a href="accept-question.php?type=3&id=<?php echo $row["id"];?>">Accept</a></td>
                        <td class="EditButton"><a href="#" onclick="togglePopup3()">Edit</a></td>
                        <td class="DeleteButton"><a href="delete-question.php?type=3&id=<?php echo $row["id"];?>">Delete</a></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                    <!--==========================================PopUp-3======================================================-->
                    <div class="line"></div>
                        <div class="popup" id="popup-3">
                            <div class="overlay"></div>
                            <div class="content">

                                <form class="col-5 col-s-7 row" action="edit-question.php?type=3" method="post">
                                    <div style="display: grid;grid-template-columns: repeat(1,1fr); grid-column-gap: 5px;">

                                        <label class="hidden" for="id3"><b>Id</b></label>
                                        <input class="hidden" type="text" name="id3" id="id3">
                                
                                        <label for="question3"><b>Question</b></label>
                                        <input type="text" name="question3" id="question3">

                                        <label for="answear3"><b>Answear</b></label>
                                        <input type="text" name="answear3" id="answear3">

                                        <p><b>Difficulty</b></p>
                                        <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                                            <p><b>Easy</b></p>
                                            <p><b>Medium</b></p>
                                            <p><b>Hard</b></p>
                                            <input type="radio" name="difficulty3" id="Easy3" value="easy" >
                                            <input type="radio" name="difficulty3" id="Medium3" value="medium">
                                            <input type="radio" name="difficulty3" id="Hard3" value="hard">
                                        </div>

                                        <button class="btn btn-white-reload btn-animation-1-reload" onclick="togglePopup3()" type="submit" value="Edit">Edit</button>

                                        <a onclick="togglePopup3()" href="#">Close</a>

                                    </div>

                                </form>    
                            </div>
                        </div>
                </table>
            </article>




            <!--=======================================Table-4====================================================-->
            <article>
            <b class="Type_of_array">True false</b>
                <table id="table4" >
                    <thead>
                        <tr>
                            <th  scope="col" class="hidden" >id</th>
                            <th  scope="col">Question</th>
                            <th  scope="col">Answear</th>
                            <th  scope="col">Difficulty</th>
                            <th  scope="col">On hold</th>
                        </tr>
                    </thead>
                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($true_false)) {
                    ?>
                    <tr>
                        <td data-label="id"class="hidden"><?php echo $row["id"]; ?></td>
                        <td data-label="Question"><?php echo $row["question"]; ?></td>
                        <td data-label="Answear"><?php echo $row["answear"]; ?></td>
                        <td data-label="Difficulty"><?php echo $row["difficulty"]; ?></td>
                        <td data-label="On hold"><?php echo $row["onhold"]; ?></td>
                        <td class="AcceptButton"><a href="accept-question.php?type=4&id=<?php echo $row["id"]; ?>">Accept</a></td>
                        <td class="EditButton"><a href="#" onclick="togglePopup4()">Edit</a></td>
                        <td class="DeleteButton"><a href="delete-question.php?type=4&id=<?php echo $row["id"]; ?>">Delete</a></td>
                    </tr>
                    <?php
                        $i++;
                        }
                    ?>
                    <!--==========================================PopUp-4======================================================-->
                    <div class="line"></div>
                        <div class="popup" id="popup-4">
                            <div class="overlay"></div>
                            <div class="content">
                        
                                <form class="col-5 col-s-7 row" action="edit-question.php?type=4" method="post">
                                    <div style="display: grid;grid-template-columns: repeat(1,1fr); grid-column-gap: 5px;">
                                        <label class="hidden" for="id4"><b>Id</b></label>
                                        <input class="hidden" type="text" name="id4" id="id4">

                                        <label for="question4"><b>Question</b></label>
                                        <input type="text" name="question4" id="question4">

                                        <label for="answear4"><b>Answear</b></label>
                                        <input type="text" name="answear4" id="answear4">

                                        <p><b>Difficulty</b></p>
                                        <div style="display: grid;grid-template-columns: repeat(3,1fr); grid-column-gap: 5px;">
                                            <p><b>Easy</b></p>
                                            <p><b>Medium</b></p>
                                            <p><b>Hard</b></p>
                                            <input type="radio" name="difficulty4" id="Easy4" value="easy" >
                                            <input type="radio" name="difficulty4" id="Medium4" value="medium">
                                            <input type="radio" name="difficulty4" id="Hard4" value="hard">
                                        </div>

                                        <button class="btn btn-white-reload btn-animation-1-reload" onclick="togglePopup4()" type="submit" value="Edit">Edit</button>

                                        <a onclick="togglePopup4()" href="#">Close</a>
                                    </div>
                                </form>    
                            </div>
                        </div>
                </table>
            </article>
        </div>


        <script src="scripts/drop_down_menu.js"></script>
        <script>
            function togglePopup1() {
                document.getElementById("popup-1").classList.toggle("active");
            }
            function togglePopup2() {
                document.getElementById("popup-2").classList.toggle("active");
            }
            function togglePopup3() {
                document.getElementById("popup-3").classList.toggle("active");
            }
            function togglePopup4() {
                document.getElementById("popup-4").classList.toggle("active");
            }
            
            var table = document.getElementById("table1");
            for (var i=0; i<table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    document.getElementById("id1").value = this.cells[0].innerHTML;
                    document.getElementById("question1").value = this.cells[1].innerHTML;
                    document.getElementById("ans1_a").value = this.cells[2].innerHTML;
                    document.getElementById("ans1_b").value = this.cells[3].innerHTML;
                    document.getElementById("ans1_c").value = this.cells[4].innerHTML;
                    document.getElementById("ans1_d").value = this.cells[5].innerHTML;
                    document.getElementById("correct_ans1_a").value = this.cells[6].innerHTML;
                    document.getElementById("correct_ans1_b").value = this.cells[7].innerHTML;
                    document.getElementById("correct_ans1_c").value = this.cells[8].innerHTML;
                    document.getElementById("correct_ans1_d").value = this.cells[9].innerHTML;

                    if(this.cells[10].innerHTML=="easy"){
                        var radiobtn= document.getElementById("Easy1");
                        radiobtn.checked = true;

                    }else if(this.cells[10].innerHTML=="medium"){
                        var radiobtn= document.getElementById("Medium1");
                        radiobtn.checked = true;            
                    }else{
                        var radiobtn= document.getElementById("Hard1");
                        radiobtn.checked = true;            
                    }
                }
            }
            
            
            var table = document.getElementById("table2");
            for (var i=0; i<table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    document.getElementById("id2").value = this.cells[0].innerHTML;
                    document.getElementById("question2").value = this.cells[1].innerHTML;
                    document.getElementById("ans2_a").value = this.cells[2].innerHTML;
                    document.getElementById("ans2_b").value = this.cells[3].innerHTML;
                    document.getElementById("ans2_c").value = this.cells[4].innerHTML;
                    document.getElementById("ans2_d").value = this.cells[5].innerHTML;
                    document.getElementById("correct_answear").value = this.cells[6].innerHTML;

                    if(this.cells[7].innerHTML=="easy"){
                        var radiobtn= document.getElementById("Easy2");
                        radiobtn.checked = true;

                    }else if(this.cells[7].innerHTML=="medium"){
                        var radiobtn= document.getElementById("Medium2");
                        radiobtn.checked = true;            
                    }else{
                        var radiobtn= document.getElementById("Hard2");
                        radiobtn.checked = true;            
                    }
                }
            }
            
            
            var table = document.getElementById("table3");
            for (var i=0; i<table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    document.getElementById("id3").value = this.cells[0].innerHTML;
                    document.getElementById("question3").value = this.cells[1].innerHTML;
                    document.getElementById("answear3").value = this.cells[2].innerHTML;

                    if(this.cells[3].innerHTML=="easy"){
                        var radiobtn= document.getElementById("Easy3");
                        radiobtn.checked = true;

                    }else if(this.cells[3].innerHTML=="medium"){
                        var radiobtn= document.getElementById("Medium3");
                        radiobtn.checked = true;            
                    }else{
                        var radiobtn= document.getElementById("Hard3");
                        radiobtn.checked = true;            
                    }
                }
            }
            
            
            var table = document.getElementById("table4");
            for (var i=0; i<table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    document.getElementById("id4").value = this.cells[0].innerHTML;
                    document.getElementById("question4").value = this.cells[1].innerHTML;
                    document.getElementById("answear4").value = this.cells[2].innerHTML;

                    if(this.cells[3].innerHTML=="easy"){
                        var radiobtn= document.getElementById("Easy4");
                        radiobtn.checked = true;

                    }else if(this.cells[3].innerHTML=="medium"){
                        var radiobtn= document.getElementById("Medium4");
                        radiobtn.checked = true;            
                    }else{
                        var radiobtn= document.getElementById("Hard4");
                        radiobtn.checked = true;            
                    }
                }
            }
               
           
        </script>

    </body>
</html>
