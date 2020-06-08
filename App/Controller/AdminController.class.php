<?php
// 自創的APP檔名別忘了後面加上class
namespace CTC\App\Controller;

use CTC\App\Model\UserModel;
use CTC\App\Model\BookModel;
use CTC\App\Model\SearchModel;
use CTC\App\Entities\User;
use CTC\App\Entities\Book;


class AdminController{

    public function make($action){
        global $connect;
        global $nom, $prenom, $status, $idUser;
        switch($action){
            case 'admin_home':
                $message = '';
                $vue = 'admin_home';
                break;

            case 'search':
                try{
                    $rechercher = filter_input(INPUT_POST, 'rechercher');
                    $mod = new BookModel();
                    $results = $mod->search_isbn($_POST['rechercher']);
                    $vue = 'admin_home';
                } catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue ='admin_home';
                }
                break;

            case 'search_book':
                try{
                    $searchtype = filter_input(INPUT_POST, 'searchtype');
                    $found_book = filter_input(INPUT_POST, 'found_book');
                    if($searchtype === "isbn"){
                        $mod = new BookModel();
                        $results = $mod->search_isbn($found_book);
                        $vue = 'admin_home';
                    } elseif ($searchtype === "titre"){
                        $mod = new BookModel();
                        $results = $mod->search_titre($found_book);
                        $vue = 'admin_home';
                    } elseif($searchtype === "auteur"){
                        $mod = new BookModel();
                        $results = $mod->search_auteur($found_book);
                        $vue = 'admin_home';
                    } elseif ($searchtype === "theme"){
                        $mod = new BookModel();
                        $results = $mod->search_theme($found_book);
                        $vue = 'admin_home';
                    }

                } catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue ='admin_home';
                }
                break;

            case 'search_user':
                try{
                    $searchtype = filter_input(INPUT_POST, 'searchtype');
                    $found_user = filter_input(INPUT_POST, 'found_user');
                    if($searchtype === 'ncard'){
                        $mod = new UserModel();
                        $resultat = $mod->search_ncard($found_user);
                        $vue = 'admin_home';
                    } elseif($searchtype === 'nom'){
                        $mod = new UserModel();
                        $resultat = $mod->search_nom($found_user);
                        $vue = 'admin_home';
                    } elseif ($searchtype === 'prenom'){
                        $mod = new UserModel();
                        $resultat = $mod->search_prenom($found_user);
                        $vue = 'admin_home';
                    } elseif ($searchtype === 'phone'){
                        $mod = new UserModel();
                        $resultat = $mod->search_phone($found_user);
                        $vue = 'admin_home';
                    }

                } catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue ='admin_home';
                }
                break;


