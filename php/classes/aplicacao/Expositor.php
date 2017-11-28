<?php

class Expositor extends Aplicacao {
    
    protected $nome;
    protected $marca;
    protected $urlSite;
    protected $urlFacebook;
    protected $urlInstagram;
    protected $telefoneComercial;
    protected $telefoneCelular;
    protected $email;
    protected $endereco;
    
    public function inserir()
    {
        if(strlen($this->nome) > 0)
            return Conexao::Inserir($this);
            throw new Exception("Expositor deve ter um nome.");
            
    }
    
    public function alterar()
    {
        if(strlen($this->nome) > 0)
            return Conexao::Editar($this);
            throw new Exception("Expositor deve ter um nome.");
    }
    
    public function excluir()
    {
        $valorId = $this->getId();
        if(!is_null($valorId)) {
            Conexao::Deletar($this);
            unset($this);
        } else
            throw new Exception("Expositor inexistente.");
    }
    
    public function consultar($consulta = null)
    {
        return Conexao::Listar($this, $consulta);
    }
    
}