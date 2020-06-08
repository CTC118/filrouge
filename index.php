<?php
namespace CTC;
use CTC\App\Controller\BookController;
use CTC\App\Controller\UserController;
use CTC\App\Controller\PanierController;
use CTC\App\Controller\AdminController;
use CTC\App\Entities\{User, Panier};

spl_autoload_register(function ($className){
    $className = substr($className, 4).'.class.php';
    include $className;
    }
);

session_start();
$connect = false;

$nom = '';
$prenom = '';
$status = '';
$idUser = '';

// $idBook = '';
// $titre = '';
// $isbn = '';



// test si connecté
if(isset($_SESSION['user'])){
    $connect = true;
    $user = unserialize($_SESSION['user']);
    
    $idUser = $user->getIdUser();
    $nom = $user->getNom();
    $prenom = $user->getPrenom();
    $status = $user->getStatus();
    
// gestion du panier
    if (isset($_SESSION['panier'])){
        $panier = unserialize($_SESSION['panier']);
        
        
    } else {
        $panier = [];
    }
} else {
    $panier = [];
}


$entite = filter_input(INPUT_GET, 'entite', FILTER_SANITIZE_SPECIAL_CHARS);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if ($entite == NULL) {
    $entite = 'accueil';
}


switch ($entite) {
    case 'accueil':
        $vue = 'accueil';
        include 'App/Vue/template.php';
        break;
    case 'book':
        $ctrl = new BookController();
        $ctrl->make($action);
        break;
    case 'user':
        $ctrl = new UserController();
        $ctrl->make($action);
        break;
    case 'panier':
        $ctrl = new PanierController();
        $ctrl->make($action);
        break;
    case 'admin':
        $ctrl = new AdminController();
        $ctrl->make($action);
        break;
    
    default:
        break;
}

if ($connect){
    $_SESSION['panier'] = serialize($panier);
}
