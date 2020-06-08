<!DOCTYPE html>
<!--
 * @author Ting-Chun BRASQUIES
 * @version 1.0 du 01/03/2020
 * Fichier template de l'application biblio
 -->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            Fil Rouge Bibliothèque
        </title>
        <link rel="icon" type="image/png" href="images/favicon-32x32_1.png">
        <!-- Bootstrap core CSS -->
        <!-- <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/> -->
        <link href="css/biblio.css" rel="stylesheet" type="text/css"/>
        <link href="dist/bootstrap.min.css" rel="stylesheet">
        <link href="dist/fontawesome/css/all.css" rel="stylesheet">

        <script src="dist/js/slideshow.js"></script>
        <script src="dist/js/jquery-3.4.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script> -->
        <!-- <script src="dist/jquery-1.11.3.min.js"></script>
        <script src="dist/jqprint03.js"></script> -->
    </head>
    <body>

        <?php
        include '_header.php';
        include '_nav.php';

        include $vue.'.php';

        include '_footer.php';
        ?>
   </body>
</html>
