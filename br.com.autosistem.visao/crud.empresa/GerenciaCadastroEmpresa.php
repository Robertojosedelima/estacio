<style type="text/css">
            *{
                margin: 0;
                padding: 0;
              
                
            }
            body{
                
               
               
            }
           
            table,td,tr{
                font-family: Arial;
                margin-left: 20px;
                border: 1px solid #aaa;
                background-color: #fafafa;
                font-family: Arial;
                
            }
            th{
                text-align: left;
                border: 1px solid #aaa;
                background-color: #9cf;
                font-family: Arial;
                
            }
            .novo{
                text-decoration: none;
                background-color: #9cf;
                border: 1px solid #aaa;
                color: #030303;
                margin-left: 20px;
            }
            .novo:hover{
                background-color: #7b8085;
                color: #fafafa;
                
            }
            .alterar{
                background-color: #f2673a;
                text-decoration: none;
                border: 1px solid #aaa;
                color: #030303;
                
            }
            .alterar:hover{
                background-color: #7b8085;
                color: #fafafa;
                
            }
            .deletar{
                background-color: #ea0909;
                text-decoration: none;
                border: 1px solid #aaa;
                color: #030303;
                
            }
            .deletar:hover{
                background-color: #7b8085;
                color: #fafafa;
                
            }
            </style>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroEmpresaBD.php");


    ?>

<!--<a href="TelaCadastroEmpresa.php">Novo Empresa +</a></br></br>-->


    
        
           
    <?php
   echo"<table>";
   echo"<th>Razao Social</th>";
   echo"<th>Cnpj</th>";
   
  
    
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_empresa_responsavel";
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
       echo"<a class=alterar href='TelaAlteraCadastroEmpresa.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a class=deletar href='DeletaEmpresa.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
