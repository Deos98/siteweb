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
						<li><a href="service.html">Service</a></li>
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
						<li><a href="service.html">Nos services</a></li>
						<li><a href="projets.html">Nos Projets</a></li>
						<li><a href="about.html">À propos de nous</a></li>
						<li><a href="contact.php">Vous voulez nous contacter ?</a></li>
					</ul>
				</div>
			</div> 
			
		</div>
		<div id="contenu"> <!-- Div contenant le formulaire d contact -->
		 <form method="Post" action="recup.php">
		       <fieldset style="width: 460px">
      <fieldset style="width: 460px">
      <legend>Votre identité</legend>
      <ol> <li> <label for="nom">Nom</label>
        <input type="Text" name="nom" id="nom" placeholder="Prénom et Nom" /><br />
        <li><label for="email"> Email</label>
        <input type="email" name="email" id="email" placeholder="exemple@domaine.com"/><br />
       <li> <label for="telephone"> Téléphone</label>
        <input type="Text" name="telephone" id="telephone" placeholder="par ex: +3375500000000"/><br />
        </li>
       <li><label for="com">Commentaire</label>
        <textarea name="com" rows="10" cols="25" id="com"></textarea><br /></ol></li>
		</fieldset>
      <input   type="submit" value="Envoyez" >
      </ol></li></fieldset>
  </form> </ol></li></fieldset>  <br />

		</div>
		</div>
		<div id="footer">
			<p><a href="accueil.html">Accueil</a> | <a href="service.html">Services</a> | <a href="Projets.html">Nos Projets  </a> | <a href="about.html">A propos de nous</a> | <a href="contact.php">Contactez-nous</a></p>
			<p>2017-2018 Carcharodon Studio</a></p>
		</div> <!-- Fin du pieds de page -->
	</div> 
</body>
</html>