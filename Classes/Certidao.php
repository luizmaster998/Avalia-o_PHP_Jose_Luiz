<?php
abstract class Certidao
{
    protected $nrRegistroCertidao;
    protected $pessoa; // recebe um objeto de pessoa.
    protected $nomedoDeclarante;
    protected $tipoCertidao;
    protected $dtEmissao;
    protected $nomeTabeliao;
    protected $nomeCartorio;

    public function __construct($nrRegistroCertidao,pessoa $pessoa,$nomedoDeclarante, $tipoCertidao, $dtEmissao, $nomeTabeliao,$nomeCartorio )
    {                                                    
        $this->$nrRegistroCertidao;
        $this->$pessoa; // recebe um objeto de pessoa.
        $this->$nomedoDeclarante;
        $this->$tipoCertidao;
        $this->$dtEmissao;
        $this->$nomeTabeliao;
        $this->$nomeCartorio;

        

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

        
//==============================================================
  
               

    



}