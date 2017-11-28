<?php

class Participante extends Aplicacao {
    
    protected $evento;
    protected $expositor;
    protected $categoria;
    protected $status;
    
   
    public function inserir()
    {
        return Conexao::Inserir($this);            
    }
    
    public function alterar()
    {
        return Conexao::Editar($this);
    }
    
    public function excluir()
    {
        $valorId = $this->getId();
        if(!is_null($valorId)) {
            Conexao::Deletar($this);
            unset($this);
        } else
            throw new Exception("Participante inexistente.");
    }
    
    public function consultar($consulta = null)
    {
        return Conexao::Listar($this, $consulta);
    }
    
}