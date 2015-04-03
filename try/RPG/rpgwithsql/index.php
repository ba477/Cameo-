<?php

    $db = new mysqli( 'localhost' , 'root' , '' , 'cameo' );
    if(!$db){
        die('HAHAHAHAHAHAHA');
    }
    include( 'main.php' );
    //include( 'var.php' );

    $main = new main();
