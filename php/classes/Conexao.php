<?php
 
class Conexao {

	public static $instance;

	public static function getInstance() {
	    try {
    		if (!isset(self::$instance)) {
    			self::$instance = new PDO(
    				'mysql:host=localhost;dbname=ser', 
    				'root', 
    				'mysql', 
    				array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    			);
    			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
    		}
		    return self::$instance;
	    } catch (Exception $e) {
	        Aplicacao::errorMessage($e);	        
	    }
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
			return $p_sql->fetchAll(PDO::FETCH_CLASS, $objeto->getNomeClasse()); 
			
		} catch (Exception $e) {
		    Aplicacao::errorMessage($e);		    
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
			Conexao::getInstance()->beginTransaction(); 
			foreach($camposAplicacao as $campo) {
			    $metodo = "get" . ucfirst( $campo );
			    $valor = $objeto->{$metodo}();
				$p_sql->bindValue(":{$campo}", $valor);
			}
			$execute = $p_sql->execute();
			$id = Conexao::getInstance()->lastInsertId();
			Conexao::getInstance()->commit(); 
			if($execute) {
			    $objeto->setId($id);
			}
			return $execute;

 		} catch (Exception $e) {
 		    Aplicacao::errorMessage($e); 		    
		}
	}

	public function Editar($objeto) {
		try {
		    $tabelaSQL = $objeto->getAplicacaoTabela();
		    $camposAplicacao = $objeto->getAplicacaoCampos();
		    $nomeIdObjeto = $objeto->getNomeId();
		    $idObjeto = $objeto->getId();
		    
		    $objetoAnterior = Conexao::Listar($objeto, "{$nomeIdObjeto} = {$idObjeto}")[0];
		    
		    if(!is_null($objetoAnterior)) {
    
    		    $camposAAlterar = array();
    		    $valoresAAlterar = array();
    		    foreach($camposAplicacao as $campoAplicacao) {
        	        $metodo = 'get' . ucfirst( $campoAplicacao );
        	        $valor1 = $objetoAnterior->{$metodo}();
        	        $valor2 = $objeto->{$metodo}();
        	        
        	        if( $valor1 != $valor2 ) {
        	            $camposAAlterar[] = "{$campoAplicacao} = :{$campoAplicacao}";
        	            $valoresAAlterar[$campoAplicacao] = $valor2;
        	        }
    		    }
    		    $camposSQL = implode(", ", $camposAAlterar);
    		    $sql = "UPDATE {$tabelaSQL} SET {$camposSQL} WHERE {$nomeIdObjeto} = {$idObjeto}";
    		    $p_sql = Conexao::getInstance()->prepare($sql);			
    		    Conexao::getInstance()->beginTransaction();
    		    foreach($valoresAAlterar as $campo => $valor) {
    		        $p_sql->bindValue(":{$campo}", $valor);
    		    }
    		    $execute = $p_sql->execute();
    		    Conexao::getInstance()->commit();
    		    
    		    return $execute;
		    }
 		} catch (Exception $e) {
			Aplicacao::errorMessage($e);
 		}
	}

	public function Deletar($objeto) {
		try {
		    
		    $tabelaSQL = $objeto->getAplicacaoTabela();
		    $camposAplicacao = $objeto->getAplicacaoCampos();
		    $nomeIdObjeto = $objeto->getNomeId();
		    $idObjeto = $objeto->getId();
		    
			$sql = "DELETE FROM {$tabelaSQL} WHERE {$nomeIdObjeto} = {$idObjeto}";
			$p_sql = Conexao::getInstance()->prepare($sql);
			Conexao::getInstance()->beginTransaction();
			$execute = $p_sql->execute();
			Conexao::getInstance()->commit();
			
			return $execute;
			
		} catch (Exception $e) {
		    Aplicacao::errorMessage($e);
		}
	}

	public function getId($object) {
		trigger_error('Not Implemented!', E_USER_WARNING);
	}
	

}