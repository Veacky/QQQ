<?php
require "config.php";

$info = [];

if(isset($_GET["id_offre"])){
	$id_offre = $_GET["id_offre"];

	$query = "SELECT * FROM offre WHERE id = ".$id_offre;
	$result = pg_query($query);
	$row = pg_fetch_assoc($result);
	$info["name"] = $row["name"];
	$info["desc"] = $row["desc"];
	$info["price"] = $row["price"];
}

echo json_encode($info);



