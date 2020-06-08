<?php
namespace CTC\App\Entities;

/**
 * Description of Article
 *
 * @author Christine Cheng
 */
class Article {
    
    private $livre;
    
    
    function __construct($livre) {
        $this->livre = $livre;
    
    }

    function getLivre() {
        return $this->livre;
    }

    

    

}
