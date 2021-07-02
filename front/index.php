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
            <a href="#modal_box">À PROPOS</a>
            <div id="modal_box" class="modal">

                <div class="modal_content">
                    <a href="#" class="modal_close">&times; Fermer la fenêtre &times; </a>
                    <h1 class="modal_title">À PROPOS</h1>
                    <P class="modal_text">Graphiste et photographe, j'ai souhaité me former au web design pour acquérir une polyvalence à destination de mes futurs employeurs et clients.  </P>
                    
                    <a href="#" target="_blank" class="modal_btn">CV</a>
                    <a href="https://github.com/chloevth" target="_blank" class="modal_btn">Github</a>
                    <a href="https://www.linkedin.com/in/chlo%C3%A9-vauthier-0a4077146/" target="_blank" class="modal_btn">LinkedIn</a>
                    <a href="mailto:c.vauthier@codeur.online" target="_blank" class="modal_btn">Email</a>
                    
                    
                </div>
            </div>
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

        </div>

    <!-- fin bloc de cartes -->
        
        
    </div>
<!-- fin container -->

 
<script src="../assets/scripts/main.js"></script>
<script src="../assets/scripts/modal.js"></script>

</body>
</html>