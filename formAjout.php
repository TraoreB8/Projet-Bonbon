<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">

    <title>Ajouter un nouveau produit</title>
    
    <style>
        /* Style du conteneur du formulaire */
        .container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style des titres */
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Style des étiquettes des champs de saisie */
        .form-label {
            font-weight: bold;
        }

        /* Style des champs de saisie */
        .form-control {
            margin-bottom: 15px;
        }

        /* Style des boutons */
        .btn-primary {
            margin-right: 10px;
        }

        .btn-danger {
            margin-left: 10px;
        }
    </style>
</head>

<body>
<div class="container">
    <h1 class="mt-5 mb-4">Ajouter un nouveau produit</h1>
    <form action="ajout.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="productName" class="form-label">Nom du produit :</label>
            <input type="text" class="form-control" id="productName" name="nom">
        </div>
        <div class="mb-3">
            <label for="productPrice" class="form-label">Prix du produit :</label>
            <input type="text" class="form-control" id="productPrice" name="prix">
        </div>
        <div class="mb-3">
            <label for="productImage" class="form-label">Image du produit :</label>
            <input type="file" class="form-control" id="productImage" name="image" accept="image/png, image/jpg">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <button type="reset" class="btn btn-danger">Réinitialiser</button>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
-->
</body>

</html>
