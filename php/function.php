<?php
/**
 * Created by PhpStorm.
 * User: BastienCameo
 * Date: 02/04/2015
 * Time: 13:25
 */

//On récupère le contenu brut du fichier xml modèle
$myContent = file_get_contents("/try
/Convention_SIPLEC.doc");

//On remplace les mots-clés, un à un
$myContent = str_replace("[Raison Sociale]",$customer->getRaison(),$myContent);
$myContent = str_replace("[Ville]",$customer->getVille(),$myContent);
$myContent = str_replace("[RCS]",$customer->getrcs(),$myContent);
$myContent = str_replace("[Nom]",$customer->getname(),$myContent);
$myContent = str_replace("[Prémon]",$customer->getfirstname(),$myContent);
$myContent = str_replace("[Fonction]",$customer->getfonction(),$myContent);



//On crée le fichier généré
$newFileHandler = fopen("./try/Convention_SIPLEC_CEE.doc","a");
fwrite($newFileHandler,$myContent);
fclose($newFileHandler);

//On a fini
