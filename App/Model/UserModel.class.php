<?php
namespace CTC\App\Model;
use CTC\App\Dao\Dao;
use CTC\App\Entities\User;
/**
 * Description of UserModel
 *
 * @author Christine Cheng
 */
class UserModel {

    public function verifConnect($nom, $psw_ncard) {

        $bdd = new Dao();
        $user = $bdd->getUserByNom($nom);
        
        // test si user trouvé
        if(!is_bool($user)){
            if (password_verify($psw_ncard, $user->getPsw_ncard())){
               // user ok
                return $user;
            } else {
                
                throw new \ErrorException('Mot de passe incorrect !');
            }
        } else {
            throw new \ErrorException('Utilisateur inconnu !');
        }
    }

    public function deconnect() {
        unset($_SESSION['user']);
        session_destroy();
    }

    public function insert($sexe, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $status, $ncard, $psw_ncard, $debut_Date, $fin_Date) {
        // 加上跳出錯誤訊息(email重複)
        $bdd = new Dao();
        $new = $bdd->insertNewUser($sexe, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $status, $ncard, $psw_ncard, $debut_Date, $fin_Date);
        // if(!is_bool($new)){
        //     return $new;
            
        // } else {
        //     throw new \ErrorException('Insertion incomplète!');
        // }
        return $new;
    }

    public function list(){
        $bdd = new Dao();
        $showList = $bdd->getAllUser();
        return $showList;
    }
    public function list_admin(){
        $bdd = new Dao();
        $showList = $bdd->list_admin();
        return $showList;
    }

    public function delete($idUser){
        $bdd = new Dao();
        $deleteUser = $bdd->deleteUser($idUser);
        
        return $deleteUser;
    }

    public function getUserById($idUser){
        $bdd = new Dao();
        $idUser = $bdd->getUserById($idUser);
        
        return $idUser;
    }

    public function edit($idUser, $email, $phone){
        $bdd = new Dao();
        $update = $bdd->editUser($idUser, $email, $phone);
        return $update;
    }

    public function edit_admin($idUser, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $ncard, $psw_ncard){
        $bdd = new Dao();
        // 加上跳出錯誤訊息(email重複)
        $update = $bdd->edit_admin($idUser, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $ncard, $psw_ncard);
        return $update;
    }

    public function updateUser($idUser, $email, $phone, $cp, $ville, $adresse, $debut_Date, $fin_Date)
    {
        $bdd = new Dao();
        $edit = $bdd->updateUser($idUser, $email, $phone, $cp, $ville, $adresse, $debut_Date, $fin_Date);
        return $edit;
    }

    public function mon_listEmp($ncard){
        $bdd = new Dao();
        $listEmp = $bdd->mon_listEmp($ncard);
        
        return $listEmp;
    }

    public function search_ncard($key){
        $bdd = new Dao();
        $result = $bdd->search_ncard($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_nom($key){
        $bdd = new Dao();
        $result = $bdd->search_nom($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_prenom($key){
        $bdd = new Dao();
        $result = $bdd->search_prenom($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_phone($key){
        $bdd = new Dao();
        $result = $bdd->search_phone($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }
    
}
