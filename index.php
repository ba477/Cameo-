<?php

$mysqli = new mysqli('localhost', 'root', '', 'test') ;

if ($mysqli -> connect_error) {
    die ( 'Connect Error' .$mysqli -> connect_error) ;
}
echo 'success...' . $mysqli -> host_info . "\n";
$mysqli -> close ();

include( 'home.php' );
?>