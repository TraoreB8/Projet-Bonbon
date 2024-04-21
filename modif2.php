<?php  
require "config.php";
require "entete.php";
session_start();
$bdd = connect();
$produit = $_POST["nom"];
$prix = $_POST["prix"];
$id = $_SESSION["id"];
$image = $_POST["image"];

$_SESSION["autorisation"]="OK";
$_SESSION["admin"]= $rep -> login;


  try {
    //requête
    $sql = "Update produit set nom = '$produit' , prix = '$prix' , photo = '$image' WHERE id = $id ";
    //execution
    $resultat = $bdd->exec($sql);
header("location:accueil-admin.php") ;

  } catch (PDOException $e) {
    echo "erreur dans la requête <br>" . $e->getMessage();
  }


  ?>