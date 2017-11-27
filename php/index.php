<pre>
<?php

require_once("./classes/Conexao.php");
require_once("./classes/Aplicacao.php");

require_once("./classes/aplicacao/Local.php");

try{
	$local = new Local();
	$local->setNome("Viaduto Otávio Rocha");
	$local->setLocalizacao("Rua Duque de Caxias, sobre a avenida Borges de Medeiros.");
	$local->setNotas("");
 	if( Conexao::Inserir($local) ) {
 	    $local->setNome("Viaduto da Borges");
 	    $local->setNotas("Banheiros químicos e food trucks ficam na Rua Duque de Caxias.");
 	    Conexao::Editar($local);
 	    
    	$locais = Conexao::Listar(new Local());
    	foreach($locais as $umLocal) {
    	    $valorId = $umLocal->{$umLocal->getNomeId()};
    	    if($valorId == $local->getId()) {
        		
    	    }
    	}
 	}
} catch (Exception $e) {
	print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}
