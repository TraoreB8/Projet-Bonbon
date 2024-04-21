<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modifiication</title>
</head>

<?php
//connexion à la BDD
require "config.php";

session_start();
$bdd = connect();
$id = $_GET["id"];
//requête
$sql = "select * from produit where id = $id";

  //execution de la requ$ete
  $resultat = $bdd->query($sql);
  $produit = $resultat->fetch(PDO::FETCH_OBJ) ;
  $_SESSION["id"] = $id;

  $_SESSION["autorisation"]="OK";
  $_SESSION["admin"]= $rep -> login;
 ?>


<body>
    <h1>Modification du produit</h1>
    

<form action="modif2.php" method="POST">
        <p>Nouveau nom de produit : <input type="text" name="nom" id="" attribut value="<?php echo $produit->nom ?>"></p>
        <p>Nouveau prix de produit :<input type="text" name="prix" id="" attribut value="<?php echo $produit->prix?>"></p>
        <!-- Le champs 'hidden' doit être défini avant le champs 'file'  -->
        <p>Nouvelle image de produit :<input type="text" name="image"  value="<?php echo $produit->photo?>">
        <br > <br>
        <input type="submit" class="btn btn-danger" name="del" value="Modifier le bonbon">
        <input type="reset" class="btn btn-danger" name="del" value="Reset">
    </form>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>