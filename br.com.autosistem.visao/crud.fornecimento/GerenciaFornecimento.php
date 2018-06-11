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
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroFornecimentoBD.php");


    ?>

            <a class="novo" href="TelaCadastroFornecimento.php">Nova Ordem de Fornecimento</a></br></br>


    
        
           
    <?php
   echo"<table>";
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
       echo"<a class=alterar href='TelaAlteraCadastroFornecimento.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a class=deletar href='DeletaFornecimento.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
