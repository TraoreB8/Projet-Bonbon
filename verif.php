<?php
session_start();
require "config.php";
//connexion à la BDD
$bdd = connect();
$identifiant = $_POST["login"];
$password = md5($_POST["mdp"]);

//requête
$sql =  "select* from admin where login= '$identifiant' and mdp='$password' ";

//execution de la requête
$resultat = $bdd->query($sql);
$nb_lignes = $resultat->rowCount() ;
echo $nb_lignes;
if($nb_lignes == 0) {
    echo "interdit" ;
    header("location:admin.php");
} else {
    echo "ok";
    $_SESSION["autorisation"]="OK";
    $_SESSION["admin"]= $rep -> login;
    header("location:accueil-admin.php");
}

?>