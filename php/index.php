<?php

function imprime($objeto, $mensagem = null) {
    echo "<hr>{$objeto->getNomeClasse()}" . (is_null($mensagem) ? "<hr>" : " {$mensagem}<hr>");
    echo "<pre>";
    print_r($objeto);
    echo "</pre>";
}

require_once("./classes/Autoload.php");

include("./testes/testeLocal.php");
include("./testes/testeCategoria.php");
include("./testes/testeExpositor.php");
include("./testes/testeStatus.php");

include("./testes/testeEvento.php");
include("./testes/testeParticipante.php");