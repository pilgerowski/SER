<?php
//try{
    $participante = new Participante();
    $participante->setEvento($evento->getId());
    $participante->setExpositor($expositor->getId());
    $participante->setCategoria($categoria->getId());
    $participante->setStatus($status->getId());
    
    imprime($participante, "antes de inserir no BD.");
    
    if( $participante->inserir() ) {
        
        imprime($participante, "após inserir no BD.");
        
//         $participante->alterar();
        
//         imprime($participante, "após alterar no BD.");
        
        //         $objetos = $categoria->consultar();
        //         foreach($objetos as $umObjeto) {
        //             $umObjeto->excluir();
        //             imprime($umaCategoria);
        //         }
        
        }
//     } catch (Exception $e) {
//         print "Ocorreu um erro ao tentar executar esta acao:" . $e;
//     }
    