//==============================================Only 2 checkboxes available===============================
function onlyOneCheckBox1() {
	var checkboxgroup1 = document.getElementById('checkboxgroup1').getElementsByTagName("input");
	var limit = 2;
	for (var i = 0; i < checkboxgroup1.length; i++) {
		checkboxgroup1[i].onclick = function() {
			var checkedcount = 0;
			for (var i = 0; i < checkboxgroup1.length; i++) {
				checkedcount += (checkboxgroup1[i].checked) ? 1 : 0;
			}
			if (checkedcount > limit) {
				this.checked = false;
			}
		}
	}
	var checkboxgroup2 = document.getElementById('checkboxgroup2').getElementsByTagName("input");
	for (var i = 0; i < checkboxgroup2.length; i++) {
		checkboxgroup2[i].onclick = function() {
			var checkedcount = 0;
			for (var i = 0; i < checkboxgroup2.length; i++) {
				checkedcount += (checkboxgroup2[i].checked) ? 1 : 0;
			}
			if (checkedcount > limit) {
				this.checked = false;
			}
		}
	}
	var checkboxgroup3 = document.getElementById('checkboxgroup3').getElementsByTagName("input");
	for (var i = 0; i < checkboxgroup3.length; i++) {
		checkboxgroup3[i].onclick = function() {
			var checkedcount = 0;
			for (var i = 0; i < checkboxgroup3.length; i++) {
				checkedcount += (checkboxgroup3[i].checked) ? 1 : 0;
			}
			if (checkedcount > limit) {
				this.checked = false;
			}
		}
	}
}

//======================================Mobile-NavBar======================================
function mobileMenu() {
	var tmp = document.getElementById("mobileMenu");	
	if (tmp.style.display === "block") 
	{
		tmp.style.display = "none";
		document.getElementById("navBar").className="navbar1"
	}
	else {
		tmp.style.display = "block";
		document.getElementById("navBar").className="navbar2"
	}
}

//======================================Difficulties======================================
function easyButton() {
	document.getElementById("Easy").className="show"
	document.getElementById("Medium").className="hidden"
	document.getElementById("Hard").className="hidden"
}

function mediumButton() {
	document.getElementById("Easy").className="hidden"
	document.getElementById("Medium").className="show"
	document.getElementById("Hard").className="hidden"
}

function hardButton() {
	document.getElementById("Easy").className="hidden"
	document.getElementById("Medium").className="hidden"
	document.getElementById("Hard").className="show"
}

var score=0;
var count=0;
var count2=0;

/*==========================================================================Easy=======================================================================*/

