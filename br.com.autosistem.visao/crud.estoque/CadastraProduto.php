<?php
include("../../br.com.autosistem.controle/controle.estoque/Produto.php");
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");


$nome = $_POST["nome"];
$descricao = $_POST["descricao"];


 



 $cp = new Produto();
        
       $cp->setNome($nome);
       $cp->setDescricao($descricao);
      
       
       $cpbd = new CadastroProdutoBD();
        $cpbd->inserir($cp->getNome(), $cp->getDescricao());
?>
