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
        $sql = 'DELETE FROM `projects` WHERE `id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        /*header('Location:home.php');*/
        echo '<h1>Projet supprimé</h1> <br> <a href="home.php" class="btn__style">Retour</a>';

    } else {
            echo 'id manquant'; 
        }
    } else {
    echo 'identifiez-vous';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet supprimé</title>
    <link rel="stylesheet" href="../assets/styles/main.css">
    <link rel="stylesheet" href="../assets/styles/back.css">
    <link rel="stylesheet" href="../assets/styles/center.css">
   
</head>
<body>
    
</body>
</html>