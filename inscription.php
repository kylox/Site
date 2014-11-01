<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<?php include("navbar.php"); ?>
<body>
    <form>
        <legend>Inscription</legend>
        <div class="col-lg-2">
            <label for="select">Select : </label>
            <select id="select" class="form-control">
                <option>Mr </option>
                <option>Mme</option>
            </select>
        </div>
        <div class="col-lg-5">
            <label for="texte">Nom : </label>
            <input id="text" type="text" class="form-control">
        </div>
        <div class="col-lg-5">
            <label for="texte">Prenom : </label>
            <input id="text" type="text" class="form-control">
        </div>
        <div class="col-lg-6">
            <label for="texte">Adresse : </label>
            <input id="text" type="text" class="form-control">
        </div> 
         <div class="col-lg-4">
            <label for="texte">Ville : </label>
            <input id="text" type="text" class="form-control">
        </div>
        <div class="col-lg-2">
            <label for="texte">Code postal : </label>
            <input id="text" type="text" class="form-control">
        </div>
        <div class="col-lg-12">
            <label for="texte">Nom de l'entreprise : </label>
            <input id="text" type="text" class="form-control">
        </div>
        <div class="col-lg-12">
            <label for="textarea"> Description de l'entreprise : </label>
            <textarea for="textarea" type="textearea" class="form-control"></textarea>
        </div>
        <div class="col-lg-12">
            <button type="button" class="btn btn-success">Envoyer</button>
            <button type="button" class="btn btn-danger">Annuler</button>
        </div>
    </form>
  </body>
</html>
