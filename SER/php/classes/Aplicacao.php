<?php

class Aplicacao {
	
    private $__instancias = [];
	private $__metodos = [];
    
    public function __construct() {
        $classe = get_class($this);
        
        $instancias = get_class_vars($classe);
        foreach($instancias as $instancia => $valor) {
            if(strpos($instancia, '__')) {
                $this->__instancias[] = $instancia;
            }
        }
		$this->__metodos = get_class_methods($this);
    }
    
    public function __call($metodo, $args)
    {			
		$classe = get_class($this);
		
		if(!in_array($metodo, $this->__metodos) ) {			
			
			// Implementando o getter
			if($metodo[0] == 'g' && $metodo[1] == 'e' && $metodo[2] == 't') {
				$instancia = strtolower(str_replace('get', '', $metodo));
				if(in_array($instancia, get_class_vars($classe))) {
					return $this->$instancia;
				}
			}	
			
			// Implementando o setter
			if($metodo[0] == 's' && $metodo[1] == 'e' && $metodo[2] == 't') {
				$instancia = strtolower(str_replace('set', '', $metodo));
				if(in_array($instancia, get_class_vars($classe))) {
					$this->$instancia = $args[0];
					return;
				}
			}		
			
			throw new Exception("Método inválido.");
			
		}
    }
	
    public function getAplicacaoCampos() {
        return $this->__instancias;
    }
    
    public function getAplicacaoClasse() {
        return get_class($this);
    }
    
    public function getAplicacaoTabela() {
        return get_class($this);
    }
    
}