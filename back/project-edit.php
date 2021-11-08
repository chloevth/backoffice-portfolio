<?php
session_start();

if ($_SESSION['username']) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
    } else {
        echo "l'url n'est pas valide";
    }
} else {
    echo "vous n'êtes pas identifié";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un projet</title>
</head>
<link rel="stylesheet" href="../assets/styles/main.css">
<link rel="stylesheet" href="../assets/styles/center.css">
<link rel="stylesheet" href="../assets/styles/edit.css">

<body>

<h1>Modifier les données</h1>
    <form action="project-edit-form-handler.php" method="post" class="main__form">
    

        <div class="main__form">
            <label for="input_title">Titre</label>
            <input type="text" id="input_title" name="project_title" value="<?= $result['project_title'] ?>">
        </div>
        <div class="main__form">
            <label for="input_begin">Date de démarrage</label>
            <input type="date" id="input_begin" name="project_begin" value="<?= $result['project_begin'] ?>">
            
        </div>
        <div class="main__form">
            <label for="input_end">Date de fin</label>
            <input type="date" id="input_end" name="project_end" value="<?= $result['project_end'] ?>">
        </div>
        <div class="main__form">
            <label for="input_context">Contexte</label>
            <textarea name="project_context" id="input_context" cols="30" rows="10"><?=$result['project_context']?></textarea>
        </div>
        <div class="main__form">
            <label for="input_specs">Spécifications fonctionnelles</label>
            <textarea name="project_specs" id="input_specs" cols="30" rows="10"><?=$result['project_specs']?></textarea>
        </div>
        <div class="main__form">
            <label for="input_githublink">Lien GitHub</label>
            <input type="text" id="input_githublink" name="project_githublink" value="<?=$result['project_githublink']?>">
        </div>
        <div class="main__form">
            <label for="input_link">Lien du projet</label>
            <input type="text" id="input_link" name="project_link" value="<?=$result['project_link']?>">
        </div>
        <div class="main__form">
        <input type="hidden" value="<?= $result['id'] ?>" name="id">
            <input type="submit">
        </div>


    </form>

<h1>Modifier le visuel</h1>
    <form action="edit-picture-handler.php" method="post" enctype="multipart/form-data" class="main__form">

<div class="main__form">
    <label for="input_picture">Aperçu</label>
    <input type="file" id="input_picture" name="project_picture">
    <input type="hidden" name="id" value='<?= $result['id'] ?>'>
</div>

<div class="main__form">
    <input type="submit">
</div>

</form>



    <a href="project-details.php?id=<?= $result['id'] ?>">Retour</a>



</body>

</html>