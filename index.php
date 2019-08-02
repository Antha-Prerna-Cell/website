<!DOCTYPE html>

<head>

	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<meta name="keywords" content="Turington, Ramanujan College, Delhi University, Coding, PHP, C++, javascript, JAVA, Python, Ramanujan, DU, Software Development, Cell, Antha Prerna Cell, DU_CS, University of Delhi, website, app, Delhi, India, programmers, Developers, DevOps, Containers, Blockchain, Machine Learning, start up, freelancing  ">

	<meta name="title" content="Antha Prerna Cell">
	<meta name="description" content="Software Development Cell of Ramanujan College, University Of Delhi">
	<meta name="author" href="https://github.com/parthyadav3105/" content="Parth yadav">

	<meta property="og:type" content="website">
	<meta property="og:url" content="https://turington.in">
	<meta property="og:site_name" content="Antha Prerna Cell">
	<meta property="og:title" content="Antha Prerna Cell">
	<meta property="og:description" content="Software Development Cell of Ramanujan College, University Of Delhi">
	
	<meta property="og:image" itemprop="image" content="https://     ******** /apc-logo.png">
	
	
	
	<title>Antha Prerna | Software Development Cell of Ramanujan College University Of Delhi</title>


	<!-- Logo on tab -->
	<link rel="icon" href="assets/apc-logo.png">
	
	<!-- Add social media icon library -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<!--our css files-->
	<link rel="stylesheet" href="stylesheets/index.css">
	<link rel="stylesheet" href="stylesheets/home.css">
	<link rel="stylesheet" href="stylesheets/team.css">		
	<link rel="stylesheet" href="stylesheets/projects.css">		
	<link rel="stylesheet" href="stylesheets/events.css">		
	
	<!--google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	

</head>




<body onload="shiftFocusToHome()">

	<nav>
		<div id="nav-options" >
	  			<div class="nav-options-input" onclick="loadPage('home')">Home</div>
	  			<div class="nav-options-input" onclick="loadPage('apply')">Apply</div>
	  			<div class="nav-options-input" onclick="loadPage('projects')">Projects</div>
	  			<div class="nav-options-input" onclick="loadPage('events')">Events</div>
	  			<div class="nav-options-input" onclick="loadPage('team')">Team</div>
	  			<div class="nav-options-input" onclick="loadPage('contacts')">Contacts</div>
		</div>

		<script type="text/javascript">

			function shiftFocusToHome(){
				document.getElementById("projects").style.display = "none";
				document.getElementById("events").style.display = "none";
				document.getElementById("team").style.display = "none";

				document.getElementById("home").style.display = "block";
			}

			function loadPage(id){
				if(id!="contacts")
				{
					document.getElementById("home").style.display = "none";
					document.getElementById("projects").style.display = "none";
					document.getElementById("events").style.display = "none";
					document.getElementById("team").style.display = "none";

					if(id!="apply")
						document.getElementById(id).style.display = "block";

					document.getElementsByTagName("BODY")[0].scrollIntoView();
					
					if(id=="apply")
					{
						document.getElementById("home").style.display = "block";
						document.getElementById("apply").scrollIntoView(); 
					}

				}
				else
				{
					document.getElementById(id).scrollIntoView(); 
				}
			}
		</script>

	</nav>



	<!-- HOME page with id="home" -->
	<?php	include_once('home.php');?>

	<!-- PROJECTS page with id="projects" -->
	<?php	include_once('projects.php');?>

	<!-- EVENTS page with id="events" -->
	<?php	include_once('events.php');?>

	<!-- TEAM page with id="team" -->
	<?php	include_once('team.php');?>




	<footer id="contacts">
		<img id="footer-logo" src="assets/apc-white-logo.png">
		<strong> Antha Prerna Cell<sup>&copy;</sup></strong>

		<div class="footer-link"><a href="mailto:apc@ramanujan.du.ac.in">Mail-us <img src="assets/mail-logo.svg"></a></div>
		<div class="footer-link"><a href="">Call-us <img src="assets/call-logo.svg"> +91 9810298704</a></div>
	</footer>
	
</body>

</html>
