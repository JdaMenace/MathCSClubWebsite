<?php
    $title = "SU Math/CS Club Officers";
    include("includes/header.html");
    include("includes/sidenav.html");
    include("includes/topnav.php");
    require_once("includes/database.php");
?>

<head>
	<title>Math CS Club - Officers</title>
    <link rel="stylesheet" href="css/officers.css"/>
</head>

<body>

<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script type="text/javascript">
function toggleByID(IDName) {
    $("#default").hide();
    $(".bio").hide();
    $("#"+IDName).toggle();
    $('html, body').animate({ scrollTop: $('#officer-bio').offset().top }, 'slow');
}
</script>

<div id="main">

<div id="content">
<header class="banner">
    <h1>Meet Your Officers</h1>
</header>

<div class='circle-container'>
	<div class='groupPic'><img src="images/officers/officers3.jpg"></div>
    <?php
      	$positions = $db->get('officers');
      	foreach($positions as $pos) {
            echo '<div class="officer" id="'. $pos["position"] .'"> <img src="' . $pos["image"] . '" onclick="toggleByID(\''. $pos["position"] .'-bio\');"></div>';
    	  }
    ?>
</div>

<div id='info'>

<div id='officer-bio'>

    <div id='default'>
        <p>Click on an officer or advisor's picture to learn more about them</p>
    </div>

    <?php
        //officer bios
        $bios = $db->get('officers');
        foreach($bios as $bio) {
            echo '<div id=\'' . $bio["position"] .'-bio\' class=\'bio\'>';
            echo '<H2>' . $bio["name"] . '</H2>';
            echo '<H3>' . $bio["title"] . '</H3>';
            echo '<p>' . $bio["bio"] . '</p>';
            echo '</div>';
        }

        //club advisor bios
        $advisorBios = $db->get('club_advisors');
        foreach($advisorBios as $advisorBio) {
            echo '<div id=\'' . $advisorBio["position"] .'-bio\' class=\'bio\'>';
            echo '<H2>' . $advisorBio["name"] . '</H2>';
            echo '<p>' . $advisorBio["bio"] . '</p>';
            echo '</div>';
        }
    ?>
</div>

<!-- CLUB ADVISORS -->
<div id='advisors'>
<?php
        $advisors = $db->get('club_advisors');
        foreach($advisors as $advisor) {
            echo '<div id=\'' . $advisor["position"] . '\' class=\'advisor\'>';
            echo '<div class=\'advisorPic\'><img src=\'' . $advisor["image"] . '\' " onclick="toggleByID(\''. $advisor["position"] .'-bio\');"></div>';
            echo '<div class=\'advisorInfo\'>';
            echo '<H3>' . $advisor["name"] . '</H3>';
            echo '<H4>' . $advisor["title"] . '</H4>';
            echo '</div></div>';
        }
?>
</div>
</div>
</div>
</div>

</body>

</html>
