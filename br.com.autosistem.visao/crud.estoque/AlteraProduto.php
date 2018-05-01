<?php
include("../../br.com.autosistem.controle/controle.estoque/Produto.php");
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");

$codigo_produto = $_POST["codigo"];
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];


 



 $cp = new Produto();
        
       $cp->setNome($nome);
       $cp->setDescricao($descricao);
       $cp->setCodigo($codigo_produto);
       
       $cpbd = new CadastroProdutoBD();
        $cpbd->alterar($cp->getCodigo(), $cp->getNome(), $cp->getDescricao());
?>
