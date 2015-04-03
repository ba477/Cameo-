<?php

    class main{
        function __construct(){
            /* p= contenu de la de url ?p=perso.suppression&id=9*/
            $CurPage = &$_GET['p'];
            $page = array(
                'perso.ajout' => array( 'class' => 'perso' , 'method' => 'ajout' ),
                'perso.suppression' => array( 'class' => 'perso' , 'method' => 'suppression' ),
                'perso.liste' => array( 'class' => 'perso' , 'method' => 'liste' ),
                'perso.details' => array( 'class' => 'perso' , 'method' => 'details' ),
            );
            if( isset( $page[$CurPage] ) ){
                $method = $page[$CurPage]['method'];
                $CurClass = $page[$CurPage]['class'];
            } else {
                $method = 'liste';
                $CurClass = 'perso';
            }
            include_once( $CurClass.'.php' );
            $CurObjet = new $CurClass();
            echo $CurObjet->$method();
        }

        function __destruct(){
        }

    }
