<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magasin de bonbon</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css"> <!-- Assurez-vous de créer un fichier styles.css pour vos styles personnalisés -->
  <style>
    /* Ajoutez vos styles personnalisés ici */
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Magasin de bonbons</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lien</a>
          </li>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
              Options
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a class="dropdown-item" href="formAjout.php">Ajouter un produit</a></li>
              <li><a class="dropdown-item" href="choixModif.php">Modifier un produit</a></li>
              <li><a class="dropdown-item" href="choixSupp.php">Supprimer un produit</a></li>
            </ul>
          </div>
        </ul>
        <form class="d-flex" method="POST" action="recherche.php">
          <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Rechercher" name="nom">
          <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
        <a class="btn btn-primary ms-2" href="logout.php" role="button" onclick="return confirm('Êtes-vous sûr de vouloir vous déconnecter ?')">Se déconnecter</a>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="text-center">Nos délicieux bonbons</h1>
    <div class="row">
      <?php
      //connexion à la BDD
      require "config.php";

      $bdd = connect();
      //requête
      $sql = "SELECT * FROM produit";

      //execution de la requête
      $resultat = $bdd->query($sql);

      //affichage des resultats dans un objet
      while ($produit = $resultat->fetch(PDO::FETCH_OBJ)) {
      ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="images/<?php echo $produit->photo ?>" class="card-img-top" alt="<?php echo $produit->nom ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $produit->nom; ?></h5>
              <p class="card-text"><?php echo $produit->prix; ?> €</p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
