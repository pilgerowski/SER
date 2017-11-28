<?php

class Local extends Aplicacao {
	
    protected $nome;
    protected $localizacao;
    protected $notas;
    
    public function Local($id = null) {
        if(!is_null($id)) {
            $locais = $this->consultar("id_local = {$id}");
            foreach($locais as $local) {
                $this->setNome($local->getNome());
                $this->setLocalizacao($local->getLocalizacao());
                $this->setNotas($local->getNotas());
                $this->setId($id);
            }
        }
    }
    
    public function inserir()
    {        
        if(strlen($this->nome) > 0)
            return Conexao::Inserir($this);
        throw new Exception("Local deve ter um nome.");
            
    }

    public function alterar()
    {
        if(strlen($this->nome) > 0)
            return Conexao::Editar($this);
        throw new Exception("Local deve ter um nome.");
    }

    public function excluir()
    {
        $valorId = $this->getId();
        if(is_null($valorId)) {
            throw new Exception("Local inexistente.");
        } else {    
            $evento = new Evento();
            $eventosAssociados = $evento->consultar("local = {$valorId}");
            if(count($eventosAssociados) == 0) {
                Conexao::Deletar($this);
                unset($this);
            } else {
                throw new Exception("Local tem eventos associados. Não é possível excluir.");
            }
        }             
    }

    public function consultar($consulta = null)
    {
        return Conexao::Listar($this, $consulta);
    }

}