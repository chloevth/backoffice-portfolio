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
    <link rel="stylesheet" href="../assets/styles/back.css">
</head>
<body>
    
<!-- conteneur -->
    <div class="container">
    <!-- header gauche -->
        <h1>PROJETS</h1>
        <a href="add-form.php"><button class="btn__add">ajouter un projet</button></a>
     

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

<?php
        foreach ($result as $project) {
?>
        <a href="project-details.php?id=<?= $project['id'] ?>"><?= $project['project_title'] ?></a>
<?php
        }
?>



  
 
<script src="../assets/scripts/main.js"></script>
<script src="../assets/scripts/modal.js"></script>

</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

   

</body>

</html> -->