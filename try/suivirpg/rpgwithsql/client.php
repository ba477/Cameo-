<?php

    class client{

        public $str = 0;

        function __construct(){
            global $db;
            $this->db = &$db;
        }

        function ajout(){
            if( count( $_POST ) > 0 ){
                // redirection vers details de le client ajoute
                $nouvel_client = $this->sql_ajout( $_POST['rs'] , $_POST['cap'] , $_POST['adresse'], $_POST['ville'], $_POST['rcs'], $_POST['nom'], $_POST['prenom']);
                header( "Location: index.php?p=client.details&id=".$nouvel_client );
            } else {
                // formulaire

            ?>
                <form method="post" action="index.php?p=client.ajout">
                    <label>Raison Sociale</label> <input type="text" name="rs"/><br/>
                    <label>Capital</label> <input type="text" name="cap"/><br/>
                    <label>Adresse</label> <input type="text" name="adresse"/><br/>
                    <label>Ville</label> <input type="text" name="ville"/><br/>
                    <label>RCS</label> <input type="text" name="rcs"/><br/>
                    <label>Nom</label> <input type="text" name="nom"/><br/>
                    <label>Prénom</label> <input type="text" name="prenom"/><br/>

                    <input type="submit" value="Ajouter client">
                </form>
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                <script type="text/javascript">

                </script>

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
        <td><a href="?p=client.details&id=<?php echo $row['id'];?>"><?php echo $row['id'];?></a></td>
        <td><?php echo $row['Raison sociale'];?></td>
        <td><?php echo $row['Capital'];?></td>
        <td><?php echo $row['Adresse'];?></td>
        <td><?php echo $row['Ville'];?></td>
        <td><?php echo $row['RCS'];?></td>
        <td><?php echo $row['Nom'];?></td>
        <td><?php echo $row['Prénom'];?></td>


        <td><a href="?p=client.suppression&id=<?php echo $row['id'];?>">x</a></td>
    </tr>
<?php
            }
?>
</table>
<a href="index.php?p=client.ajout">+</a>

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
