<?php
    /**
     * Created by PhpStorm.
     * User: yannlescouarnec
     * Date: 08/10/14
     * Time: 15:25
    */
    class article{

        function __construct(){
            global $db;
            $this->db = &$db;
        }

        function ajout(){
            if( count( $_POST ) > 0 ){
                // redirection vers details de l'article ajoute
                $nouvel_article = $this->sql_ajout( $_POST['nom'] , $_POST['prix'] );
                header( "Location: index.php?p=article.details&id=".$nouvel_article );
            } else {
                // formulaire
?>
    <form method="post" action="?p=article.ajout">
        <label>Nom</label> <input type="text" name="nom"/><br/>
        <label>Prix</label> <input type="text" name="prix"/><br/>
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
<table border=1 width="400">
    <tr><td>ID</td><td>NOM</td><td>Action</td></tr>
<?php

            while( $row = $results->fetch_assoc()){
?>
    <tr>
        <td><a href="?p=article.details&id=<?php echo $row['id'];?>"><?php echo $row['id'];?></a></td>
        <td><?php echo $row['nom'];?></td>
        <td><a href="?p=article.suppression&id=<?php echo $row['id'];?>">x</a></td>
    </tr>
<?php
            }
?>
</table>
<a href="index.php?p=article.ajout">+</a>
<?php
        }
        function sql_ajout( $nom , $prix ){
            $sql = "INSERT INTO
                      `article`
                    (
                      `nom` ,
                      `prix`
                    ) VALUES (
                      '". $this->db->real_escape_string( $nom ) ."',
                      '". $this->db->real_escape_string( $prix ) ."'
                    );";
            $this->db->query( $sql );
            return $this->db->insert_id;
        }
        function sql_suppression( $id ){
            $sql = "DELETE FROM
                      `article`
                    WHERE
                      `id` = ". $this->db->real_escape_string( (int) $id ) ."
                    ;";
            return $this->db->query( $sql );
        }
        function sql_details(){
            $sql = "SELECT
                      `id` ,
                      `nom`,
                      `prix`
                    FROM
                      `article`
                    WHERE
                        `id` = ". $_GET['id'] ."
                    ;";
            return $this->db->query( $sql );
        }
        function sql_liste(){
            $sql = "SELECT
                      `id` ,
                      `nom`
                    FROM
                      `article`";
            return $this->db->query( $sql );
        }

    }
