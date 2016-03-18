<?php
require "config.php";

$avis = [];
$avi = [];

if(isset($_GET["id_offre"])){
	$id_offre = $_GET["id_offre"];

	$query = "SELECT * FROM avis WHERE id_offre = ".$id_offre;
	$result = pg_query($query);
	while($row = pg_fetch_assoc($result)){
		$avi["title"] = $row["title"];
		$avi["text"] = $row["text"];
		$avis[] = $avis;
	}
}

echo json_encode($avis);