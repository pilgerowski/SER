<pre>
<?php

require_once("./classes/Conexao.php");
require_once("./classes/Aplicacao.php");

require_once("./classes/aplicacao/Local.php");

try{
	$local = new Local();
	var_dump($local->getIdade());
	var_dump($local->getNome());
	$local->setNome('oi');
	var_dump($local->getNome());
	die();
	
	//echo Conexao::Inserir($local);
	//$locais = Conexao::Listar(new Local());
	foreach($locais as $umLocal) {
		$umLocal->setNome('oi');
		var_dump($umLocal->getNome());
	}
} catch (Exception $e) {
	print "Ocorreu um erro ao tentar executar esta acao:" . $e;
}
