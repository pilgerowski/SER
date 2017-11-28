<?php

class Categoria extends Aplicacao {
    
    protected $nome;
    
    public function inserir()
    {
        if(strlen($this->nome) > 0)
            return Conexao::Inserir($this);
            throw new Exception("Categoria deve ter um nome.");
            
    }
    
    public function alterar()
    {
        if(strlen($this->nome) > 0)
            return Conexao::Editar($this);
            throw new Exception("Categoria deve ter um nome.");
    }
    
    public function excluir()
    {
        $valorId = $this->getId();
        if(!is_null($valorId)) {
            Conexao::Deletar($this);
            unset($this);
        } else
            throw new Exception("Categoria inexistente.");
    }
    
    public function consultar($consulta = null)
    {
        return Conexao::Listar($this, $consulta);
    }
    
}