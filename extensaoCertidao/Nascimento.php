<?php
class Nascimento extends Certidao
{

    protected $dtNascimento;
    protected $pessoa;



    public function __construct($nrRegistroCertidao,pessoa $pessoa,$nomedoDeclarante, $tipoCertidao, $dtEmissao, $nomeTabeliao,$nomeCartorio ,$dtNascimento)
    {
        parent::__construct($nrRegistroCertidao,$pessoa,$nomedoDeclarante, $tipoCertidao, $dtEmissao, $nomeTabeliao,$nomeCartorio ,);

        $this->dtNascimento = $dtNascimento;
    }


     //============ Gets e Sets ===============
     public function getNrRegistroCertidao()
     {
         return $this->nrRegistroCertidao;
     }      
     public function setNrRegistroCertidao($nrRegistroCertidao)
     {
         $this->nrRegistroCertidao = $nrRegistroCertidao;

     }

    
     public function getPessoa()
     {
             return $this->pessoa;
     }
     public function setPessoa($pessoa)
     {
             $this->pessoa = $pessoa;

     }

     public function getNomedoDeclarante()
     {
             return $this->nomedoDeclarante;
     } 
     public function setNomedoDeclarante($nomedoDeclarante)
     {
             $this->nomedoDeclarante = $nomedoDeclarante;

     }


     public function getTipoCertidao()
     {
             return $this->tipoCertidao;
     }
     public function setTipoCertidao($tipoCertidao)
     {
             $this->tipoCertidao = $tipoCertidao;

     }

     

     public function getDtEmissao()
     {
             return $this->dtEmissao;
     }
     public function setDtEmissao($dtEmissao)
     {
             $this->dtEmissao = $dtEmissao;

     }

     public function getNomeTabeliao()
     {
             return $this->nomeTabeliao;
     }
     public function setNomeTabeliao($nomeTabeliao)
     {
             $this->nomeTabeliao = $nomeTabeliao;

     }


     public function getNomeCartorio()
     {
         return $this->nomeCartorio;
     } 
     public function setNomeCartorio($nomeCartorio)
     {
         $this->nomeCartorio = $nomeCartorio;

     }

    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;

    }
   
//=================================================================


}