<?php


require 'PasswordUtente.php'; // per richiamare il file 

class Utente {

    use PasswordUtente; // per richiamare la funzione

    public $nome;
    public $cognome;
    public $email;
    private $password;


    public function __construct($_email){
        $this->email = $_email;
        
    }



}



