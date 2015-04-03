<?php
/**
 * Created by PhpStorm.
 * User: BastienCameo
 * Date: 03/04/2015
 * Time: 12:39
 */


$mysqli = new mysqli('localhost', 'root', '', 'cameo') ;

if ($mysqli -> connect_error) {
    die ( 'Connect Error' .$mysqli -> connect_error) ;
}
echo 'success...' . $mysqli -> host_info . "\n";
$mysqli -> close ();

?>