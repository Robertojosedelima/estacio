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
LISTA DE TODOS OS PRODUTOS CADASTRADOS.
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");


    ?>




    
        
           
    <?php
   echo"<table border=1>";
   echo"<th>Codigo</th>";
   echo"<th>Nome</th>";
   echo"<th>Descricao</th>";
   echo"<th>Modelo</th>";
   echo"<th>Fabricante</th>";
   echo"<th>Quantidade no Estoque</th>";
   echo"<th>Valor Unitario</th>";
   
   
  
    
    $cbd = new ConexaoBD();
    
    $sql = "select * from cadastro_fornecimento f "
            . "inner join cadastro_produtos p on (f.produto_fk = p.codigo_produto)"
            . "inner join cadastro_fornecedor fo on (f.fornecedor_fk = fo.cpf_cnpj)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo_fornecimento'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        $quantidade = $dados['quantidade'];
        $valor = $dados['valor'];
        $modelo = $dados['modelo'];
        $fabricante = $dados['razao_social'];
        $marca = $dados['nome_fantasia'];

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$nome";
       echo"</td>";
       echo"<td>";
       echo"$descricao";
       echo"</td>";
       echo"<td>";
       echo"$modelo";
       echo"</td>";
       echo"<td>";
       echo"$fabricante / $marca";
       echo"</td>";
       echo"<td>";
       echo"$quantidade";
       echo"</td>";
       echo"<td>";
       echo"$valor";
       echo"</td>";
       
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
