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
include("../../br.com.autosistem.modelo/modelo.estoque/CadastroProdutoBD.php");


    ?>

            <a class="novo" href="TelaCadastraComplementoFuncao.php">Novo Complemento de Função</a></br></br>

        
           
    <?php
   echo"<table>";
   echo"<th>C.Função</th>";
   echo"<th>C.Complemento</th>";
   echo"<th>Nome</th>";
   echo"<th>Descricao</th>";
   echo"<th>Observação</th>";
   echo"<th>Data de Inicio</th>";
   echo"<th>Carga horaria Mensal</th>";
   echo"<th>Salario</th>";
   
   
   
  
    
    $cbd = new ConexaoBD();
   $sql = "select * from cadastro_complemento_funcao ccf "
            . "inner join cadastro_funcao cf on (ccf.funcao_fk = cf.codigo_funcao)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    
    while ($dados = mysqli_fetch_array($resultado)){                 
        $codigo = $dados['codigo_funcao'];
        $codigo_complemento = $dados['codigo_complemento_funcao'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        $observacao = $dados['observacao'];
        $data_inicio = $dados['data_inicio'];
        $carga_horaria_mensal = $dados['carga_horaria_mensal'];
        $salario = $dados['salario'];
        
        
        
       

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
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
       echo"$observacao";
       echo"</td>";
       echo"<td>";
       echo"$data_inicio";
       echo"</td>";
      echo"<td>";
       echo"$carga_horaria_mensal";
       echo"</td>";
       echo"<td>";
       echo"$salario";
       echo"</td>";
       
       echo"<td>";
       echo"<a class=alterar href='TelaAlteraComplementoFuncao.php?id=".$codigo_complemento."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a class=deletar href='DeletaComplementoFuncao.php?id=".$codigo_complemento."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
