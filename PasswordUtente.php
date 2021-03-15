<?php



trait PasswordUtente {

    public function setPassword($nome, $cognome){
        $this->password = $nome .'Password' .$cognome;
    }

    public function getPassword(){
        return $this->password;
    }

}


