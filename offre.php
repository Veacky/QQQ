<!doctype html>
<html class="no-js" lang="fr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Info'rmation | Nos offres</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
</head>
<body>

	<?php
		include_once "config.php";
	?>
 
<div class="top-bar">
	<div class="row">
		<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
				<li>In<span class="gras">fo'rmation</span></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu">
				<li><a href="home.php">Accueil</a></li>
				<li><a href="offre.php">Nos Offres</a></li>
				<li><a href="about.php">Nous contacter</a></li>
			</ul>
		</div>
	</div>
</div>
 
<br>
 
<div class="row columns">
	<nav aria-label="You are here:" role="navigation">
	<ul class="breadcrumbs">
	<li><a href="home.php">Accueil</a></li>
	<li><span class="show-for-sr">Current: </span> Nos offres</li>
	</ul>
	</nav>
</div>

<div class="row">
	<div id="imgOffre" class="medium-6 columns">
		<img class="thumbnail" src="img/Abonnement.jpg">
	</div>
	<div class="medium-6 large-5 columns">
		<h3>Découvrez nos offres :</h3>
		<p>
			Plusieurs façons de profiter de notre service s'offrent à vous. </br>
			Vous pouvez selectionner une des offres ci-dessious et voir le descriptif de celle-ci plus bas.
			N'hésitez pas à regarder les avis des autres utilisateurs pour savoir si cette offre est faite pour vous !
		</p>
		<label>Offre :
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
		<li class="tabs-title"><a href="#avis">Avis des utilisateurs</a></li>
	</ul>
	
	<div class="tabs-content" data-tabs-content="example-tabs">

		<div class="tabs-panel is-active" id="infos">
			<h4>Offre sélectionnée : <span id="titleOffre"><?php $query = "SELECT name FROM offre where id = 1";
						$result = pg_query($query); echo pg_fetch_assoc($result)["name"];  ?></span></h4>
			<p id="descOffre">
				<?php $query = "SELECT * FROM offre where id = 1";
						$result = pg_query($query); echo pg_fetch_assoc($result)["desc"];  ?>
			</p>
			Prix : <span id="priceOffre" class="label"><?php $query = "SELECT price FROM offre where id = 1";
						$result = pg_query($query); echo pg_fetch_assoc($result)["price"];  ?>€ </span>
		</div>


		<div class="tabs-panel" id="avis">
			<h4>Avis des utilisateurs :</h4>
			<div class="media-object">
					<?php $query = "SELECT * FROM avis a JOIN offre o ON a.id_offre = o.id";
						$result = pg_query($query);
						while($row = pg_fetch_assoc($result)){
							echo "<div class='media-object-main-section avis'>";
							echo "<h5 class='titleAvis'>".$row["title"]."</h5>";
							echo "<span class='idOffre italic'>".$row["name"]."</span></br>";
							echo "<p class='textAvis'>\" ".$row["text"]." \"</p> ";
							echo "<hr>";
							echo "</div>";
						} ?>
				</div>

			<form method="post" action="avis.php">
				<h4 class="tabs-title">Laissez votre avis :</h4>
				</br></br>
				<label>
					Titre : 
					<input type="text" name="titleAvis"/>
					Mon avis :
					<textarea name="textAvis" placeholder=""></textarea>
				</label>
				<label>Votre offre :
					<select name="choiceOffre">
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
				<input type="submit" class="button" value="Publier mon avis" name="action"/>
			</form>
		</div>
	</div>

</div>


<div class="row column">
<hr>
	<ul class="menu">
		<li>In<span class="gras">fo'rmation</span></li>
		<li><a href="home.php">Accueil</a></li>
		<li><a href="offre.php">Nos Offres</a></li>
		<li><a href="about.php">Nous contacter</a></li>
		<li class="float-right">In<span class="gras">fo'rmation</span> - Copyright 2016</li>
	</ul>
		</br></br>
</div>



<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
<script src="script.js"></script>
</body>
</html>
<?php