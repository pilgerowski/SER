<?php
try{
    $categoria = new Categoria();
    $categoria->setNome("Alimento");
//     imprime($categoria, "antes de inserir no BD.");

    if( $categoria->inserir() ) {
        
//         imprime($categoria, "após inserir no BD.");
        
        $categoria->setNome("Cerveja");
        $categoria->alterar();
        
//         imprime($categoria, "após alterar no BD.");
        
//         $objetos = $categoria->consultar();
//         foreach($objetos as $umObjeto) {
//             $umObjeto->excluir();
//             imprime($umaCategoria);
//         }
        
    }
} catch (Exception $e) {
    print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}