function checkScore1(){

	score=0;
	count=0;
	count2=0;

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	today = yyyy + '-' + mm + '-' + dd;

	document.getElementById("popup-1").classList.toggle("active");

	//------------------------------One_choice--------------------------------------
	if(document.getElementById("Questions1Q1Ans1").checked){
		if(document.getElementById("Questions1Q1Ans1").value == document.getElementById("correct_answearQ1").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q1Ans2").checked){
		if(document.getElementById("Questions1Q1Ans2").value == document.getElementById("correct_answearQ1").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q1Ans3").checked){
		if(document.getElementById("Questions1Q1Ans3").value == document.getElementById("correct_answearQ1").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q1Ans4").checked){
		if(document.getElementById("Questions1Q1Ans4").value == document.getElementById("correct_answearQ1").value){
			score++;
		}
	}

	//---------------------------------True_false---------------------------------------
	if(document.getElementById("Questions2Q1Ans1_a").checked){
		if(document.getElementById("Questions2Q1Ans1_a").value == document.getElementById("answear_aQ1").value){
			score++;
		}
	}
	else if(document.getElementById("Questions2Q1Ans2_a").checked){
		if(document.getElementById("Questions2Q1Ans2_a").value == document.getElementById("answear_aQ1").value){
			score++;
		}
	}


	//---------------------------------True_false---------------------------------------
	if(document.getElementById("Questions2Q1Ans1_b").checked){
		if(document.getElementById("Questions2Q1Ans1_b").value == document.getElementById("answear_bQ1").value){
			score++;
		}
	}
	else if(document.getElementById("Questions2Q1Ans2_b").checked){
		if(document.getElementById("Questions2Q1Ans2_b").value == document.getElementById("answear_bQ1").value){
			score++;
		}
	}

	//------------------------------Multiple_choices--------------------------------------
	if(document.getElementById("check1_aQ1").checked){
		if(document.getElementById("correct_ans1Q1").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_bQ1").checked){
		if(document.getElementById("correct_ans2Q1").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_cQ1").checked){
		if(document.getElementById("correct_ans3Q1").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_dQ1").checked){
		if(document.getElementById("correct_ans4Q1").value="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("correct_ans1Q1").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans2Q1").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans3Q1").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans4Q1").value=="1") {
		count2++;
	}
	if(count==count2) {
		score++;
	}

	//---------------------------------Text_completion---------------------------------------
	if(document.getElementById("inputQ1").value.toUpperCase() == document.getElementById("answearQ1").value.toUpperCase()){
		score++;
	}
	document.getElementById("scoreText").value=score;
	document.getElementById("difficultyText").value="easy";
	document.getElementById("dateText").value=today;
	document.getElementById("score").innerHTML=score+"/5";
}

/*================================================================================Medium==============================================================================*/

function checkScore2(){

	score=0;
	count=0;
	count2=0;

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	today = yyyy + '-' + mm + '-' + dd;

	document.getElementById("popup-1").classList.toggle("active");

	//------------------------------One_choice--------------------------------------
	if(document.getElementById("Questions1Q2Ans1").checked){
		if(document.getElementById("Questions1Q2Ans1").value == document.getElementById("correct_answearQ2").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q2Ans2").checked){
		if(document.getElementById("Questions1Q2Ans2").value == document.getElementById("correct_answearQ2").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q2Ans3").checked){
		if(document.getElementById("Questions1Q2Ans3").value == document.getElementById("correct_answearQ2").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q2Ans4").checked){
		if(document.getElementById("Questions1Q2Ans4").value == document.getElementById("correct_answearQ2").value){
			score++;
		}
	}

	//---------------------------------True_false---------------------------------------
	if(document.getElementById("Questions2Q2Ans1_a").checked){
		if(document.getElementById("Questions2Q2Ans1_a").value == document.getElementById("answear_aQ2").value){
			score++;
		}
	}
	else if(document.getElementById("Questions2Q2Ans2_a").checked){
		if(document.getElementById("Questions2Q2Ans2_a").value == document.getElementById("answear_aQ2").value){
			score++;
		}
	}


	//---------------------------------True_false---------------------------------------
	if(document.getElementById("Questions2Q2Ans1_b").checked){
		if(document.getElementById("Questions2Q2Ans1_b").value == document.getElementById("answear_bQ2").value){
			score++;
		}
	}
	else if(document.getElementById("Questions2Q2Ans2_b").checked){
		if(document.getElementById("Questions2Q2Ans2_b").value == document.getElementById("answear_bQ2").value){
			score++;
		}
	}

	//------------------------------Multiple_choices--------------------------------------
	if(document.getElementById("check1_aQ2").checked){
		if(document.getElementById("correct_ans1Q2").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_bQ2").checked){
		if(document.getElementById("correct_ans2Q2").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_cQ2").checked){
		if(document.getElementById("correct_ans3Q2").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_dQ2").checked){
		if(document.getElementById("correct_ans4Q2").value="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("correct_ans1Q2").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans2Q2").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans3Q2").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans4Q2").value=="1") {
		count2++;
	}
	if(count==count2) {
		score++;
	}

	//---------------------------------Text_completion---------------------------------------
	if(document.getElementById("inputQ2").value.toUpperCase() == document.getElementById("answearQ2").value.toUpperCase()){
		score++;
	}
	document.getElementById("scoreText").value=score;
	document.getElementById("difficultyText").value="medium";
	document.getElementById("dateText").value=today;
	document.getElementById("score").innerHTML=score+"/5";
}


/*==================================================================================Hard==================================================================================*/

function checkScore3(){

	score=0;
	count=0;
	count2=0;

	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	today = yyyy + '-' + mm + '-' + dd;

	document.getElementById("popup-1").classList.toggle("active");

	//------------------------------One_choice--------------------------------------
	if(document.getElementById("Questions1Q3Ans1").checked){
		if(document.getElementById("Questions1Q3Ans1").value == document.getElementById("correct_answearQ3").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q3Ans2").checked){
		if(document.getElementById("Questions1Q3Ans2").value == document.getElementById("correct_answearQ1").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q3Ans3").checked){
		if(document.getElementById("Questions1Q3Ans3").value == document.getElementById("correct_answearQ3").value){
			score++;
		}
	}
	else if(document.getElementById("Questions1Q3Ans4").checked){
		if(document.getElementById("Questions1Q3Ans4").value == document.getElementById("correct_answearQ3").value){
			score++;
		}
	}

	//---------------------------------True_false---------------------------------------
	if(document.getElementById("Questions2Q3Ans1_a").checked){
		if(document.getElementById("Questions2Q3Ans1_a").value == document.getElementById("answear_aQ3").value){
			score++;
		}
	}
	else if(document.getElementById("Questions2Q3Ans2_a").checked){
		if(document.getElementById("Questions2Q3Ans2_a").value == document.getElementById("answear_aQ3").value){
			score++;
		}
	}


	//---------------------------------True_false---------------------------------------
	if(document.getElementById("Questions2Q3Ans1_b").checked){
		if(document.getElementById("Questions2Q3Ans1_b").value == document.getElementById("answear_bQ3").value){
			score++;
		}
	}
	else if(document.getElementById("Questions2Q3Ans2_b").checked){
		if(document.getElementById("Questions2Q3Ans2_b").value == document.getElementById("answear_bQ3").value){
			score++;
		}
	}

	//------------------------------Multiple_choices--------------------------------------
	if(document.getElementById("check1_aQ3").checked){
		if(document.getElementById("correct_ans1Q3").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_bQ3").checked){
		if(document.getElementById("correct_ans2Q3").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_cQ3").checked){
		if(document.getElementById("correct_ans3Q3").value=="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("check1_dQ3").checked){
		if(document.getElementById("correct_ans4Q3").value="1"){
			count++;
		}
		else {
			count--;
		}
	}
	if(document.getElementById("correct_ans1Q3").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans2Q3").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans3Q3").value=="1") {
		count2++;
	}
	if(document.getElementById("correct_ans4Q3").value=="1") {
		count2++;
	}
	if(count==count2) {
		score++;
	}

	//---------------------------------Text_completion---------------------------------------
	if(document.getElementById("inputQ3").value.toUpperCase() == document.getElementById("answearQ3").value.toUpperCase()){
		score++;
	}
	document.getElementById("scoreText").value=score;
	document.getElementById("difficultyText").value="hard";
	document.getElementById("dateText").value=today;
	document.getElementById("score").innerHTML=score+"/5";
}

//=======================================================Score-Popup================================================
function closePopup(){
	document.getElementById("popup-1").classList.toggle("active");
}