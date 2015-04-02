<?php
    /**
     * Created by PhpStorm.
     * User: yannlescouarnec
     * Date: 08/10/14
     * Time: 09:16
    */
    class main{
        function __construct(){
            $CurPage = &$_GET['p'];
            $page = array(
                'article.ajout' => array( 'class' => 'article' , 'method' => 'ajout' ),
                'article.suppression' => array( 'class' => 'article' , 'method' => 'suppression' ),
                'article.liste' => array( 'class' => 'article' , 'method' => 'liste' ),
                'article.details' => array( 'class' => 'article' , 'method' => 'details' ),
            );
            if( isset( $page[$CurPage] ) ){
                $method = $page[$CurPage]['method'];
                $CurClass = $page[$CurPage]['class'];
            } else {
                $method = 'liste';
                $CurClass = 'article';
            }
            include_once( $CurClass.'.php' );
            $CurObjet = new $CurClass();
            echo $CurObjet->$method();
        }

        function __destruct(){
        }

    }
