<?php
namespace CTC\App\Entities;

/**
 * Description of User
 *
 * @author Christine Cheng
 */
class User {
    //propriétés
    private $idUser;
    private $nom;
    private $prenom;
   
    private $email;
    private $psw_ncard;
    private $status;

    private $sexe;
    private $phone;
    private $cp;
    private $ville;
    private $adresse;
    private $debut_Date;
    private $fin_Date;
    
 
    function __construct($idUser=0, $nom='', $prenom='', $email = '', $status= '', $psw_ncard = '',$sexe = '', $phone ='', $cp ='', $ville = '', $adresse ='',$debut_Date = '', $fin_Date='') {
        $this->idUser = $idUser;
        $this->nom = $nom;
        $this->prenom = $prenom;

        $this->sexe = $sexe;
        $this->email = $email;
        $this->phone = $phone;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->adresse = $adresse;
        $this->status = $status;
        $this->psw_ncard = $psw_ncard;
        
        $this->debut_Date = $debut_Date;
        $this->fin_Date = $fin_Date;
    }

    
    public function getIdUser()
    {
        return $this->idUser;
    }

     
    public function getNom()
    {
        return $this->nom;
    }

     
    function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

     
    function getPrenom()
    {
        return $this->prenom;
    }

    
    function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    
    
    function getSexe()
    {
            return $this->sexe;
    }

    function setSexe($sexe)
    {
            $this->sexe = $sexe;

            return $this;
    }
    
    
    function getPhone()
    {
        return $this->phone;
    }

    
    function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    
    function getEmail()
    {
        return $this->email;
    }

    
    function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

     
    function getPsw_ncard()
    {
        return $this->psw_ncard;
    }

    function setPsw_ncard($psw_ncard)
    {
        $this->psw_ncard = $psw_ncard;

        return $this;
    }
 
    function getStatus()
    {
        return $this->status;
    }
   
    
    function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

     
    function getCp()
    {
            return $this->cp;
    }

    function setCp($cp)
    {
            $this->cp = $cp;

            return $this;
    }
    
    function getVille()
    {
        return $this->ville;
    }
 
    function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

     
    function getAdresse()
    {
        return $this->adresse;
    }
 
    function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

     
    function getDebut_Date()
    {
        return $this->debut_Date;
    }

  
    function setDebut_Date($debut_Date)
    {
        $this->debut_Date = $debut_Date;

        return $this;
    }

    
    function getFin_Date()
    {
        return $this->fin_Date;
    }

    
    function setFin_Date($fin_Date)
    {
        $this->fin_Date = $fin_Date;

        return $this;
    }

    
}
