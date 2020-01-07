<html>
<head>
	<title>Menu déroulant</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="Menu.css"/>
</head>
	<header>
	<div class="poutre">
		<div class="boutonMenu"><img id="BoutonMenuDeroulant" src="../Settings/menu.png"></div>
		<div class="texte"><a href="../My account/general info.php">General Info</a></div>
		<div class="texte"><a href="../My account/General data.php">Data</a></div>
		<div class="texte"><a href="../My account/newtest.php">New Test</a></div>
		<div class="texte"><a href="../My account/help.php">Help</a></div>
	</div>
	
	
	<nav class="menu" id="TEST">
		<ul>
			<li class = "My_account"><a href="#">My account</a>
			<ul class="submenu">
				<li><a href="../My account/general info.php">General Info</a></li>
				<li><a href="../My account/General data.php">Data</a></li>
				<li><a href="../My account/newtest.php">New Test</a></li>
				<li><a href="../My account/help.php">Help</a></li>
			</ul>
			</li>
			
			<li class = "About_Us"><a href="#">About Us</a>
			<ul class="submenu">
				<li><a href="#">User Manual</a></li>
				<li><a href="#">Project Display</a></li>
			</ul>
			</li>
			
			<li class = "Contact_Us"><a href="#">Contact Us</a>
			<ul class="submenu">
				<li><a href="../Contact Us/contactus.php">Our Contact Information</a></li>
				<li><a href="../Contact Us/message.php">Message</a></li>
			</ul>
			</li>
			
			<li class="Log_Out"><a href="../Log out/deconnexion.php">Log out</a></li>
		</ul>
	</nav>
	</header>
	
	<script>
	// Get the button, and when the user clicks on it, execute myFunction
	document.getElementById("BoutonMenuDeroulant").onclick = function() {myFunction()};

	/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
	function myFunction() {
	  document.getElementById("TEST").classList.toggle("show");
	}
	</script>
</html>