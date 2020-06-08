<?php
namespace CTC\App\Controller;
use CTC\App\Model\PanierModel;

/**
 * Description of PanierController
 *
 * @author Christine Cheng
 */
class PanierController {
    
        public function make($action) {
            global $connect;
            global $nom, $prenom, $status;
        switch ($action) {
            case 'add':
                $idBook = filter_input(INPUT_GET, 'idBook');
                $mod = new PanierModel();
                $mod->addBook($idBook);
                http_response_code(200);
                break;
             
            case 'show_panier':
                global $panier;
                $vue = 'list.panier';
                break;

            case 'vider':
                global $panier;
                $mod = new PanierModel();
                $mod->vider_panier();
                $vue = 'list.panier';
                break;

            case 'del_book':
                $idBook = filter_input(INPUT_GET, 'idBook');
                $mod = new PanierModel();
                $mod->del_book($idBook);
                http_response_code(200);
                break;

            default:
                break;
        }
        include 'App/vue/template.php';
    }
    
}
