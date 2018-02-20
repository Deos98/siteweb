<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8"> 
	<title>Carcharodon</title> <!--  le titre de la page -->
	<link rel="stylesheet" type="text/css" href="Design.css"> <!-- Permet le lien vers la page css -->
</head>
<body>
	<div id="container">
		<div id="header"> 
			<div id="logo"> 
				<div id="textlogo"> 
					<h1><a href="accueil.html">Carcharodon<span class="couleurlogo">Studio</span></a></h1> <!-- Logo du site -->				
				</div>
			</div>

			<div id="barremenu"> <!-- Contient toute la barre du menu -->
				<nav id="menu">
					<ul>
						<li ><a href="accueil.html">Accueil</a></li> 
						<li><a href="service.html">service</a></li>
						<li><a href="projets.html">Projets</a></li>
						<li><a href="about.html">A propos</a></li>
						<li class="selected"><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="contenu-header"></div>
		<div id="contenu-site"> 
			<div id="banner"><img src="bannier.jpeg" width="900px" height="150px"></div> <!-- Contient la bannière du site -->
				<div id="contenu-sidebar"> 
			
			<div class="sidebar"> 			
				<div class="sidebar-item">
					<h2>Lien utiles</h2>
					<ul>
						<li><a href="service.html">nos services</a></li>
						<li><a href="projets.html">Projets</a></li>
						<li><a href="about.html">À propos de nous</a></li>
						<li><a href="contact.php">Vous voulez nous contacter ?</a></li>
					</ul>
				</div>
			</div> 
			
		</div>
		</div>
		<?php
			$nom=$_POST['nom'];
			$email=$_POST['email'];
			$telephone=$_POST['telephone'];
			$com=$_POST['com'];

			$mysqli=mysqli_connect('localhost','root','','carcharodon');
			mysqli_query($mysqli,"INSERT INTO carcharodon VALUES ('0' ,'$nom','$email','$telephone','$com')") or die (mysqli_error($mysqli));


			$mysqli=mysqli_connect('localhost','root','','carcharodon');
			$result=mysqli_query($mysqli,"SELECT com FROM carcharodon ORDER BY id DESC LIMIT 1");
			echo '<table id="tb" style="width: 600px ;border-spacing: 0;world-wrap: break-word;">';
			echo '<tr><th>Merci d avoir pris contact avec nous , nous vous recontacterons dans les plus bref délai </br> Voici votre message: </th></tr>';
			while ($row=mysqli_fetch_assoc($result)) {
		
				echo '<tr>';

				echo '<td>'.$row["com"].'</td>';
				echo '<tr>';
			}
			echo '</table>';
			?>
		<div id="footer">
			<p><a href="accueil.html">Accueil</a> | <a href="service.html">Services</a> | <a href="Projets.html">Nos Projets </a>| <a href="about.html">A propos de nous</a> | <a href="contact.php">Contactez-nous</a></p>
			<p>2016-2017 TechDono votre expert réseaux</a></p>
		</div> <!-- Fin du pieds de page -->
	</div> 
</body>
</html>