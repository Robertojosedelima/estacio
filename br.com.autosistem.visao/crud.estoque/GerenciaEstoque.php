<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");


    ?>

<a href="TelaCadastroProdutos.php">Nova Produto +</a></br></br>


    
        
           
    <?php
   echo"<table border=1>";
   echo"<th>Codigo</th>";
   echo"<th>Nome</th>";
   echo"<th>Modelo</th>";
   echo"<th>Descricao</th>";
   echo"<th>Quantidade</th>";
   echo"<th>Valor Unitario</th>";
   
  
    
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_produtos";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo'];
        $nome = $dados['nome'];
        $modelo = $dados['modelo'];
        $descricao = $dados['descricao'];
        $quantidade = $dados['quantidade'];
        $valor = $dados['valor'];

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$nome";
       echo"</td>";
       echo"<td>";
       echo"$modelo";
       echo"</td>";
       echo"<td>";
       echo"$descricao";
       echo"</td>";
       echo"<td>";
       echo"$quantidade";
       echo"</td>";
       echo"<td>";
       echo"$valor";
       echo"</td>";
       echo"<td>";
       echo"<a href='TelaAlteraCadastroProdutos.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaProduto.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