// gestion ouvrage
            case 'form_addbook':
                $message = '';
                $vue = 'admin/newbook';
                break;

            case 'addbook':
                $mod = new BookModel();
                try{
                    $titre = filter_input(INPUT_POST, 'titre');
                    $isbn = filter_input(INPUT_POST, 'isbn');
                    $categ = filter_input(INPUT_POST, 'categ');
                    $auteur = filter_input(INPUT_POST, 'auteur');
                    $editeur = filter_input(INPUT_POST, 'editeur');
                    $bookImage = filter_input(INPUT_POST, 'bookImage');
                    $theme = filter_input(INPUT_POST, 'theme');
                    $traducteur = filter_input(INPUT_POST, 'traducteur');
                    $year = filter_input(INPUT_POST, 'year');
                    $format = filter_input(INPUT_POST, 'format');
                    $langue = filter_input(INPUT_POST, 'langue');
                    $langue_orig = filter_input(INPUT_POST, 'langue_orig');
                    $resume = filter_input(INPUT_POST, 'resume');
                    $mod->addBook($titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume);
                    $vue = 'admin/listBooks';
                    $books = $mod->listBooks();
                }catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue = 'admin/newBook';
                }
                break;
            case 'list_books':
                $mod = new BookModel();
                $books = $mod->listBooks();
                $vue = 'admin/listBooks';
                break;

            case 'deleteBook':
                $id= filter_input(INPUT_GET, 'idBook');
                $mod = new BookModel();
                $idBook = $mod->delete($id);
                $vue = 'admin/listBooks';
                $books = $mod->listBooks();
                break;

            case 'edit_book':
                $mod = new BookModel();
                $idBook = filter_input(INPUT_POST, 'idBook');
                $titre = filter_input(INPUT_POST, 'titre');
                $isbn = filter_input(INPUT_POST, 'isbn');
                $categ = filter_input(INPUT_POST, 'categ');
                $auteur = filter_input(INPUT_POST, 'auteur');
                $editeur = filter_input(INPUT_POST, 'editeur');
                $bookImage = filter_input(INPUT_POST, 'bookImage');
                $theme = filter_input(INPUT_POST, 'theme');
                $traducteur = filter_input(INPUT_POST, 'traducteur');
                $year = filter_input(INPUT_POST, 'year');
                $format = filter_input(INPUT_POST, 'format');
                $langue = filter_input(INPUT_POST, 'langue');
                $langue_orig = filter_input(INPUT_POST, 'langue_orig');
                $resume = filter_input(INPUT_POST, 'resume');
                $mod->editBook($idBook, $titre, $isbn, $categ, $auteur, $editeur, $bookImage, $theme, $traducteur, $year, $format, $langue, $langue_orig, $resume);
                $books = $mod->listBooks();
                $vue = 'admin/listBooks';
                break;

            
            case 'form_emprunt':
                $message = '';
                $vue = 'admin/ajout_emprunt';
                break;

            case 'emprunter': //加入insert的功能
                $mod = new BookModel();
                $ncard = filter_input(INPUT_POST, 'ncard');
                $bookid = filter_input(INPUT_POST, 'bookid');
                $emp_date = filter_input(INPUT_POST, 'Emp_Date');
                $re_date = filter_input(INPUT_POST, 'Retour_Date');
                $mod->newEmprunt($ncard, $bookid, $emp_date, $re_date);
                $vue = 'admin/list_emprunt';
                $emps = $mod->listEmp();
                break;

            case 'list_emprunt': //表列list的功能+修改+刪除
                $mod = new BookModel();
                $emps = $mod->listEmp();
                $vue = 'admin/list_emprunt';
                break;
            case 'list_rappel': 
                $mod = new BookModel();
                $emps = $mod->listRappel();
                $vue = 'admin/list_rappel';
                break;
            case 'list_return': 
                $mod = new BookModel();
                $emps = $mod->listRetour();
                $vue = 'admin/list_return';
                break;

            case 'edit_list_emprunt': 
                $mod = new BookModel();
                $idEmp = filter_input(INPUT_POST, 'idEmp');
                $Ncard = filter_input(INPUT_POST, 'ncard');
                $BookId = filter_input(INPUT_POST, 'idBook');
                $Emp_Date = filter_input(INPUT_POST, 'Emp_Date');
                $Retour_Date = filter_input(INPUT_POST, 'Retour_Date');
                $returnStatus = filter_input(INPUT_POST, 'returnStatus');
                $amende = filter_input(INPUT_POST, 'amende');
                $mod->edit_list_emprunt($idEmp, $BookId, $Ncard, $Emp_Date, $Retour_Date, $returnStatus, $amende);
                $vue = 'admin/list_emprunt';
                $emps = $mod->listEmp();
                break;
            case 'del_list_emprunt': 
                $id = filter_input(INPUT_GET, 'idEmp');
                $mod = new BookModel();
                $idEmp = $mod->del_emprunt($id);
                $vue = 'admin/list_emprunt';
                $emps = $mod->listEmp();
                break;

            
            case 'form_categ':
                $vue = 'admin/ajout_categ';
                break;

            case 'ajout_categ': //加入insert的功能
                $mod = new BookModel();
                $titreCateg = filter_input(INPUT_POST, 'categ');
                $statusCateg = filter_input(INPUT_POST, 'sta_categ');
                $mod->ajout_categ($titreCateg, $statusCateg);
                $vue = 'admin/list_categ';
                $categs = $mod->listCategs();
                break;

            case 'list_categ': //表列list的功能+修改+刪除
                $mod = new BookModel();
                $categs = $mod->listCategs();
                $vue = 'admin/list_categ';
                break;
            case 'edit_list_categ': 
                $mod = new BookModel();
                $idCateg = filter_input(INPUT_POST, 'idCateg');
                $titreCateg = filter_input(INPUT_POST, 'categ');
                $statusCateg = filter_input(INPUT_POST, 'sta_categ');
                $mod->edit_list_categ($idCateg, $titreCateg, $statusCateg);
                $categs = $mod->listCategs();
                $vue = 'admin/list_categ';
                break;
            case 'del_list_categ': 
                $id = filter_input(INPUT_GET, 'idCateg');
                $mod = new BookModel();
                $idCateg = $mod->del_categ($id);
                $vue = 'admin/list_categ';
                $categs = $mod->listCategs();
                break;

            case 'statistique':
                $mod = new BookModel();
                $stas = $mod->listStati();
                $vue = 'admin/statistique';
                break;

            

            
