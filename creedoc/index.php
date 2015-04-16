<?php
$id = $_GET['id'];
$hour = date("H:i");
$date = date("d-m-Y");
$base="Convention_Cee";
function details(){
    $results = $this->sql_details();
    $row = $results->fetch_assoc();

    var_dump( $row );
}
function sql_details(){
    $sql = "SELECT
                       `id`,
                       `numerodaccord`,
                       `raisonsocial`,
                       `capital`,
                       `adressesiege`,
                       `cp`,
                       `ville`,
                       `rcs`,
                       `nom`,
                       `prenom`,
                       `fonction`,
                       `tukwu`,
                       `operation`
                    FROM
                      `testcontact`
                    WHERE
                        `id` = ". $_GET['id'] ."
                    ;";
    return $this->db->query( $sql );
}
header("Content-Type: application/msword; name=Fichier.doc");
header("Content-disposition: attachment; filename='$base $date $hour.doc");
$content=file_get_contents('Convention_SIPLEC.htm');

$content=str_replace($numerodaccord,$row['{numerodaccord}'],$content) ;
$content=str_replace($raisonsocial,$row['{raisonsocial}'],$content) ;
$content=str_replace($capital,$row['{capital}'],$content) ;
$content=str_replace($adressesiege,$row['{adressesiege}'],$content) ;
$content=str_replace($ville,$row['{villr}'],$content) ;
$content=str_replace($rcs,$row['{rcs}'],$content) ;

echo $content;
?>