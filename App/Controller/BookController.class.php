<?php
namespace CTC\App\Controller;

use CTC\App\Model\BookModel;


/**
 * Description of BookController
 *
 * @author Christine Cheng
 */
class BookController
{
    public function make($action)
    {
        global $connect;
        global $nom, $prenom, $status;
            
        switch ($action) {
            case 'list_books':
                $categ = filter_input(INPUT_GET, 'categ');
                $mod = new BookModel();
                $books = $mod->bookList($categ);
                $vue = 'books';
                break;
            
            case 'search':
                $message='';
                try{
                    $search = filter_input(INPUT_POST, 'search');
                    $mod = new BookModel();
                    $results = $mod->search_title($search);
                    $vue = 'books';
                    // $vue = 'result';  
                } catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue = 'result';
                }
                break;

            case '':
                break;

            default:
                break;

        }
        include 'App/Vue/template.php';
    }
}