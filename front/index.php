<?php
    require_once('../db-connect.php');
    $sql = 'SELECT * FROM `projects`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

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
    <link rel="stylesheet" href="../assets/styles/about.css">
</head>
<body>
    
<!-- conteneur -->
    <div class="container">
    <!-- header gauche -->
        <h1>PROJETS</h1>

        
        
        <div class="main__header">
            <a href="#modal_box" class="js_modal">A PROPOS</a>
            <aside id="modal_box" class="modal" style="display:none;">
                <div class="modal_wrapper">
                    <button class="js_modal_close">Fermer la modale</button>
                    <h1>A propos</h1>
                </div>

            </aside>
            <p class="scroll">Scroll</p>
            <a href="#">CHLOE VAUTHIER</a>
            
        </div>

    <!-- fin header gauche -->

    <!-- bloc de cartes -->

        <div class="bloc__horizontal">
           
        <?php
            foreach ($result as $project) {
        ?>

            <a href="single.php?id=<?= $project['id'] ?>">
                <div class="item" style="background:no-repeat center url('../assets/images/<?= $project['project_picture'] ?>');">
                    <h2><?= $project['project_title'] ?></h2>
                </div>
            </a>
            <?php
                }
            ?>        
            <!-- <a href="#">
                <div class="item deux">
                    <h2>TITRE</h2>
                </div>
            </a> 

            <a href="#">
                <div class="item trois">
                    <h2>TITRE</h2>
                </div>
            </a> 

            <a href="#">
                <div class="item quatre">
                    <h2>TITRE</h2>
                </div>
            </a> 

            <a href="#">
                <div class="item cinq">
                    <h2>TITRE</h2>
                </div>
            </a>  -->

        </div>

    <!-- fin bloc de cartes -->
        
        <div class="container__filter">
            <ul class='filter__list'>Filtres :
                <li class="filter__list--item">Photo</li>
                <li class="filter__list--item">Graphisme</li>
                <li class="filter__list--item">Web design</li>
            </ul>
        </div>
        
    </div>
<!-- fin container -->

 
<script src="../assets/scripts/main.js"></script>
<script src="../assets/scripts/modal.js"></script>

</body>
</html>