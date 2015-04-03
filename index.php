<?php

$mysqli = new mysqli('localhost', 'root', '', 'cameo') ;

if ($mysqli -> connect_error) {
    die ( 'Connect Error' .$mysqli -> connect_error) ;
}
echo 'success...' . $mysqli -> host_info . "\n";

$query = 'SELECT id, Raison sociale, Capital, Adresse, Ville, RCS, Nom, Prénom FROM testcontact';

$result = mysqli_query($mysqli ,$query);
$mysqli -> close ();
echo $query;

if ( $result) {

// on va scanner tous les champs un par un
    while ($data = mysqli_fetch_array($result)) {
        // on affiche les résultats
        echo 'id : ' . $data['id'] . '<br />';
        echo 'Raison sociale : ' . $data['Raison sociale'] . '<br /><br />';
        echo 'Capital : ' . $data['Capital'] . '<br /><br />';
        echo 'Adresse : ' . $data['Adresse'] . '<br /><br />';
        echo 'Ville : ' . $data['Ville'] . '<br /><br />';
        echo 'RCS : ' . $data['RCS'] . '<br /><br />';
        echo 'Nom : ' . $data['Nom'] . '<br /><br />';
        echo 'Prénom : ' . $data['Prénom'] . '<br /><br />';
    }
    echo $data;

}

include( 'home.php' );
?>