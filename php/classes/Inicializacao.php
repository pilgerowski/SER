<?php

    $GLOBALS['initialsSystem'] = 'SER';
    $GLOBALS['titleSystem'] = 'Sistema de Eventos de Rua';
    $GLOBALS['action'] = (is_null($_GET['action'])) ? 'geral' : $_GET['action'];
    
    $GLOBALS['itensMenu'] = array(
            'geral'         =>  'Geral',
            'eventos'       =>  'Eventos',
            'expositores'   =>  'Expositores',
            'locais'        =>  'Locais',
            'categorias'    =>  'Categorias'
    );
    
    $GLOBALS['database'] = include("./config.database.php");
    require_once("./classes/Autoload.php");
    