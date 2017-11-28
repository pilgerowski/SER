<?php
try{
    $local = new Local();
    $local->setNome("Viaduto Otávio Rocha");
    $local->setLocalizacao("Rua Duque de Caxias, sobre a avenida Borges de Medeiros.");
    $local->setNotas("");
    imprime($local, "antes de inserir no BD.");
    
    if( $local->inserir() ) {
        
        imprime($local, "após inserir no BD.");
        
        $local->setNome("Viaduto da Borges");
        $local->setNotas("Banheiros químicos e food trucks ficam na Rua Duque de Caxias.");
        $local->alterar();
        
        imprime($local, "após alterar no BD.");
        
        $locais = $local->consultar();
        foreach($locais as $umLocal) {
            $umLocal->excluir();
            imprime($umLocal);
        }
        
    }
} catch (Exception $e) {
    print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}

function imprime($objeto, $mensagem = null) {
    echo "<hr>{$objeto->getNomeClasse()}" . (is_null($mensagem) ? "<hr>" : " {$mensagem}<hr>");
    echo "<pre>";
    var_dump($objeto);
    echo "</pre>";
}
