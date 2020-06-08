<?php
namespace CTC\App\Model;
use CTC\App\Dao\Dao;

/**
 * Description of BookModel
 *
 * @author Christine Cheng
 */
class BookModel {

    public function addBook($titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume){
        $bdd = new Dao();
        $new = $bdd->addNewBook($titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume);
        if(!is_bool($new)){
            return $new;
        } else {
            throw new \ErrorException('Insertion incorrect!');
        }
    }

    public function bookList($categ){
        $bdd= new Dao();
        $list = $bdd->getBookByCateg($categ);
        return $list;
    }

    public function listBooks(){
        $bdd = new Dao();
        $showList = $bdd->getAllBook();
        return $showList;
    }

    public function delete($idBook){
        $bdd = new Dao();
        $deleteBook = $bdd->deleteBook($idBook);
        return $deleteBook;
    }

    public function search_title($key){
        $bdd = new Dao();
        $result = $bdd->search_title($key);
        
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_titre($key){
        $bdd = new Dao();
        $result = $bdd->search_titre($key);
        
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_isbn($key){
        $bdd = new Dao();
        $result = $bdd->search_isbn($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_auteur($key){
        $bdd = new Dao();
        $result = $bdd->search_auteur($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function search_theme($key){
        $bdd = new Dao();
        $result = $bdd->search_theme($key);
        if(!empty($result)){
            return $result;
        } else {
            throw new \ErrorException("Votre recherche n'a pas trouvé! ");
        }
    }

    public function editBook($idBook, $titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume){
        $bdd = new Dao();
        $update = $bdd->editBook($idBook, $titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume);
        return $update;
    }


    public function ajout_categ($titreCateg, $statusCateg){
        $bdd = new Dao();
        $newCateg = $bdd->ajout_categ($titreCateg, $statusCateg);
        return $newCateg;
    }

    public function listCategs(){
        $bdd = new Dao();
        $showList = $bdd->getAllCateg();
        return $showList;
    }

    public function edit_list_categ($idCateg, $titreCateg, $statusCateg){
        $bdd = new Dao();
        $update = $bdd->edit_list_categ($idCateg, $titreCateg, $statusCateg);
        return $update;
    }

    public function del_categ($id){
        $bdd = new Dao();
        $deleteCateg = $bdd->del_categ($id);
        return $deleteCateg;
    }

    public function newEmprunt($ncard, $bookid, $emp_date, $re_date){
        $bdd = new Dao();
        $emp = $bdd->newEmprunt($ncard, $bookid, $emp_date, $re_date);
        return $emp;
    }

    public function listEmp(){
        $bdd = new Dao();
        $showList = $bdd->listEmp();
        return $showList;
    }
    public function listRappel(){
        $bdd = new Dao();
        $showList = $bdd->listRappel();
        return $showList;
    }
    public function listRetour(){
        $bdd = new Dao();
        $showList = $bdd->listRetour();
        return $showList;
    }



    public function edit_list_emprunt($idEmp, $BookId, $Ncard, $Emp_Date, $Retour_Date, $returnStatus, $amende){
        $bdd = new Dao();
        $update = $bdd->edit_list_emprunt($idEmp, $BookId, $Ncard, $Emp_Date, $Retour_Date, $returnStatus, $amende);
        return $update;
    }

    public function del_emprunt($id){
        $bdd = new Dao();
        $deleteEmp = $bdd->del_emprunt($id);
        return $deleteEmp;
    }

    public function listStati(){
        $bdd = new Dao();
        $showList = $bdd->listStati();
        return $showList;
    }

}