<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroFornecimentoBD.php");


    ?>

<a href="TelaCadastroFornecimento.php">Nova Ordem de Fornecimento +</a></br></br>


    
        
           
    <?php
   echo"<table border=1>";
   echo"<th>Codigo</th>";
   echo"<th>Produto</th>";
   echo"<th>Modelo</th>";
   echo"<th>Fornecedor</th>";
   echo"<th>Quantidade</th>";
   echo"<th>Valor</th>";
   $cbd = new ConexaoBD();
    $sql = "select * from cadastro_fornecimento f "
            . "inner join cadastro_fornecedor cf on (cf.cpf_cnpj = f.fornecedor_fk)"
            . "inner join cadastro_produtos cp on (cp.codigo_produto = f.produto_fk)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo_fornecimento'];
        $quantidade = $dados['quantidade'];
        $valor = $dados['valor'];
        $fornecedor = $dados['nome_fantasia'];
        $razao_social = $dados['razao_social'];
        $produto = $dados['nome'];
        $descricao = $dados['descricao'];
        $modelo = $dados['modelo'];
  
       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$produto / $descricao";
       echo"</td>";
       echo"<td>";
       echo"$modelo";
       echo"</td>";
       echo"<td>";
       echo"$fornecedor / $razao_social";
       echo"</td>";
       echo"<td>";
       echo"$quantidade";
       echo"</td>";
       echo"<td>";
       echo"$valor";
       echo"</td>";
       echo"<td>";
       echo"<a href='TelaAlteraCadastroFornecimento.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaFornecimento.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
