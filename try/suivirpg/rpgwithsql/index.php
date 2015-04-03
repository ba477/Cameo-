<?php

    $db = new mysqli( 'localhost' , 'root' , '' , 'cameo' );
    if(!$db){
        die('Connexion impossible');
    }
    include( 'main.php' );


    $main = new main();
