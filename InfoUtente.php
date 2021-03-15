<?php

require 'ColoreUtente.php';


class InfoUtente extends Utente {

    use ColoreUtente;
    
    private $coloreAvatar;
    public $amici;
    public $post;
    public $follower;
    public $gruppi;
    public $genere;
    
    
    

    public function __construct($_nome, $_password, $_genere){
        parent::__construct($_nome);
        $this->genere = $_genere;

    }





    
}

