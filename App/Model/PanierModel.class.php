<?php
namespace CTC\App\Model;
use CTC\App\Dao\Dao;
use CTC\App\Entities\Book;
use CTC\App\Entities\Article;
/**
 * Description of PanierModel
 *
 * @author Christine Cheng
 */
class PanierModel {
    
    public function addBook($idBook){
        global $panier;
            $bdd = new Dao();
            $book = $bdd->getBookById($idBook);
            //因為上面動作找到符合的book,為了加入購物籃所需,而必須創article
            $article = new Article($book);
            $panier[$idBook] = $article;
    }   

    public function vider_panier(){
        global $panier;
        $panier = [];
        
    }

    public function del_book($idBook){
        global $panier;
        unset($panier[$idBook]);
    }
    
}
