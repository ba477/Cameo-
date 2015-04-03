<?php
/**
 * Created by PhpStorm.
 * User: BastienCameo
 * Date: 03/04/2015
 * Time: 12:48
 */
 //Je suppose que vous avez déjà les variables php renseignées. Que ce soit un renseignement statique ou de données provenant de la base de données. Nommez vos variables selon les noms contenus dans le fichier template.htm

// Je capture et mémorise le contenu du fichier template.htm

$content = file_get_contents(dirname(__FILE__).’template.html’) ; // Attention au chemin d’accès au fichier template. ici, il est dans le même répertoire que export.php sinon donnez le chemin correct.

$content = str_replace(’##CIVILITE##’, $civilite, $content) ;
$content = str_replace(’##NOM##’, $nom, $content) ;
$content = str_replace(’##PRENOM##’, $prenom, $content) ;
$content = str_replace(’##ADRESSE##’, $adresse, $content) ;
$content = str_replace(’##CP##’, $cp, $content) ;
$content = str_replace(’##VILLE##’, $ville, $content) ;

// La suite du fichier à l’étape 3


$filename = "Convention_SIPLEC.doc" ;
// Vérifie que l’on peut écrire dans le fichier
if(!is_writable($filename))
    exit() ;

// Vérifie que l’on peut ouvrir le fichier
if (!$handle = fopen($filename, ’a’))
  exit("Impossible d’ouvrir le fichier ($filename)") ;

// On ajoute le contenu de exemple.html
if (fwrite($handle, $content) === FALSE)
    exit("Impossible d’écrire dans le fichier ($filename)") ;

echo "<a href=’$filename’>Télécharger le fichier</a>" ;
fclose($handle) ;
?>