<?php
Class Pessoa
{
    public $nome;
    public $rg;
    public $cpf;
    
    public function __construct($nome,$rg,$cpf)
    {                                                    
       $this->nome = $nome;
       $this->nome = $rg;
       $this->nome = $cpf;
    }
}