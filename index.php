<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link rel="stylesheet"  href="css/style.css">
<marquee behavior="alternate">
	<li></li>
   L'art est la production de belles apparences ou de formes « esthétiques » dans un esprit désintéressé
</marquee>

<!-- ?php include("config/connection.php")?> -->

</head>
<body>

	<!-- header -->
	<header>
		
		<img src="images/LL2.JPG" height="150px" width="200px">
		<img src="images/I5.JPG" height="150px" width="780px">
		
		
	</header>
		<nav>

			<ul class="menuHorizontal">
				<li><a href="#">Accueil</a></li>
				<li><a href= "Poésie.html">Poésie</a></li>
				<li><a href="images/T5.JPG">Théatre</a></li>
				<li><a href="images/S1.JPG">Sculpteur</a></li>
				<li><a href="images/ds.JPG">Danse</a></li>
				<li><a href="images/I4.JPG">Pienture</a></li>
				<li><!--a href="images/dil.png">DIL</a--></li>
			</ul>
		</nav>

		<section>
			<aside>
				<div class="titre">ESPACE INSCRIPTION</div>
				<?php
				    include("views/creeretudiant.php");
				?>
			</aside>
			<article>
				<div class="titre">La beauté de l'ART</div>
				   <p>
				   	<marquee><img src="images/I1.JPG" height="275px" width="300px"></marquee>
			
				</p>
			</article>
	    </section>
	    <footer>
	    	 <!--pied de page-->
	    	 <p style="font-family: arial; font-style: italic; background-color:red; color: #fff">Projet_tutor&eacute;-Copyright.sn-Art-Graphique-</p>
	    </footer>
	

</body>
</html>
