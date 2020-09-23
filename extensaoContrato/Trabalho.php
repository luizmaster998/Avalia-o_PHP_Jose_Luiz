<?php
class Trabalho extends Contrato
{
    
    protected $remuneracao;


    
    public function __construct($nrRegisro,$nomeDasPartesEnvolvidas,$nomedasTestemunhas, $objetoContrato, $dtEmissaoDoContrato, $dtRegistroDoContrato, $nomeDoTabeliao,$nomeDoCartorio, $remuneracao )
    {
        parent::__construct($nrRegisro,$nomeDasPartesEnvolvidas,$nomedasTestemunhas, $objetoContrato, $dtEmissaoDoContrato, $dtRegistroDoContrato, $nomeDoTabeliao,$nomeDoCartorio,);
        
        $this->remuneracao = $remuneracao;
    }

     //=================== Gets e Sets ================================
  public function getNrRegisro(){
    return $this->nrRegisro;
  }

  
  public function setNrRegisro($nrRegisro){
    $this->nrRegisro = $nrRegisro;
  }

  public function getNomeDasPartesEnvolvidas(){
    return $this->nomeDasPartesEnvolvidas;
  }

  public function setNomeDasPartesEnvolvidas($nomeDasPartesEnvolvidas){
    $this->nomeDasPartesEnvolvidas = $nomeDasPartesEnvolvidas;
  }

  public function getNomedasTestemunhas(){
    return $this->nomedasTestemunhas;
  }

  public function setNomedasTestemunhas($nomedasTestemunhas){
    $this->nomedasTestemunhas = $nomedasTestemunhas;
  }

  public function getObjetoContrato(){
    return $this->objetoContrato;
  }

  public function setObjetoContrato($objetoContrato){
    $this->objetoContrato = $objetoContrato;
  }

  public function getDtEmissaoDoContrato(){
    return $this->dtEmissaoDoContrato;
  }

  public function setDtEmissaoDoContrato($dtEmissaoDoContrato){
    $this->dtEmissaoDoContrato = $dtEmissaoDoContrato;
  }

  public function getDtRegistroDoContrato(){
    return $this->dtRegistroDoContrato;
  }

  public function setDtRegistroDoContrato($dtRegistroDoContrato){
    $this->dtRegistroDoContrato = $dtRegistroDoContrato;
  }

  public function getNomeDoTabeliao(){
    return $this->nomeDoTabeliao;
  }

  public function setNomeDoTabeliao($nomeDoTabeliao){
    $this->nomeDoTabeliao = $nomeDoTabeliao;
  }

  public function getNomeDoCartorio(){
    return $this->nomeDoCartorio;
  }

  public function setNomeDoCartorio($nomeDoCartorio){
    $this->nomeDoCartorio = $nomeDoCartorio;
  }

  public function getRemuneracao()
  {
      return $this->remuneracao;
  }

  public function setRemuneracao($remuneracao)
  {
      $this->remuneracao = $remuneracao;

  }
 //=================================================================

 
  
}