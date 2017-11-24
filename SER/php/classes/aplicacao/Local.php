<?php

class Local extends Aplicacao {
	
	protected $id_local = 0;
    protected $nome = "Viaduto Otávio Rocha";
    protected $localizacao = "Rua Duque de Caxias, sobre a avenida Borges de Medeiros.";
    protected $notas = "";
	protected $idade = 21;
	
	public function getIdade() {
		return 13;
	}
	
    public function inserir()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    public function alterar()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    public function excluir()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

    public function consultar()
     {
        trigger_error('Not Implemented!', E_USER_WARNING);
    }

}