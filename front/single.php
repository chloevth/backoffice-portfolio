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
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/front.css">
    <link rel="stylesheet" href="../assets/styles/back.css">
  
</head>
<body>
    
<div class="edit__container">
        <figure>
            <img src="../assets/images/<?= $result['project_picture']; ?>">
        </figure>
  
        <div class="edit__specs">
            <h1><?= $result['project_title'] ?></h1>
            <p class="edit__project"><?= $result['project_context'] ?></p>
            <p class="edit__project"> <?= $result['project_specs'] ?></p>
   
            <p class="edit__project">
             
                <a href="index.php"><button class="btn__add">Retour</button></a>
            </p>
        </div>
    </div>

</body>
</html>