<!DOCTYPE html>

<!--
 * @author Ting-Chun BRASQUIES
 * Fichier template de l'application admin_biblio
 -->
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>dministration Bibliothèque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/users-cog-solid.svg">
        <!-- Bootstrap core CSS -->
        <!-- <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/> -->
    <link rel="stylesheet" href="css/admin.css">
    <link href="css/biblio.css" rel="stylesheet" type="text/css"/>
    <link href="dist/bootstrap.min.css" rel="stylesheet">
    <link href="dist/fontawesome/css/all.css" rel="stylesheet">
        <!--這會讓照片旁邊的資料下移 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="dist/js/jquery-3.5.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
    <script src="dist/admin.js"></script>
    </head>

    <body>

    <div class="page-wrapper chiller-theme toggled">
        <main class="page-content">
            <div class="container-fluid">
            
        <?php
        
        
        include $vue.'.php';
        include 'admin_nav.php';
        ?>

        </div>
    </main>
    <br><br><br>
    <span style="margin-left:410px; color: blue; font-weight: bold;"><?php if(!empty($message)){ echo 'INFOS : ' . $message; } ?></span>
</div>

        <!-- page-wrapper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
   </body>
</html>
