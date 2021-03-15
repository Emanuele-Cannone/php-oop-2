<?php

require 'Utente.php'; // per richiamare la classe
require 'InfoUtente.php'; // per richiamare l'estensione della classe


// UTENTE 1
$utente1 = new InfoUtente('Utente1', 'password1', 'Maschio');
$utente1 -> nome = 'Emanuele';
$utente1 -> cognome = 'Cannone';
$utente1 -> genere = 'Uomo';
$utente1 -> setColor('Uomo');
$colore1 = $utente1->getColor();
$utente1 -> setPassword('Emanuele', 'Cannone');
$utente1 -> getPassword();



$utente2 = new InfoUtente('Utente2', 'password1', 'Maschio');
$utente2 -> nome = 'Emanuela';
$utente2 -> cognome = 'Cannone';
$utente2 -> genere = 'Donna';
$utente2 -> setColor('Donna');
$colore2 = $utente2->getColor();
$utente2 -> setPassword('Emanuele', 'Cannone');
$utente2 -> getPassword();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h2> <?php echo $utente1->nome .' ' .$utente1->cognome ?></h2>
    <p><?php echo $utente1->genere ?></p>
    <p><?php echo $utente1->getColor() ?></p>



    <h2> <?php echo $utente2->nome .' ' .$utente2->cognome ?></h2>
    <p><?php echo $utente2->genere ?></p>
    <p><?php echo $utente2->getColor() ?></p>



</body>
</html>




