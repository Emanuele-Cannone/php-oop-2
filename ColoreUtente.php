<?php


// il trait è un metodo che utilizzo come funzione dormiente e che 
// richiamo quando voglio con:

// use NomeFunzione senza estensione del file

// e

// require NomeFunzione.php






trait ColoreUtente {

    public function setColor($genere){

        if ($this->genere == 'Uomo') {
            $this->coloreAvatar = 'Blue';
        } else {
            $this->coloreAvatar = 'Pink';
        }
    }

    public function getColor(){
        return $this->coloreAvatar;
    }

}


