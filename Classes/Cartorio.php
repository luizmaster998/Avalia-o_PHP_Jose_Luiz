<?php
Class Cartorio
{
    protected $nome;

  
    public function __construct($nome)
    {                                                    
       $this->nome = $nome;
    }


        //Gets e Sets
    public function getNome()
    {
        return $this->nome;
    }
     public function setNome($nome)
    {
        $this->nome = $nome;


    }
}