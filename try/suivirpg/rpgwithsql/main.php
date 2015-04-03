<?php

    class main{
        function __construct(){
            /* p= contenu de la de url ?p=client.suppression&id=9*/
            $CurPage = &$_GET['p'];
            $page = array(
                'client.ajout' => array( 'class' => 'client' , 'method' => 'ajout' ),
                'client.suppression' => array( 'class' => 'client' , 'method' => 'suppression' ),
                'client.liste' => array( 'class' => 'client' , 'method' => 'liste' ),
                'client.details' => array( 'class' => 'client' , 'method' => 'details' ),
            );
            if( isset( $page[$CurPage] ) ){
                $method = $page[$CurPage]['method'];
                $CurClass = $page[$CurPage]['class'];
            } else {
                $method = 'liste';
                $CurClass = 'client';
            }
            include_once( $CurClass.'.php' );
            $CurObjet = new $CurClass();
            echo $CurObjet->$method();
        }

        function __destruct(){
        }

    }
