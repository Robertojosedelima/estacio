<?php
include("../../br.com.autosistem.controle/controle.estoque/Produto.php");
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");

$fornecedor = $_POST["fornecedor"];
$nome = $_POST["nome"];
$modelo = $_POST["modelo"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];

 



 $cp = new Produto();
        
       $cp->setNome($nome);
       $cp->setModelo($modelo);
       $cp->setDescricao($descricao);
       $cp->setQuantidade($quantidade);
       $cp->setValor($valor);
       $cp->setFornecedor($fornecedor);
       
       $cpbd = new CadastroProdutoBD();
        $cpbd->inserir($cp->getFornecedor(), $cp->getNome(), $cp->getModelo(), $cp->getDescricao(), $cp->getQuantidade(), $cp->getValor());
?>
