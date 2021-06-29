<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio créé par Chloé Vauthier.">
    <title>Chloé VAUTHIER &#124 Graphiste &#38 Web designer</title>
    <link rel="icon" href="../assets/icones/favicon.ico"/>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/back.css">
</head>
<body>


<div class="container__bo">
    <h1 class="add__form--title">Ajouter un projet</h1>
    <form action="add-form-handler.php" method="post" enctype="multipart/form-data" class="add__form--form">
        <div class="input__bo">
            <label for="input_title">Titre</label>
            <input type="text" id="input_title" name="project_title">
        </div>
        <div class="input__bo">
            <label for="input_picture">Image</label>
            <input type="file" id="input_picture" name="project_picture">
        </div>
        <div class="input__bo">
            <label for="input_begin">Date de démarrage</label>
            <input type="date" id="input_begin" name="project_begin">
        </div>
        <div class="input__bo">
            <label for="input_end">Date de fin</label>
            <input type="date" id="input_end" name="project_end">
        </div>
        <div class="input__bo">
            <label for="input_context">Contexte</label>
            <textarea name="project_context" id="input_context" cols="30" rows="10"></textarea>
        </div>
        <div class="input__bo">
            <label for="input_specs">Spécifications fonctionnelles</label>
            <textarea name="project_specs" id="input_specs" cols="30" rows="10"></textarea>
        </div>
        <div class="input__bo">
            <label for="input_githublink">Lien GitHub</label>
            <input type="text" id="input_githublink" name="project_githublink">
        </div>
        <div class="input__bo">
            <label for="input_link">Lien du projet</label>
            <input type="text" id="input_link" name="project_link">
        </div>
        <div class="input__bo">
            <input type="submit">
        </div>

    </form>


</div>

</body>
</html>