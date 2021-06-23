<?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
    } else {
        echo 'id manquant';
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $result['project_title'] ?></h1>
    <figure>
        <img src="../assets/images/<?= $result['project_picture']; ?>">
    </figure>
    <p><?= $result['project_context'] ?></p>
    <p> <?= $result['project_specs'] ?></p>
   
    <p>
        <a href="project-edit.php?id=<?= $result['id'] ?>">Modifier <?= $result['project_title'] ?></a>
        <a href="project-delete.php?id=<?= $result['id'] ?>">supprimer <?= $result['project_title'] ?></a>
        <a href="home.php"><button>Retour</button></a>
    </p>

</body>
</html>