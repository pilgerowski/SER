<?php

class Evento extends Aplicacao {
    
    protected $nome;
    protected $data;
    protected $local;
    
    public function setData($data) {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$data)) {
            $this->data = $data; 
        } else
            throw new Exception("Data deve estar no formato AAAA-MM-DD.");
    }
    
    public function inserir()
    {
        if(strlen($this->nome) > 0) {
            return Conexao::Inserir($this);
        } 
        throw new Exception("Evento deve ter um nome.");
            
    }
    
    public function alterar()
    {
        if(strlen($this->nome) > 0) {
            return Conexao::Editar($this);
        }
        throw new Exception("Evento deve ter um nome.");
    }
    
    public function excluir()
    {
        $valorId = $this->getId();
        if(!is_null($valorId)) {
            Conexao::Deletar($this);
            unset($this);
        } else
            throw new Exception("Evento inexistente.");
    }
    
    public function consultar($consulta = null)
    {
        return Conexao::Listar($this, $consulta);
    }
    
}