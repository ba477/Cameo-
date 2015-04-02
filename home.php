<!DOCTYPE html>
<html>

<head lang="fr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Prototype suivit de projet</title>
</head>
<body>
    <header>
        <div class="logo"><img src="img/logo.png" alt="Caméo energy"/></div>
        <h1>Gestion des projets</h1>
        <nav>
            <ul id="menu">
                <li><a class="active" href="#/home">Accueil</a></li>
                <li><a href="#/suivi">Suivi de dossier</a></li>
                <li><a href="#/cee">Convention</a></li>
                <li><a href="#/aft">AFT</a></li>
            </ul>
        </nav>
    </header>
    <div id="content">
        <div id="work">
        <?php
            function sql_details(){
            $sql = "SELECT
            `id`, `Raison sociale`, `Capital`, `Adresse`, `Ville`, `RCS`, `Nom`, `Prémon`
            FROM
            `testcontact`
            WHERE
            `id` = ". $_GET['id'] ."
            ;";
            return $this->db->query( $sql );
            }
        ?>
        </div>
    </div>
    <footer>
        <p class="copyr">© Copyright 2015 - CAMEO-energy</p>
    </footer>
</body>
</html>