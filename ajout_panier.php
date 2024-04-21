<?php
session_start();

$id = $_GET["id"];
require "config.php";
$bdd = connect();



if (!isset ($_SESSION['panier']))
{
$_SESSION['panier'] = array(); 
}

else if (isset($_SESSION ['panier'] [$id] ))
{
    $_SESSION['panier'][$id]++ ;
}

else
{
    $_SESSION['panier'][$id] = 1; 
}
$_SESSION['succes'] = "le produit a été ajouté au panier !";

header("Location :index.php");


  if (!empty ($_SESSION['succes']))
  {
  ?>
  <div class = "alert alert-success" role="alert" id="alert">
    <?php echo $_SESSION['succes']; ?>
  </div>
  <?php 
  }
  ?>