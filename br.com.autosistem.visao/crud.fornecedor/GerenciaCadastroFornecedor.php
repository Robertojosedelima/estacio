<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroFornecedorBD.php");


    ?>
<a href="TelaCadastroFornecedor.php">Novo Fornecedor +</a></br></br>


    
        
           
    <?php
   echo"<table border=1>";
   echo"<th>Razao Social</th>";
   echo"<th>Cnpj</th>";
   
  
    
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_fornecedor";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['cpf_cnpj'];
        $razao_social = $dados['razao_social'];

       echo"<tr>";
       echo"<td>";
       echo"$razao_social";
       echo"</td>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"<a href='TelaAlteraCadastroFornecedor.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaFornecedor.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>