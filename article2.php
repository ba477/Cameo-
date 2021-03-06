<?php
/**
 * Created by PhpStorm.
 * User: BastienCameo
 * Date: 16/04/2015
 * Time: 15:07
 */

include_once('index.php');
include_once('main.php');

class article{


    function __construct(){
        global $db;
        $this->db = &$db;
    }

    function export(){
        $id=$_GET['id'];
        $results = $this->sql_export();
        $row = $results->fetch_assoc();
        header( "Location: export.php?p=article.export&id=".$id );
        var_dump( $row );
    }
    function ajout(){
        if( count( $_POST ) > 0 ){
            // redirection vers details de l'article ajoute
            $nouvel_article = $this->sql_ajout(
                $_POST['numerodaccord'] ,
                $_POST['raisonsocial'] ,
                $_POST['capital'] ,
                $_POST['adressesiege'] ,
                $_POST['cp'] ,
                $_POST['ville'] ,
                $_POST['rcs'] ,
                $_POST['nom'] ,
                $_POST['prenom'],
                $_POST['fonction'] ,
                $_POST['tukwu'] ,
                $_POST['operation']

            );
            header( "Location: index.php?p=article.details&id=".$nouvel_article );
        } else {
            // formulaire
            ?>
            <form method="post" action="?p=article.ajout">
                <label>N°D'ACCORD</label> <input type="text" name="numerodaccord"/><br/>
                <label>RAISON SOCIAL</label> <input type="text" name="raisonsocial"/><br/>
                <label>CAPITAL</label> <input type="text" name="capital"/><br/>
                <label>ADRESSE DU SIEGE</label> <input type="text" name="adressesiege"/><br/>
                <label>CODE POSTAL</label> <input type="text" name="cp"/><br/>
                <label>VILLE</label> <input type="text" name="ville"/><br/>
                <label>RCS</label> <input type="text" name="rcs"/><br/>
                <label>NOM</label> <input type="text" name="nom"/><br/>
                <label>PRENOM</label> <input type="text" name="prenom"/><br/>
                <label>FONCTION</label> <input type="text" name="fonction"/><br/>
                <label>TAUX UNITAIRE KWU</label> <input type="text" name="tukwu"/><br/>
                <label>OPERATION</label> <input type="text" name="operation"/><br/>
                <input type="submit" value="Ajouter article">
            </form>
        <?php
        }
    }
    function suppression(){
        $this->sql_suppression( $_GET['id'] );
        header( "Location: index.php" );
    }
    function details(){
        $results = $this->sql_details();
        $row = $results->fetch_assoc();

        var_dump( $row );
    }

    function liste(){
    $results = $this->sql_liste();
    ?>

    <?php
    }
    function sql_ajout( $numerodaccord , $raisonsocial , $capital , $adressesiege , $cp , $ville , $rcs , $nom , $prenom , $fonction , $tukwu, $operation ){
        $sql = "INSERT INTO
                      `testcameo`
                    (
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
                    ) VALUES (
                      '". $this->db->real_escape_string( $numerodaccord ) ."',
                      '". $this->db->real_escape_string( $raisonsocial ) ."',
                      '". $this->db->real_escape_string( $capital ) ."',
                      '". $this->db->real_escape_string( $adressesiege ) ."',
                      '". $this->db->real_escape_string( $cp ) ."',
                      '". $this->db->real_escape_string( $ville ) ."',
                      '". $this->db->real_escape_string( $rcs ) ."',
                      '". $this->db->real_escape_string( $prenom ) ."',
                      '". $this->db->real_escape_string( $nom ) ."',
                      '". $this->db->real_escape_string( $prenom ) ."',
                      '". $this->db->real_escape_string( $fonction ) ."',
                      '". $this->db->real_escape_string( $tukwu ) ."',
                      '". $this->db->real_escape_string( $operation ) ."'

                    );";
        $this->db->query( $sql );
        return $this->db->insert_id;
    }
    function sql_suppression( $id ){
        $sql = "DELETE FROM
                      `testcontact`
                    WHERE
                      `id` = ". $this->db->real_escape_string( (int) $id ) ."
                    ;";
        return $this->db->query( $sql );
    }
    function sql_export(){
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
    function sql_liste(){
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
                      `testcontact`";
        return $this->db->query( $sql );
    }

}
?>