<?php
try{
    $expositor = new Expositor();
    $expositor->setNome("Macuco Cervejaria");
    $expositor->setMarca("Cerveja Macuco");
    $expositor->setUrlSite("http://www.cervejamacuco.com.br");
    $expositor->setUrlFacebook("http://www.facebook.com/cervejamacuco");
    $expositor->setUrlInstagram("http://www.instagram.com/cervejamacuco");
    $expositor->setTelefoneComercial("(51)98101-7711");
    $expositor->setTelefoneCelular("");
    $expositor->setEmail("");
    $expositor->setEndereco("");
    
//     imprime($expositor, "antes de inserir no BD.");
    
    if( $expositor->inserir() ) {
        
//         imprime($expositor, "após inserir no BD.");
                
        $expositor->setNome("Cerveja Macuco");
        $expositor->alterar();
        
//         imprime($expositor, "após alterar no BD.");
        
//         $objetos = $expositor->consultar();
//         foreach($objetos as $umObjeto) {
//             $umObjeto->excluir();
//             imprime($umObjeto);
//         }
        
        
    }
} catch (Exception $e) {
    print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}

