<?php

namespace CTC\App\Dao;
use PDO;
use PDOException;
use CTC\App\Entities\User;
use CTC\App\Entities\Book;

/**
 * Description of Dao
 *
 * @author Christine Cheng
 */
class Dao {
    // 取得BDD的資料
    private const GET_USER = 'SELECT * FROM users WHERE nom=:nom';
    private const GET_USERID = 'SELECT * FROM users WHERE idUser=:idUser';
    private const LIST_USER = "SELECT * FROM users WHERE NOT status='admin' ORDER BY idUser ASC";
    private const LIST_ADMIN = "SELECT * FROM users WHERE status='admin' ORDER BY idUser ASC";
    private const LIST_BOOK = 'SELECT * FROM books ORDER BY idBook ASC';
    private const GET_BOOK = 'SELECT idBook, titre, isbn, categ, auteur, editeur, bookImage, theme, traducteur, year, format,langue, langue_orig, resume FROM books JOIN category ON category.idCateg = books.categ WHERE category.type = :categ';
    private const GET_BOOKID = 'SELECT * FROM books WHERE idBook = :idBook';
    private const LIST_CATEG = 'SELECT * FROM category ORDER BY idCateg ASC';
    private const LIST_EMP = "SELECT users.nom, users.prenom, users.ncard, users.status, books.titre, books.isbn, books.idBook, emprunt.returnStatus, emprunt.Emp_Date, emprunt.Retour_Date, emprunt.amende, emprunt.idEmp as emp FROM emprunt JOIN users on users.ncard = emprunt.Ncard JOIN books on books.idBook = emprunt.BookId WHERE emprunt.returnStatus = '-' ORDER BY emprunt.idEmp ASC";
    private const LIST_RAPPEL = "SELECT users.nom, users.prenom, users.ncard, users.status, books.titre, books.isbn, books.idBook, emprunt.returnStatus, emprunt.Emp_Date, emprunt.Retour_Date, emprunt.amende, emprunt.idEmp as emp FROM emprunt JOIN users on users.ncard = emprunt.Ncard JOIN books on books.idBook = emprunt.BookId WHERE emprunt.returnStatus = '1' ORDER BY emprunt.idEmp ASC";
    private const LIST_RETOUR = "SELECT users.nom, users.prenom, users.ncard, users.status, books.titre, books.isbn, books.idBook, emprunt.returnStatus, emprunt.Emp_Date, emprunt.Retour_Date, emprunt.amende, emprunt.idEmp as emp FROM emprunt JOIN users on users.ncard = emprunt.Ncard JOIN books on books.idBook = emprunt.BookId WHERE emprunt.returnStatus = '0' ORDER BY emprunt.idEmp ASC";
    private const MON_EMP = "SELECT books.titre, books.isbn, emprunt.Emp_Date, emprunt.Retour_Date, emprunt.idEmp as emp, emprunt.amende FROM emprunt JOIN users ON users.ncard = emprunt.Ncard JOIN books ON books.idBook = emprunt.BookId WHERE users.ncard=:ncard AND emprunt.returnStatus = '-'";
    private const STATISTIQUE = "SELECT COUNT(titre) AS 'num_book' FROM books, emprunt WHERE books.idBook = emprunt.BookId ORDER BY books.titre";

    // 增加BDD必須改SQL前面的命令
    private const POST_NEWUSER = 'INSERT INTO users (idUser, sexe, nom, prenom, email, phone, cp, ville, adresse, status, ncard, psw_ncard, debut_Date, fin_Date) VALUES (NULL, :sexe, :nom, :prenom, :email, :phone, :cp, :ville, :adresse, :status, :ncard, :psw_ncard, :debut_Date, :fin_Date )';
    private const ADD_NEWBOOK = 'INSERT INTO books(idBook, titre, isbn, categ, auteur, editeur, bookImage, theme, traducteur, year, format, langue, langue_orig, resume) VALUES (NULL, :titre, :isbn, :categ, :auteur, :editeur, :bookImage, :theme, :traducteur, :year, :format, :langue, :langue_orig, :resume)';
    private const ADD_CATEG = 'INSERT INTO category(idCateg, type, status) VALUES(NULL, :type, :status)';
    private const EMP_BOOK = 'INSERT INTO emprunt(idEmp, BookId, Ncard, Emp_Date, Retour_Date) VALUES(NULL, :BookId, :Ncard, :Emp_Date, :Retour_Date)';


