<?php

    class perso{

        public $str = 0;

        function __construct(){
            global $db;
            $this->db = &$db;
        }

        function ajout(){
            if( count( $_POST ) > 0 ){
                // redirection vers details de l'perso ajoute
                $nouvel_perso = $this->sql_ajout( $_POST['nom'] , $_POST['classe'] );
                header( "Location: index.php?p=perso.details&id=".$nouvel_perso );
            } else {
                // formulaire

            ?>
                <form method="post" action="index.php?p=perso.ajout">
                    <label>Nom</label> <input type="text" name="nom"/><br/>
                    <label>Classe</label> 

                    <select name="classe" id="selected">
                        <option value="Tank">Tank</option>
                        <option value="Rodeur">Rodeur</option>
                        <option value="Gardien">Gardien</option>
                        <option value="Mage">Mage</option>
                        <option value="Dps">Dps</option>

                    <input type="submit" value="Ajouter perso">
                </form>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                <script type="text/javascript">
                    $("select").change(function () {
                          str = $(this).find('option:selected').val();
                          console.log(str)
                          $('#class_image').attr('src',str+'.jpg');
                        })
                </script>
                <img id="class_image" src="Tank.jpg">
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
            ?> <a href="index.php">Back to list</a> 
               
            <?php
        }
        function liste(){
            $results = $this->sql_liste();
?>
<table border=1 width="400">
    <tr><td>ID</td><td>NOM</td><td>CLASSE</td><td>Action</td></tr>
<?php
            while( $row = $results->fetch_assoc()){
?>
    <tr>
        <td><a href="?p=perso.details&id=<?php echo $row['id'];?>"><?php echo $row['id'];?></a></td>
        <td><?php echo $row['nom'];?></td>
        <td><?php echo $row['classe'];?></td>
        <td><a href="?p=perso.suppression&id=<?php echo $row['id'];?>">x</a></td>
    </tr>
<?php
            }
?>
</table>
<a href="index.php?p=perso.ajout">+</a>

<?php
        }
        function sql_ajout( $nom , $classe ){
            $sql = "INSERT INTO
                      `persorpg`
                    (
                      `nom` ,
                      `classe`
                    ) VALUES (
                      '". $this->db->real_escape_string( $nom ) ."',
                      '". $this->db->real_escape_string( $classe ) ."'
                    );";
            $this->db->query( $sql );
            return $this->db->insert_id;
        }
        function sql_suppression( $id ){
            $sql = "DELETE FROM
                      `persorpg`
                    WHERE
                      `id` = ". $this->db->real_escape_string( (int) $id ) ."
                    ;";
            return $this->db->query( $sql );
        }
        function sql_details(){
            $sql = "SELECT
                      `id` ,
                      `nom`,
                      `classe`
                    FROM
                      `persorpg`
                    WHERE
                        `id` = ". $_GET['id'] ."
                    ;";
            return $this->db->query( $sql );
        }
        function sql_liste(){
            $sql = "SELECT
                      `id` ,
                      `nom`,
                      `classe`
                    FROM
                      `persorpg`";
            return $this->db->query( $sql );
        }

    }
