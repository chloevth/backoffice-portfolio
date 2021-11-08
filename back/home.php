<?php
session_start();

if ($_SESSION['username']) {
    echo $_SESSION['success'];

    require_once('../db-connect.php');
    $sql = 'SELECT * FROM `projects`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    /*  var_dump($result); */
}
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
    <link rel="stylesheet" href="../assets/styles/front.css">
    <link rel="stylesheet" href="../assets/styles/home.css">
   
</head>
<body>
    
<!-- conteneur -->
    <div class="container">
    <!-- header gauche -->
        <h1>PROJETS</h1>
        <div class="main__header">
            <a href="add-form.php">Ajouter un projet</a>
        </div>

    <!-- fin header gauche -->

    <!-- bloc de cartes -->

        <div class="bloc__horizontal">
           
        <?php
            foreach ($result as $project) {
        ?>

            <a href="project-details.php?id=<?= $project['id'] ?>">
                <div class="item" style="background:no-repeat center url('../assets/images/<?= $project['project_picture'] ?>');">
                    <h2><?= $project['project_title'] ?></h2>
                </div>
            </a>
            <?php
                }
            ?>        

        </div>

    <!-- fin bloc de cartes -->
        
        
    </div>
<!-- fin container -->

  
 
<script src="../assets/scripts/main.js"></script>

</body>
</html>