    //修改BDD的資料     // 注意!順序很重要!
    private const DELETE_USER = 'DELETE FROM users WHERE idUser=:idUser LIMIT 1';
    private const USER_UPDATE = 'UPDATE users SET email=:email, phone=:phone WHERE idUser=:idUser LIMIT 1' ;
    private const ADMIN_UPDATE = 'UPDATE users SET nom=:nom, prenom=:prenom, email=:email, phone=:phone, cp=:cp, ville=:ville, adresse=:adresse, ncard=:ncard, psw_ncard=:psw_ncard WHERE idUser=:idUser LIMIT 1';
    private const UPDATE_USERS = 'UPDATE users SET email=:email, phone=:phone, cp=:cp, ville=:ville, adresse=:adresse, debut_Date=:debut_Date, fin_Date=:fin_Date WHERE idUser=:idUser LIMIT 1';
    private const UPDATE_BOOK = 'UPDATE books SET titre=:titre, isbn=:isbn, categ=:categ, auteur=:auteur, editeur=:editeur, bookImage=:bookImage, theme=:theme, traducteur=:traducteur, year=:year, format=:format, langue=:langue, langue_orig=:langue_orig, resume=:resume WHERE idBook=:idBook LIMIT 1';
    private const DELETE_BOOK = 'DELETE FROM books WHERE idBook=:idBook LIMIT 1';
    private const UPDATE_CATEG = 'UPDATE category SET type=:type, status=:status WHERE idCateg=:idCateg LIMIT 1';
    private const DELETE_CATEG = 'DELETE FROM category WHERE idCateg=:idCateg LIMIT 1';
    private const UPDATE_EMP = 'UPDATE emprunt SET BookId=:BookId, Ncard=:Ncard, Emp_Date=:Emp_Date, Retour_Date=:Retour_Date, returnStatus=:returnStatus, amende=:amende WHERE idEmp=:idEmp LIMIT 1';
    private const DELETE_EMP = 'DELETE FROM emprunt WHERE idEmp=:idEmp LIMIT 1';


    private function connexion() {
        try {
            $connect = new PDO('mysql:host=localhost;dbname=filrouge;charset=utf8', 'root', '');
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo 'Échec lors de la connexion : ' . $ex->getMessage();
            die();
        }
        return $connect;
    }


