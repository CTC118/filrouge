<?php
namespace CTC\App\Entities;

/**
 * Description of Book
 *
 * @author Christine Cheng
 */
class Book {
    private $idBook;
    private $titre;
    private $isbn;
    private $categ;
    private $auteur;
    private $editeur;
    private $bookImage;
    private $theme;
    private $traducteur;
    private $year;
    private $format;
    private $langue;
    private $langue_orig;
    private $resume;

    
     
    function getIdBook(): int
    {
        return $this->idBook;
    }

     
    function getTitre(): string
    {
        return $this->titre;
    }

    
    function getIsbn(): string
    {
        return $this->isbn;
    }

    function getCateg(): int
    {
        return $this->categ;
    }

    
    function getAuteur()
    {
        return $this->auteur;
    }

     
    function getEditeur()
    {
        return $this->editeur;
    }

    
    function getBookImage()
    {
        return $this->bookImage;
    }

    
    function getTheme()
    {
        return $this->theme;
    }

    
    function getTraducteur()
    {
        return $this->traducteur;
    }

     
    function getYear()
    {
        return $this->year;
    }

    
    function getFormat()
    {
        return $this->format;
    }

    
    function getLangue()
    {
        return $this->langue;
    }

    
    function getLangue_orig()
    {
        return $this->langue_orig;
    }

     
    function getResume()
    {
        return $this->resume;
    }
}