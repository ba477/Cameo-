<?php
    /**
     * Created by PhpStorm.
     * User: yannlescouarnec
     * Date: 08/10/14
     * Time: 09:15
    */
    $db = new mysqli( 'localhost' , 'root' , 'root' , 'w2-j2' );
    if(!$db){
        die('HAHAHAHAHAHAHA');
    }
    include( 'main.php' );
    $main = new main();
