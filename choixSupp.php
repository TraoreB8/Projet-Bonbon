<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <title>Magasin de bonbon</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="accueil-admin.php">Accueil admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><button class="dropdown-item active" type="button" style="color:#000;"><a href="formAjout.php" style="color:#000;">Ajouter un produit</a></button></li>
              <li><button class="dropdown-item active" type="button" style="color:#000;"> <a href="choixModif.php" style="color:#000;">Modifier un produit</a></button></li>
              <li><button class="dropdown-item active" type="button" style="color:#000;"> <a href="choixSupp.php" style="color:#000;">Supprimer un produit</a></button></li>
            </ul>
          </div>
          <form class="d-flex" method="POST" action="recherche.php">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="nom">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
      </div>
    </div>
  </nav>
  <h1>BONBONS</h1>


  <?php
  $_SESSION["autorisation"]="OK";
  $_SESSION["admin"]= $rep -> login;

  //connexion à la BDD
  require "config.php";

  $bdd = connect();
  //requête
  $sql = "select * from produit";

  //execution de la requ$ete
  $resultat = $bdd->query($sql);

  //affichage des resultats dans un objet
  while ($produit = $resultat->fetch(PDO::FETCH_OBJ)) {
  ?>
    <div class='card' style='width: 18rem;'>
      <img src='images/<?php echo $produit->photo ?>' class='card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'><?php echo $produit->nom ?></h5>
        <p class='card-text'><?php echo $produit->prix ?> €</p>
        <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="supp.php?id=<?php echo $produit->id ?>">Supprimer</a>
      </div>
    </div>
  <?php

  }
  ?>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>