    public function getUserByNom($nom) {
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::GET_USER);
        $stm->bindParam(':nom', $nom);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'CTC\App\Entities\User');
        // $object = $stm->fetchObject();
        // $user = new User($object->idUser, $object->nom, $object->prenom, $object->email, $object->psw_ncard, $object->status);
        $user = $stm->fetch();
        return $user;
    }

    public function insertNewUser($sexe, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $status, $ncard, $psw_ncard, $debut_Date, $fin_Date) {
        try{
            $bdd = $this->connexion();
            $nomUPP = strtoupper($nom);
            $prenomUPP = strtoupper($prenom);
            $ncardUPP = strtoupper($ncard);
            $mdpUPP = strtoupper($psw_ncard);
            $villeUPP = strtoupper($ville);
            $adresseUPP = strtoupper($adresse);
            $pswBcrypt = password_hash($mdpUPP, PASSWORD_BCRYPT);

            $rep = $bdd->prepare(self::POST_NEWUSER);
            $rep->bindParam(':sexe', $sexe);
            $rep->bindParam(':nom', $nomUPP);
            $rep->bindParam(':prenom', $prenomUPP);
            $rep->bindParam(':email', $email);
            $rep->bindParam(':phone', $phone);
            $rep->bindParam(':cp', $cp);
            $rep->bindParam(':ville', $villeUPP);
            $rep->bindParam(':adresse', $adresseUPP);
            $rep->bindParam(':status', $status);
            $rep->bindParam(':ncard', $ncardUPP);
            $rep->bindParam(':psw_ncard', $pswBcrypt);
            $rep->bindParam(':debut_Date', $debut_Date);
            $rep->bindParam(':fin_Date', $fin_Date);
            $rep->execute();
        } catch(PDOException $errInsert){
            echo 'Erreur : ' . $errInsert->getMessage();
        }
    }

    public function deleteUser($idUser){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::DELETE_USER);
        $stm->bindValue(':idUser', $idUser, PDO::PARAM_INT);
        $stm->execute();
    }

    public function editUser($idUser, $email, $phone){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::USER_UPDATE);
        $rep->bindParam(':idUser', $idUser);
        $rep->bindParam(':email', $email);
        $rep->bindParam(':phone', $phone);
        $rep->execute();
    }

    public function edit_admin($idUser, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $ncard, $psw_ncard){
        try{
            $bdd = $this->connexion();
            $nomUPP = strtoupper($nom);
            $prenomUPP = strtoupper($prenom);
            $ncardUPP = strtoupper($ncard);
            $mdpUPP = strtoupper($psw_ncard);
            $villeUPP = strtoupper($ville);
            $adresseUPP = strtoupper($adresse);
            $pswBcrypt = password_hash($mdpUPP, PASSWORD_BCRYPT);

            $rep = $bdd->prepare(self::ADMIN_UPDATE);
            $rep->bindParam(':idUser', $idUser);
            $rep->bindParam(':nom', $nomUPP);
            $rep->bindParam(':prenom', $prenomUPP);
            $rep->bindParam(':email', $email);
            $rep->bindParam(':phone', $phone);
            $rep->bindParam(':cp', $cp);
            $rep->bindParam(':ville', $villeUPP);
            $rep->bindParam(':adresse', $adresseUPP);
            $rep->bindParam(':ncard', $ncardUPP);
            $rep->bindParam(':psw_ncard', $pswBcrypt);
            $rep->execute();
        } catch(PDOException $errInsert){
            echo 'Erreur : ' . $errInsert->getMessage();
        }
    }

    public function updateUser($idUser, $email, $phone, $cp, $ville, $adresse, $debut_Date, $fin_Date){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::UPDATE_USERS);
        $rep->bindParam(':idUser', $idUser);
        $rep->bindParam(':email', $email);
        $rep->bindParam(':phone', $phone);
        $rep->bindParam(':cp', $cp);
        $rep->bindParam(':ville', $ville);
        $rep->bindParam(':adresse', $adresse);
        $rep->bindParam(':debut_Date', $debut_Date);
        $rep->bindParam(':fin_Date', $fin_Date);
        $rep->execute();
    }


    public function getUserById($idUser){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::GET_USERID);
        $rep->bindParam(':idUser', $idUser, PDO::PARAM_INT);
        $rep->execute();
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        $userID = $rep->fetch();
        return $userID;
    }

    public function getAllUser() {
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::LIST_USER);
        $rep->execute();
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        $user = $rep->fetchAll();
        //$user = $rep->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }

    public function list_admin(){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::LIST_ADMIN);
        $rep->execute();
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        $user = $rep->fetchAll();
        return $user;
    }

    public function mon_listEmp($ncard){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::MON_EMP);
        $rep->bindParam(':ncard', $ncard, PDO::PARAM_STR);
        $rep->execute();
        //$rep->setFetchMode(PDO::FETCH_ASSOC);
        $monEmp = $rep->fetchAll(PDO::FETCH_OBJ);
        return $monEmp;
    }

    
    public function search_ncard($key){
        try{
            $q = "SELECT * FROM users WHERE ncard LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    public function search_nom($key){
        try{
            $q = "SELECT * FROM users WHERE nom LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    public function search_prenom($key){
        try{
            $q = "SELECT * FROM users WHERE prenom LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    public function search_phone($key){
        try{
            $q = "SELECT * FROM users WHERE phone LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }












    public function addNewBook($titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume){
        try {
            $bdd = $this->connexion();
            $titreUPP = strtoupper($titre);
        
            $rep = $bdd->prepare(self::ADD_NEWBOOK);
            $rep->bindParam(':titre', $titreUPP);
            $rep->bindParam(':isbn', $isbn);
            $rep->bindParam(':categ', $categ);
            $rep->bindParam(':auteur', $auteur);
            $rep->bindParam(':editeur', $editeur);
            $rep->bindParam(':bookImage', $bookImage);
            $rep->bindParam(':theme', $theme);
            $rep->bindParam(':traducteur', $traducteur);
            $rep->bindParam(':year', $year);
            $rep->bindParam(':format', $format);
            $rep->bindParam(':langue', $langue);
            $rep->bindParam(':langue_orig', $langue_orig);
            $rep->bindParam(':resume', $resume);
            $rep->execute();
        } catch(PDOException $errInsert){
            echo 'Erreur : ' . $errInsert->getMessage();
        }
    }

    public function getBookByCateg($cat) {
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::GET_BOOK);
        $stm->bindParam(':categ', $cat);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, 'CTC\App\Entities\Book');
        $liste = [];
        while(($book = $stm->fetch()) !== false){
            $liste[] = $book;
        }
        return $liste;
    }

    public function getBookById($id){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::GET_BOOKID);
        $stm->bindParam(':idBook', $id);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_CLASS, 'CTC\App\Entities\Book');
        $book = $stm->fetch();
        return $book;
    }

    public function getAllBook(){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::LIST_BOOK);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $book = $stm->fetchAll();
        return $book;
    }

    public function deleteBook($idBook){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::DELETE_BOOK);
        $stm->bindValue(':idBook', $idBook, PDO::PARAM_INT);
        $idBook = $stm->execute();
        return $idBook;
    }

    public function search_title($key){
        try{
            $q = "SELECT * FROM books WHERE titre LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $stm->setFetchMode(PDO::FETCH_CLASS, 'CTC\App\Entities\Book');
            $liste = [];
            while(($book = $stm->fetch()) !== false){
                $liste[] = $book;
            }
            return $liste;
    }

    public function search_titre($key){
        try{
            $q = "SELECT * FROM books WHERE titre LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    public function search_isbn($key){
        try{
            $q = "SELECT * FROM books WHERE isbn LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    public function search_auteur($key){
        try{
            $q = "SELECT * FROM books WHERE auteur LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }

    public function search_theme($key){
        try{
            $q = "SELECT * FROM books WHERE theme LIKE ?";
            $bdd = $this->connexion();
            $stm = $bdd->prepare($q);
            $stm->execute(array("%$key%"));
        }
        catch(PDOException $e){
             echo 'Erreur : ' . $e->getMessage();
            }
            if(!$stm->rowCount()){
                return false; #this will return false if data isn't found. 
            }
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    }


    public function editBook($idBook, $titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume){
        $bdd = $this->connexion();
        $titreUPP = strtoupper($titre);
        $rep = $bdd->prepare(self::UPDATE_BOOK);
        $rep->bindParam(':idBook', $idBook);
        $rep->bindParam(':titre', $titreUPP);
        $rep->bindParam(':isbn', $isbn);
        $rep->bindParam(':categ', $categ);
        $rep->bindParam(':auteur', $auteur);
        $rep->bindParam(':editeur', $editeur);
        $rep->bindParam(':bookImage', $bookImage);
        $rep->bindParam(':theme', $theme);
        $rep->bindParam(':traducteur', $traducteur);
        $rep->bindParam(':year', $year);
        $rep->bindParam(':format', $format);
        $rep->bindParam(':langue', $langue);
        $rep->bindParam(':langue_orig', $langue_orig);
        $rep->bindParam(':resume', $resume);
        $rep->execute();
    }



    public function ajout_categ($titreCateg, $statusCateg){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::ADD_CATEG);
        $rep->bindParam(':type', $titreCateg);
        $rep->bindParam(':status', $statusCateg);
        $rep->execute();
    }

    public function getAllCateg(){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::LIST_CATEG);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $categs= $stm->fetchAll();
        return $categs;
    }

    public function edit_list_categ($idCateg, $titreCateg, $statusCateg){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::UPDATE_CATEG);
        $stm->bindParam(':idCateg', $idCateg);
        $stm->bindParam(':type',$titreCateg);
        $stm->bindParam(':status',$statusCateg);
        $stm->execute();
    }

    public function del_categ($idCateg){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::DELETE_CATEG);
        $stm->bindValue(':idCateg', $idCateg, PDO::PARAM_INT);
        $idCateg = $stm->execute();
        return $idCateg;
    }

    public function newEmprunt($ncard, $bookid, $emp_date, $re_date){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::EMP_BOOK);
        $rep->bindParam(':Ncard', $ncard);
        $rep->bindParam(':BookId', $bookid);
        $rep->bindParam(':Emp_Date', $emp_date);
        $rep->bindParam(':Retour_Date', $re_date);
        $rep->execute();
    }

    public function listEmp(){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::LIST_EMP);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $emp = $stm->fetchAll();
        return $emp;
    }
    public function listRappel(){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::LIST_RAPPEL);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $emp = $stm->fetchAll();
        return $emp;
    }
    public function listRetour(){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::LIST_RETOUR);
        $stm->execute();
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $emp = $stm->fetchAll();
        return $emp;
    }

    public function edit_list_emprunt($idEmp, $BookId, $Ncard, $Emp_Date, $Retour_Date, $returnStatus, $amende){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::UPDATE_EMP);
        $stm->bindParam(':idEmp', $idEmp);
        $stm->bindParam(':BookId', $BookId);
        $stm->bindParam(':Ncard', $Ncard);
        $stm->bindParam(':Emp_Date', $Emp_Date);
        $stm->bindParam(':Retour_Date', $Retour_Date);
        $stm->bindParam(':returnStatus', $returnStatus);
        $stm->bindParam(':amende', $amende);
        $stm->execute();
    }

    public function del_emprunt($idEmp){
        $bdd = $this->connexion();
        $stm = $bdd->prepare(self::DELETE_EMP);
        $stm->bindValue(':idEmp', $idEmp, PDO::PARAM_INT);
        $idEmp = $stm->execute();
        return $idEmp;
    }

    public function listStati(){
        $bdd = $this->connexion();
        $rep = $bdd->prepare(self::STATISTIQUE);
        //$rep->bindParam(':ncard', $ncard, PDO::PARAM_STR);
        $rep->execute();
        $rep->setFetchMode(PDO::FETCH_ASSOC);
        $sta = $rep->fetchAll();
                var_dump($sta);die;
        return $sta;
    }


}
