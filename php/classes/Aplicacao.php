<?php

class Aplicacao {
	
    private $__instancias = [];
	private $__metodos = [];
	private $__id = null;
    
    public function __construct() {
        $this->getAplicacaoCampos();
    }
    
    public function __call($metodo, $args)
    {			
        $classe = $this->getNomeClasse();
		
		if(!in_array($metodo, $this->__metodos) ) {			
		    
			// Implementando o getter
			if($metodo[0] == 'g' && $metodo[1] == 'e' && $metodo[2] == 't') {
				$instancia = strtolower(str_replace('get', '', $metodo));
				if(in_array($instancia, $this->getAplicacaoCampos())) {
					return $this->$instancia;
				}
			}	
			
			// Implementando o setter
			if($metodo[0] == 's' && $metodo[1] == 'e' && $metodo[2] == 't') {
				$instancia = strtolower(str_replace('set', '', $metodo));
				if(in_array($instancia, $this->getAplicacaoCampos())) {
					$this->$instancia = $args[0];
					return;
				}
			}		
			
			throw new Exception("Método inválido: " . $metodo);
			
		}
    }
	
    public function getNomeClasse() {
        return get_class($this);
    }
    
    public function getAplicacaoCampos() {      
        if(count($this->__instancias) == 0) {      
            $instancias = get_class_vars($this->getNomeClasse());
            foreach($instancias as $instancia => $valor) {
                if(strpos($instancia, '__') !== 0) {
                    $this->__instancias[] = $instancia;
                }
            }
        }
        return $this->__instancias;
    }
        
    public function getAplicacaoTabela() {
        return strtolower($this->getNomeClasse());
    }
    
    public function setId($valor) {
        $this->__id = $valor;
    }
    
    public function getId() {
        if(is_numeric($this->__id))            
            return $this->__id;
        
//         $nomeVariavelId = $this->getNomeId();
//         echo $nomeVariavelId;
//         if(isset($nomeVariavelId)) 
//             return $$nomeVariavelId;
        
    }
    
    public function getNomeId() {
        return 'id_' . $this->getAplicacaoTabela();        
    }
    
    public static function errorMessage(Exception $e) {
        print "Ocorreu um erro ao tentar executar esta acao: " . $e->getMessage();
    }
    
    
}