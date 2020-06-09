<?php
namespace CTC\App\Controller;
use CTC\App\Model\UserModel;
use CTC\App\Entities\User;
use CTC\App\Dao\Dao;

/**
 * Description of UserController
 *
 * @author Christine Cheng
 */
class UserController {

    public function make($action) {
        global $connect;
        
        switch ($action) {
            case 'form_connect':
                $message = '';
                $vue = 'connect';
                break;
            case 'verif_connect':
                $mod = new UserModel();
                try{
                    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
                    $psw_ncard = filter_input(INPUT_POST, 'psw_ncard', FILTER_SANITIZE_SPECIAL_CHARS);
                    
                    $nomUPP = strtoupper($nom);
                    $pswUPP = strtoupper($psw_ncard);

                    $util = $mod->verifConnect($nomUPP, $pswUPP);
                    
                    // 讀取資料需要以下行數
                    $_SESSION['user'] = serialize($util);
                    $connect = true;
                    $nom = $util->getNom();
                    $prenom = $util->getPrenom();
                    $status = $util->getStatus();
                    $vue = 'accueil';
                }catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue = 'connect';
                }
                break;

            case 'compte':
                global $connect;
                global $nom, $prenom, $status, $idUser;
                $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
                $phone = filter_input(INPUT_GET, 'phone');
                $cp = filter_input(INPUT_GET, 'cp');
                $ville = filter_input(INPUT_GET, 'ville');
                $adresse = filter_input(INPUT_GET, 'adresse');
                $ncard = filter_input(INPUT_GET, 'ncard');
                $psw_ncard = filter_input(INPUT_GET, 'psw_ncard');
                $debut_Date = filter_input(INPUT_GET, 'debut_Date');
                $fin_Date = filter_input(INPUT_GET, 'fin_Date', FILTER_SANITIZE_SPECIAL_CHARS);
                $mod = new UserModel();
                $user = $mod->getUserById($idUser);
                $vue = 'mon_compte';
                break;

            case 'edit_mel_fon':
                global $connect;
                global $nom, $prenom, $status, $idUser;
                $mod = new UserModel();
                $email = filter_input(INPUT_POST, 'email');
                $phone = filter_input(INPUT_POST, 'phone');
                $mod->edit($idUser, $email, $phone);
                $vue = 'mon_compte';
                $user = $mod->getUserById($idUser);
                break;

            case 'list_emp':
                global $connect;
                global $nom, $prenom, $status, $idUser;
                $ncard = filter_input(INPUT_GET, 'ncard');
                $mod = new UserModel();
                $listEmp = $mod->mon_listEmp($ncard);
                $vue = 'mon_listEmp';
                break;

            case 'deconnect':
                $mod = new UserModel();
                $mod->deconnect();
                global $connect;
                $connect = false;
                global $nom, $status, $prenom;
                $nom = '';
                $status = '';
                $prenom = '';
                $vue = 'accueil';
                break;

            
            default:
                break;
        }

        include 'App/Vue/template.php';
    }

}
