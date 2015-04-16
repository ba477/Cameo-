
<?php
$filename="facture.doc";
touch($filename);
if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'a')) {
        echo "Impossible d'ouvrir le fichier ($filename)";
        exit;
    }
    if (fwrite($handle, $content) === FALSE) {
        echo "Impossible d'écrire dans le fichier ($filename)";
        exit;
    }
    echo "<a href='$filename'>Télécharger le fichier</a>";
    fclose($handle);
} else {
    echo "Le fichier $filename n'est pas accessible en écriture.";
}

?>