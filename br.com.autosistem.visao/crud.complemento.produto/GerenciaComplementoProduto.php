<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");


    ?>

<a href="TelaCadastraComplementoProduto.php">Nova  Complemento de Produto +</a></br></br>

        
           
    <?php
   echo"<table border=1>";
   echo"<th>C.Prod</th>";
   echo"<th>C.Forn</th>";
   echo"<th>C.Compl</th>";
   echo"<th>Nome</th>";
   echo"<th>Descricao</th>";
   echo"<th>Tempo de Garantia</th>";
   echo"<th>Data de Fabricacao</th>";
   echo"<th>Quantidade</th>";
   echo"<th>Valor Unitario</th>";
   
   
  
    
    $cbd = new ConexaoBD();
   $sql = "select * from cadastro_complemento_produto ccp "
            . "inner join cadastro_fornecimento cf on (ccp.fornecimento_fk = cf.codigo_fornecimento)"
            . "inner join cadastro_produtos cp on (cp.codigo_produto = cf.produto_fk)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    
    while ($dados = mysqli_fetch_array($resultado)){                 
        $codigo = $dados['codigo_produto'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        $quantidade = $dados['quantidade'];
        $valor = $dados['valor'];
        $tempo_garantia = $dados['tempo_garantia'];
        $data_fabricacao = $dados['data_fabricacao'];
        $codigo_complemento = $dados['codigo_complemento_produto'];
        $codigo_fornecimento = $dados['codigo_fornecimento'];
       

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$codigo_fornecimento";
       echo"</td>";
       echo"<td>";
       echo"$codigo_complemento";
       echo"</td>";
       echo"<td>";
       echo"$nome";
       echo"</td>";
       echo"<td>";
       echo"$descricao";
       echo"</td>";
       echo"<td>";
       echo"$tempo_garantia";
       echo"</td>";
       echo"<td>";
       echo"$data_fabricacao";
       echo"</td>";
      echo"<td>";
       echo"$quantidade";
       echo"</td>";
       echo"<td>";
       echo"$valor";
       echo"</td>";
       
       echo"<td>";
       echo"<a href='TelaAlteraComplementoProduto.php?id=".$codigo_complemento."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaComplementoProduto.php?id=".$codigo_complemento."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