// gestion usager
            case 'form_insert':
                $message = '';
                $vue = 'admin/insertUser';
                break;

            case 'insert_user':
                $message = '';
                $mod = new UserModel();
                try{
                    $sexe = filter_input(INPUT_POST, 'sexe');
                    $nom = filter_input(INPUT_POST, 'nom');
                    $prenom = filter_input(INPUT_POST, 'prenom');
                    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                    $phone = filter_input(INPUT_POST, 'phone');
                    $cp = filter_input(INPUT_POST, 'cp');
                    $ville = filter_input(INPUT_POST, 'ville');
                    $adresse = filter_input(INPUT_POST, 'adresse');
                    $status = filter_input(INPUT_POST, 'status');
                    $ncard = filter_input(INPUT_POST, 'ncard');
                    $psw_ncard = filter_input(INPUT_POST, 'psw_ncard');
                    $debut_Date = filter_input(INPUT_POST, 'debut_Date');
                    $fin_Date = filter_input(INPUT_POST, 'fin_Date');
                    $mod->insert($sexe, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $status, $ncard, $psw_ncard, $debut_Date, $fin_Date);
                    $vue = 'admin/listUsers';
                    $users = $mod->list();
                }catch(\ErrorException $er){
                    $message = $er->getMessage();
                    $vue = 'admin/insertUser';
                }
                break;

            case 'list_users':
                $mod = new UserModel();
                $users = $mod->list();
                $vue = 'admin/listUsers';
                break;

            case 'list_admin':
                $mod = new UserModel();
                $users = $mod->list_admin();
                $vue = 'admin/list_admin';
                break;

            case 'deleteUser':
                $id = filter_input(INPUT_GET, 'idUser');
                $mod = new UserModel();
                $idUser = $mod->delete($id);
                // 注意!此處的idUser是在頁面上使用的變數要一樣
                $vue = 'admin/listUsers';
                $users = $mod->list();
                break;

            case 'update_user':
                $mod = new UserModel();
                // 若要能修改資料, 必須在VUE表格的頁面加入idUser的input並且hidden,否則抓不到idUser的資料
                $idUser = filter_input(INPUT_POST, 'idUser');
                $email = filter_input(INPUT_POST, 'email');
                $phone = filter_input(INPUT_POST, 'phone');
                $cp = filter_input(INPUT_POST, 'cp');
                $ville = filter_input(INPUT_POST, 'ville');
                $adresse = filter_input(INPUT_POST, 'adresse');
                $debut_Date = filter_input(INPUT_POST, 'debut_Date');
                $fin_Date = filter_input(INPUT_POST, 'fin_Date');
                $mod->updateUser($idUser, $email, $phone, $cp, $ville, $adresse, $debut_Date, $fin_Date);
                $users = $mod->list();
                $vue = 'admin/listUsers';
                break;

            case 'admin_compte':
                $prenom = filter_input(INPUT_GET, 'prenom');
                $email = filter_input(INPUT_GET, 'email');
                $phone = filter_input(INPUT_GET, 'phone');
                $cp = filter_input(INPUT_GET, 'cp');
                $ville = filter_input(INPUT_GET, 'ville');
                $adresse = filter_input(INPUT_GET, 'adresse');
                $ncard = filter_input(INPUT_GET, 'ncard');
                $psw_ncard = filter_input(INPUT_GET, 'psw_ncard');
                $mod = new UserModel();
                $user = $mod->getUserById($idUser);
                $vue = 'admin/admin_compte';
                break;
            case 'edit_admin':
                $mod = new UserModel();
                $email = filter_input(INPUT_POST, 'email');
                $phone = filter_input(INPUT_POST, 'phone');
                $cp = filter_input(INPUT_POST, 'cp');
                $ville = filter_input(INPUT_POST, 'ville');
                $adresse = filter_input(INPUT_POST, 'adresse');
                $ncard = filter_input(INPUT_POST, 'ncard');
                $psw_ncard = filter_input(INPUT_POST, 'psw_ncard');
                $mod->edit_admin($idUser, $nom, $prenom, $email, $phone, $cp, $ville, $adresse, $ncard, $psw_ncard);
                $user = $mod->getUserById($idUser);
                $vue = 'admin/admin_compte';
                break;

            default:
                break;

        }

        include 'App/Vue/admin_template.php';
    }

}