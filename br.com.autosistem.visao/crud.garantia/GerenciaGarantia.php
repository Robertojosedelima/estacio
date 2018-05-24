<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.garantia/CadastroGarantiaBD.php");


    ?>

<a href="TelaCadastraGarantia.php">Nova  Solicitação de Garantia +</a></br></br>

        
           
    <?php
   echo"<table border=1>";
   echo"<th>Codigo da Solicitação</th>";
   echo"<th>Data da Solicitação</th>";
   echo"<th>Nome do Solicitante</th>";
   echo"<th>Telefone do Solicitante</th>";
   echo"<th>Status</th>";
   
   
    $cbd = new ConexaoBD();
   $sql = "select * from cadastro_solicitacao_garantia ";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    
    while ($dados = mysqli_fetch_array($resultado)){                 
        $codigo = $dados['codigo_solicitacao_garantia'];
        $data_solicitacao = $dados['data_solicitacao'];
        $nome = $dados['nome_solicitante'];
        $telefone = $dados['telefone01'];
        $status = $dados['status'];
       
       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$data_solicitacao";
       echo"</td>";
       echo"<td>";
       echo"$nome";
       echo"</td>";
       echo"<td>";
       echo"$telefone";
       echo"</td>";
       echo"<td>";
       echo"$status";
       echo"</td>";
       
       
       echo"<td>";
       echo"<a href='TelaAlteraGarantia.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaGarantia.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
