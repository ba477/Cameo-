<?php
/**
 * Created by PhpStorm.
 * User: BastienCameo
 * Date: 16/04/2015
 * Time: 10:49
 */
include_once('article2.php');

$hour = date("H:i");
$date = date("d-m-Y");
$base="Convention_Cee";
$id=$_GET['id'];
$results = $this->sql_details();
$row = $results->fetch_assoc();

$SQLPROJET='SELECT * from projet where id_projet="'.$id.'"';
$SQLPROJET1=mysql_query($SQLPROJET);
$SQLPROJET2=mysql_fetch_array($SQLPROJET1);




// Je capture et mémorise le contenu du fichier template.htm

header("Content-Type: application/msword; name=ficher.doc");
header("Content-disposition: attachment; filename='$base $date $hour.htm");
$content=file_get_contents('Convention_SIPLEC.htm'); // Attention au chemin d’accès au fichier template. ici, il est dans le même répertoire que export.php sinon donnez le chemin correct.

//Maintenant, je remplace une à une les variables. Méthode fastidieuse mais "Cameroun est chaud, on va faire comment". Optimisera au fil de l’expérience

$content=str_replace($titre,$row['titre_projet'],$content) ;
$content=str_replace($pays,$row['pays'],$content) ;
$content=str_replace($duree,$row['duree'],$content) ;
$content=str_replace($og,$row['obejctif_general'],$content) ;
$content=str_replace($cible,$row['cible'],$content) ;
$content=str_replace($somme,$row['budget_total'],$content) ;




echo $content;
?>