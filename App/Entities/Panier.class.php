<?php
namespace CTC\App\Entities;

/**
 * Description of Panier
 *
 * @author Christine Cheng
 */
class Panier {
    
    private $list = [];
    
    public function add($book) {
        $list[] = $book;
        
    }
    
}
