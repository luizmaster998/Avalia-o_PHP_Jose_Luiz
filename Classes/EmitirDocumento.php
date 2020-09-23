<?php
class EmitirDocumento implements totalizeEmissao
{
    protected $certidoesImpressa;
    protected $contratoImpresso;




    public function adicionarCertidao(certidao $umaCertidao)
    {
        $this->certidoesImpressa[] = array ($umaCertidao); 


    }
    public Function totalEmissaoCertidao()
    {
        foreach($this->certidoesImpressa as $certidao){
                      print_r($certidao[0]).'<br>';
                 }
    }
    

    public function adicionarContrato(contrato $umcontrato)
    {
            $this->contratoImpresso[] = array ($umcontrato);
    }

    public Function totalEmissaoContrato()
    {
        foreach($this->contratoImpresso as $contrato){
                print_r($contrato[0]).'<br>';
       }
    }

    
   
}