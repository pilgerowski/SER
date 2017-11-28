<?php
try{
    $evento = new Evento();
    $evento->setNome("Feira Me Gusta");
    $evento->setData("2017-10-15");
    $evento->setLocal($local->getId());
    
//     imprime($evento, "antes de inserir no BD.");
    
    if( $evento->inserir() ) {
        
//         imprime($evento, "após inserir no BD.");
        
        $evento->setNome("Feira Me Gusta #37");
        $evento->alterar();
        
//         imprime($evento, "após alterar no BD.");
        
//         $objetos = $evento->consultar();
//         foreach($objetos as $umObjeto) {
//             $umObjeto->excluir();
//             imprime($umObjeto);
//         }
        
    }
}
catch (Exception $e) {
        print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}

