<?php
session_start();
if ($_SESSION['username']) {

    if ($_POST) {

        if (
            isset($_POST['project_title']) && !empty($_POST['project_title']) &&
            isset($_POST['project_begin']) && !empty($_POST['project_begin']) &&
            isset($_POST['project_end']) && !empty($_POST['project_end']) &&
            isset($_POST['project_context']) && !empty($_POST['project_context']) &&
            isset($_POST['project_specs']) && !empty($_POST['project_specs']) &&
            isset($_POST['project_githublink']) && !empty($_POST['project_githublink']) &&
            isset($_POST['project_link']) && !empty($_POST['project_link'])
        ) {
            require_once("db-connect.php");
            $title = strip_tags($_POST['project_title']);
            $begin = strip_tags($_POST['project_begin']);
            $end = strip_tags($_POST['project_end']);
            $context = strip_tags($_POST['project_context']);
            $specs = strip_tags($_POST['project_specs']);
            $githublink = strip_tags($_POST['project_githublink']);
            $link = strip_tags($_POST['project_link']);


            $sql = "INSERT INTO projects(project_title, project_begin	
, project_end, project_context, project_specs, project_githublink, project_link) VALUES (:project_title,:project_begin,:project_end,:project_context,:project_specs,:project_githublink,:project_link)";
            $query = $db->prepare($sql);
            $query->bindValue(':project_title', $title, PDO::PARAM_STR);
            $query->bindValue(':project_begin', $begin, PDO::PARAM_STR);
            $query->bindValue(':project_end', $end, PDO::PARAM_STR);
            $query->bindValue(':project_context', $context, PDO::PARAM_STR);
            $query->bindValue(':project_specs', $specs, PDO::PARAM_STR);
            $query->bindValue(':project_githublink', $githublink, PDO::PARAM_STR);
            $query->bindValue(':project_link', $link, PDO::PARAM_STR);
            $query->execute();
            echo 'c\'est ok';
            echo ' <br><a href="home.php"> retour</a>';
        } else {
            echo 'remplissez tous les champs !';
        }
    } else {
        echo 'pour accéder à cette page, vous devez publier un projet';
    }
} else {
    echo 'vous n\'êtes pas identifié'; }