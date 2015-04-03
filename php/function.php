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
$myContent = str_replace("[RCS]",$customer->getRcs(),$myContent);
$myContent = str_replace("[Nom]",$customer->getName(),$myContent);
$myContent = str_replace("[Prémon]",$customer->getFirstname(),$myContent);
$myContent = str_replace("[Fonction]",$customer->getFonction(),$myContent);



//On crée le fichier généré
$newFileHandler = fopen("./Convention_SIPLEC_CEE.doc","a");
fwrite($newFileHandler,$myContent);
fclose($newFileHandler);

//On a fini




