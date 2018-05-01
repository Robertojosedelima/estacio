<?php
include("../../br.com.autosistem.controle/controle.estoque/Fornecimento.php");
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroFornecimentoBD.php");
$codigo = $_POST['codigo'];
$fornecedor = $_POST["fornecedor"];
$produto = $_POST["produto"];
$modelo = $_POST["modelo"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];


 



 $cfor = new Fornecimento();
        
       $cfor->setFornecedor($fornecedor);
       $cfor->setProduto($produto);
       $cfor->setModelo($modelo);
       $cfor->setQuantidade($quantidade);
       $cfor->setValor($valor);
       $cfor->setCodigo($codigo);
      
       
       $cforbd = new CadastroFornecimentoBD();
        $cforbd->alterar($cfor->getCodigo(), $cfor->getFornecedor(), $cfor->getProduto(), $cfor->getModelo(), $cfor->getQuantidade(), $cfor->getValor());
?>
