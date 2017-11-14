<?php
 
class Conexao {

	public static $instance;

	public static function getInstance() {
		if (!isset(self::$instance)) {
			self::$instance = new PDO(
				'mysql:host=localhost;dbname=ser', 
				'root', 
				'', 
				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
			);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
		}
		return self::$instance;
	}

	public static function Listar($objeto, $where = null) {
		try {
			
			$tabelaSQL = $objeto->getAplicacaoTabela();
			$camposAplicacao = $objeto->getAplicacaoCampos();
			
			$sql = "SELECT * FROM {$tabelaSQL}";
			if(!is_null($where)) {
				if(strpos($where, '=')) {
					$sql .= " WHERE {$where}";				
				} else {
					throw new Exception("Consulta incompleta.");
				}
			}		
		
			$p_sql = Conexao::getInstance()->prepare($sql);
			$p_sql->execute();
			return $p_sql->fetchAll(PDO::FETCH_CLASS, $objeto->getAplicacaoClasse()); 
			
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta acao.";
		}
	}
	
	public static function Inserir($objeto) {
		try {

			$tabelaSQL = $objeto->getAplicacaoTabela();
			$camposAplicacao = $objeto->getAplicacaoCampos();
			$camposSQL = implode(",", $camposAplicacao);
			$valoresSQL = implode(",:", $camposAplicacao);
			$sql = "INSERT INTO {$tabelaSQL} ( {$camposSQL} ) VALUES ( :{$valoresSQL} )";

			$p_sql = Conexao::getInstance()->prepare($sql);
			foreach($camposAplicacao as $campo) {
				$valor = $objeto->{$campo};
				$p_sql->bindValue(":{$campo}",$valor);
			}  		
			return $p_sql->execute();      		

		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta acao.";
		}
	}

	public function Editar(Usuario $usuario) {
		try {
			$sql = "UPDATE usuario set
			nome  = :nome,
			email = :email,
			telefone = :telefone
			WHERE cod_usuario = :cod_usuario";

			$p_sql = Conexao::getInstance()->prepare($sql);

			$p_sql->bindValue(":nome", $usuario->getNome());
			$p_sql->bindValue(":email", $usuario->getEmail());
			$p_sql->bindValue(":telefone", $usuario->getTelefone());      		
			$p_sql->bindValue(":cod_usuario", $usuario->getCod_usuario());

			return $p_sql->execute();
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta acao, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}

	public function Deletar($cod_usuario) {
		try {
			$sql = "DELETE FROM usuario WHERE cod_usuario = :cod_usuario";
			$p_sql = Conexao::getInstance()->prepare($sql);
			$p_sql->bindValue(":cod_usuario", $cod_usuario);

			return $p_sql->execute();
		} catch (Exception $e) {
			print "Ocorreu um erro ao tentar executar esta acao, foi gerado um LOG do mesmo, tente novamente mais tarde.";
		}
	}

	public function getId($object) {
		trigger_error('Not Implemented!', E_USER_WARNING);
	}
}