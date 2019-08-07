<?php
require_once (dirname(__FILE__) . '/../defines.php');
require_once 'db/data.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta charset="utf-8"/>
    <title><?= SITE_NAME ?> - <?= PAGE_NAME ?></title>
    <link rel="stylesheet" href="style/main.css" charset="utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="script/mainscript.js"></script>
    <!--
        commentaire conditionnel pour rendre compatible les nouvelles balises structurantes de HTML5
    -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


<header>
    <img id="logo" src="images/logo.png" alt="logo de l'entreprise" >
    <?php require_once 'menu.php'; ?>
</header>