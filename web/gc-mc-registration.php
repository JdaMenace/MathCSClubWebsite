<?php
    $title = "SU Math/CS Club Registration";
    include("includes/header.html");
    include("includes/sidenav.html");
    include("includes/topnav.php");
require_once('classes/registration-gc-mc.php');
    $gc = new gullcode();
    $mc = new math_challenge();
?>

<head>
	<title>Math CS Club - GullCode/Math Challenge Registration</title>
	  <link rel="stylesheet" href="css/forms.css"/>
	  <link rel="stylesheet" href="css/gc-mc-registration.css">

</head>

<body class="gc-mc-background">
<div class="container">
<br><br><br>
  
<!-- Begin Tabs navigation -->
<ul class = "tab">

  <a href="javascript:void(0)"  onclick="openTab(event,'About Me')" id="defaultOpen"></a>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'Math-Challenge')">
  <h1>Math Challenge</h1></a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openTab(event, 'GullCode')">
  <h1>GullCode</h1></a></li>
</ul>

<div id="About Me" class="tabcontent">
         <center><strong> Select Competition Link Above </strong> </center>
      </div>
<!--Math Challenge Tab Content-->
<?php 
if($login->isUserLoggedIn()) {
    $user = Utils::getCurrentUser();

        $members = $db->get("math_challenge_users_on_teams");
        $check = 0 ;
        foreach ($members as $member) {
            if($member['id'] == $user['id']) {
                $check = 1;
            }

        }
        if($check == 1) {
            echo("<div id='Math-Challenge' class='tabcontent'>
              <p class='center' style='color:red'><img src='images/message-icons/error.gif' width='50'style='float: left; margin: -.25em .5em 2em 2em '><span><b>You have already registered for Math Challenge.<br>Check your profile for more info</b></p>
              </div>");
        }
        else{
          ?>
<div id="Math-Challenge" class="tabcontent">
<left><strong><u>Sign up Form</u></strong></left>
 
	<form method="post">
		<p class="message">Register As:</p>
		<select id="registert-as" name="registert-as" required>
	    	
		    <option value="0">Free Agent</option>
		    <option value="1">Team</option>
    	
		</select>
	
	<div id="team">
        <input type="text" placeholder="Team Name" name="team-name" />
    </div>
	 <p class="message">Highest Computer Science Course Taken(Select One):</p>
		<select  name="ccourse">
			<optgroup label="Choose Highest Computer Science Course Taken">
	  			<option value="0">COSC 117 Programming Fundamentals</option>
	  			<option value="1">COSC 120 Computer Science I</option>
	  			<option value="2">COSC 220 Computer Science II</option>
	  			<option value="3">COSC 320 Advanced Data Structures And Algorithim Analysis</option>
	  			<option value="4">COSC 350 Systems Software</option>
	  			<option value="5">COSC 420 High Performance Computing</option>
  			</optgroup>
		</select>
<br>
	<p class="message">Highest Math Course Taken(Select One):</p>
		<select name="mcourse">
			<optgroup label="Choose Highest Math Course Taken">
	  			<option value="5">MATH 155 Modern Statistics With Computer Analysis</option>
	  			<option value="6">MATH 160 Introduction to Applied Calculus</option>
	  			<option value="7">MATH 201 Calculus I</option>
	  			<option value="1">MATH 202 Calculus II</option>
	  			<option value="8">MATH 213/214 Statistical Thinking</option>
	  			<option value="9">MATH 215 Intro to Financial Mathematics</option>
	  			<option value="10">MATH 300 Intro to Abstract Mathematics</option>
	  			<option value="11">MATH 306 Linear Algebra </option>
	  			<option value="12">MATH 310 Calculus III</option>
	  			<option value="13">MATH 311 Differential Equations</option>
	  			<option value="14">MATH 402 Theory of Numbers</option>
	  			<option value="15">MATH 406 Geometric Structures</option>
	  			<option value="16">MATH 413 Mathematical Statistics I</option>
	  			<option value="17">MATH 415 Actuarial and Financial Models</option>
	  			<option value="18">MATH 441 Abstract Algebra I</option>
	  			<option value="19">MATH 451 Analysis I</option>
  			</optgroup>
		</select>
<br>

	<p class="message">T-Shirt Size:</p>
		<select name="t-size">
			<optgroup label="Size">
	  			<option value="0">Small</option>
	  			<option value="1">Medium</option>
	  			<option value="2">Large</option>
	  			<option  value="3">X-Large</option>
	  			<option value="4">2X-Large</option>
  			</optgroup>
		</select>
       

         <input name="mc-register" type="submit" value="Register for Math Challenge" class="insert"/>


		</form>



</div><?php
        }
      }
          ?>
 
	

<!-- GullCode Tab Content-->
<?php 
if($login->isUserLoggedIn()) {
    $user = Utils::getCurrentUser();

        $members = $db->get("gullcode_users_on_teams");
        $check = 0 ;
        foreach ($members as $member) {
            if($member['id'] == $user['id']) {
                $check = 1;
            }

        }
        if($check == 1) {
             echo("<div id='GullCode' class='tabcontent'>
              <p class='center' style='color:red'><img src='images/message-icons/error.gif' width='50'style='float: left; margin: -.25em .5em 2em 2em '><span><b>You have already registered for GullCode.<br>Check your profile for more info</b></p>
              </div>");
        }
        else{
             ?>
<div id="GullCode" class="tabcontent">
<left><strong><u>Sign up Form</u></strong></left>
 
	<form method="post">
		<p class="message">Register As:</p>
		<select id="registert-as" name="registert-as" required>
	    	
		    <option value="0">Free Agent</option>
		    <option value="1">Team</option>
    	
		</select>
	
	<div id="team">
        <input type="text" placeholder="Team Name" name="team-name" />
    </div>
	 <p class="message">Highest Computer Science Course Taken(Select One):</p>
		<select  name="ccourse">
			<optgroup label="Choose Highest Computer Science Course Taken">
	  			<option value="0">COSC 117 Programming Fundamentals</option>
	  			<option value="1">COSC 120 Computer Science I</option>
	  			<option value="2">COSC 220 Computer Science II</option>
	  			<option value="3">COSC 320 Advanced Data Structures And Algorithim Analysis</option>
	  			<option value="4">COSC 350 Systems Software</option>
	  			<option value="5">COSC 420 High Performance Computing</option>
  			</optgroup>
		</select>
<br>
	<p class="message">Highest Math Course Taken(Select One):</p>
		<select name="mcourse">
			<optgroup label="Choose Highest Math Course Taken">
	  			<option value="5">MATH 155 Modern Statistics With Computer Analysis</option>
	  			<option value="6">MATH 160 Introduction to Applied Calculus</option>
	  			<option value="7">MATH 201 Calculus I</option>
	  			<option value="1">MATH 202 Calculus II</option>
	  			<option value="8">MATH 213/214 Statistical Thinking</option>
	  			<option value="9">MATH 215 Intro to Financial Mathematics</option>
	  			<option value="10">MATH 300 Intro to Abstract Mathematics</option>
	  			<option value="11">MATH 306 Linear Algebra </option>
	  			<option value="12">MATH 310 Calculus III</option>
	  			<option value="13">MATH 311 Differential Equations</option>
	  			<option value="14">MATH 402 Theory of Numbers</option>
	  			<option value="15">MATH 406 Geometric Structures</option>
	  			<option value="16">MATH 413 Mathematical Statistics I</option>
	  			<option value="17">MATH 415 Actuarial and Financial Models</option>
	  			<option value="18">MATH 441 Abstract Algebra I</option>
	  			<option value="19">MATH 451 Analysis I</option>
  			</optgroup>
		</select>
<br>

	<p class="message">T-Shirt Size:</p>
		<select name="t-size">
			<optgroup label="Size">
	  			<option value="0">Small</option>
	  			<option value="1">Medium</option>
	  			<option value="2">Large</option>
	  			<option  value="3">X-Large</option>
	  			<option value="4">2X-Large</option>
  			</optgroup>
		</select>

         <input name="gc-register" type="submit" value="Register for GullCode" class="insert"/>


		</form>



</div><?php
        }
  }
?>


<script>
document.getElementById("defaultOpen").click();

function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<script>

$(document).ready(function () {
    toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
    // this will call our toggleFields function every time the selection value of our other field changes
    $("#registert-as").change(function () {
        toggleFields();
    });

});
// this toggles the visibility of other server
function toggleFields() {

    if ($("#registert-as").val() == "1")
        $("#team").show();
    else
        $("#team").hide();
}
</script>

</div>



                                        
</body>
</html>