<?php
require "config.php";

if(isset($_POST["action"])){
    if($_POST["action"] == "Publier mon avis"){
        $query = "INSERT INTO avis(id_offre, title, text) values('".$_POST["choiceOffre"]."', '".$_POST["titleAvis"]."', '".$_POST["textAvis"]."')";
        $result = pg_query($query);
        var_dump($query);
        var_dump($result); //header('Location: offre.php#avis');
    }
}