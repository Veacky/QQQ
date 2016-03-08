<!doctype html>
<html class="no-js" lang="fr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>QQQ | Nos offres</title>
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
 
<div class="top-bar">
	<div class="row">
		<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
				<li class="menu-text">QuomenQuonQlick?</li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu">
				<li><input type="search" placeholder=" ... "></li>
				<li><button type="button" class="button">Chercher</button></li>
			</ul>
		</div>
	</div>
</div>
 
<br>
 
<div class="row columns">
	<nav aria-label="You are here:" role="navigation">
	<ul class="breadcrumbs">
	<li><a href="#">Accueil</a></li>
	<li><span class="show-for-sr">Current: </span> Nos offres</li>
	</ul>
	</nav>
</div>
<div class="row">
	<div class="medium-6 columns">
		<img class="thumbnail" src="http://placehold.it/650x350">
		<div class="row small-up-4">
			<div class="column">
				<img class="thumbnail" src="http://placehold.it/250x200">
			</div>
			<div class="column">
				<img class="thumbnail" src="http://placehold.it/250x200">
			</div>
			<div class="column">
				<img class="thumbnail" src="http://placehold.it/250x200">
			</div>
			<div class="column">
				<img class="thumbnail" src="http://placehold.it/250x200">
			</div>
		</div>
	</div>
	<div class="medium-6 large-5 columns">
		<h3>Assistance informatique en temps réel, à distance</h3>
		<p>
			Description du service ... </br>
			Plusieurs façons de profiter de notre service d'offre à vous. </br>
			Vous pouvez selectionner une des offres ci-dessious et voir le descriptif de celle-ci en dessous.
		</p>
		<label>Offre
			<select id="selectOffre">
				<?php
					$query = "SELECT * FROM offre";
					$result = pg_query($query);
					while($row = pg_fetch_assoc($result)){
						if($row["id"]=="1"){
							echo '<option selected value="'.$row["id"].'">'.$row["name"].'</option>';
						}
						else
   						echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
   					}
   				?>
			</select>
		</label>
	</div>
</div>



<div class="column row">
	<hr>
	<ul class="tabs" data-tabs id="example-tabs">
		<li class="tabs-title is-active"><a href="#infos" aria-selected="true">Informations sur l'offre sélectionnée</a></li>
		<li class="tabs-title"><a href="#avis">Avis des utilisateurs utilisants cette offre</a></li>
	</ul>
	
	<div class="tabs-content" data-tabs-content="example-tabs">
		<div class="tabs-panel" id="avis">
			<h4>Avis des utilisateurs :</h4>
			<div class="media-object stack-for-small">
				<div class="media-object-section">
					<img class="thumbnail" src="http://placehold.it/200x200">
				</div>
			<div class="media-object-section">
				<h5>Rénée</h5>
					<p>
						Avis ...
					</p>
			</div>
		</div>
		
		<label>
			Mon avis :
			<textarea placeholder=" ... "></textarea>
		</label>
		<button class="button">Publier mon avis</button>
	</div>
	
	
	<div class="tabs-panel is-active" id="infos">
		<h4>Offre sélectionnée : <span id="titleOffre"><?php $query = "SELECT name FROM offre where id = 1";
					$result = pg_query($query); echo pg_fetch_assoc($result)["name"];  ?></span></h4>
		<p id="descOffre">
			<?php $query = "SELECT * FROM offre where id = 1";
					$result = pg_query($query); echo pg_fetch_assoc($result)["desc"];  ?>
		</p>
		Prix : <span id="priceOffre"><?php $query = "SELECT price FROM offre where id = 1";
					$result = pg_query($query); echo pg_fetch_assoc($result)["price"];  ?></span> €
	</div>
</div>






<div class="row column">
<hr>
<ul class="menu">
<li>QuomenQuonQlick?</li>
<li><a href="index.html">Accueil</a></li>
<li><a href="offres.html">Nos Offres</a></li>
<li><a href="about.html">Nous contacter</a></li>
<li class="float-right">QQQ - Copyright 2016</li>
</ul>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script src="script.js"></script>
</body>
</html>
<?php