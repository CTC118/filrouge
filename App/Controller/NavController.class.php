<?php
namespace CTC\App\Controller;

/**
 * Description of BookController
 *
 * @author Christine Cheng
 */
class NavController
{
    public function make($action)
    {
        global $connect;
        global $nom, $prenom, $status;
        
        switch ($action) {
            case 'info':
                $vue = 'infos';
                break;
            
            default:
                break;
        }
        include 'App/Vue/template.php';
    }
}