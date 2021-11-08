<?php
session_start();

if ($_SESSION['username']) {
    $id = strip_tags($_POST['id']);

    if ($_FILES) {

        if ($_FILES['project_picture']['error']) {     
            switch ($_FILES['project_picture']['error']){     
                    case 1: // UPLOAD_ERR_INI_SIZE     
                    echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
                    break;     
                    case 2: // UPLOAD_ERR_FORM_SIZE     
                    echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
                    break;     
                    case 3: // UPLOAD_ERR_PARTIAL     
                    echo "L'envoi du fichier a été interrompu pendant le transfert !";     
                    break;     
                    case 4: // UPLOAD_ERR_NO_FILE     
                    echo "Le fichier que vous avez envoyé a une taille nulle !"; 
                    break;     
            }     
        }  else {     
    
            $target_dir = "../assets/images/";
            $target_file = $target_dir . basename($_FILES["project_picture"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["project_picture"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
    
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
    
            // Check file size
            if ($_FILES["project_picture"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
    
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
    
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["project_picture"]["tmp_name"], $target_file)) {
                    echo "Le fichier ". htmlspecialchars( basename( $_FILES["project_picture"]["name"])). " a été téléversé.";
                    $picture = basename( $_FILES["project_picture"]["name"]) ;
                   
                    require_once("../db-connect.php");
                    $sql = 'UPDATE `projects` SET `project_picture`=:project_picture WHERE `id`=:id';


            $query = $db->prepare($sql);

            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->bindValue(':project_picture', $picture, PDO::PARAM_STR);

            $query->execute();
            echo 'c\'est ok';
            echo ' <br><a href="home.php"> retour</a>';

                } else {
                    echo 'Remplissez tous les champs';
                    echo '<br><a href=add-form.php> Retour </a>';
                } 
            }
        }

    } else {
        echo 'pour accéder à cette page, vous devez publier un projet';
    }
} else {
    echo "vous n'êtes pas identifié";
}