<?php
interface totalizeEmissao
{
    

    public function adicionarCertidao(certidao $umaCertidao);

    public function adicionarContrato(contrato $contratosImpresso);

    public Function totalEmissaoCertidao();

    public Function totalEmissaoContrato();
    
}