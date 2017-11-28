<?php
try{
    $status = new Status();
    $status->setNome("Em dia");
//     imprime($status, "antes de inserir no BD.");
    
    if( $status->inserir() ) {
        
//         imprime($status, "após inserir no BD.");
        
        $status->setNome("Isento");
        $status->alterar();
        
//         imprime($status, "após alterar no BD.");
        
//         $objetos = $status->consultar();
//         foreach($objetos as $umObjeto) {
//             $umObjeto->excluir();
//             imprime($umObjeto);
//         }
        
    }
} catch (Exception $e) {
    print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}

