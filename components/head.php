<!DOCTYPE html>
<?php
include "settings/configuration.php";
session_start();
include "functions/setLang.php";
include "functions/getLang.php";
include "locale/" . $lang . "/" . $lang . ".php";
?>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="Portafolios de Juan Antonio Herraiz">
    <title>Portafolios Juan Antonio</title>
    <link rel="stylesheet" href="<?= CSS_ROOT ?>main.css">
    <script src="<?= JS_ROOT ?>functions.js"></script>
</head>

<body>