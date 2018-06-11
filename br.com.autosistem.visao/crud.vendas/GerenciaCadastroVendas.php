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


?>

            <a class="novo" href="../../br.com.autosistem.visao/crud.pedidos/TelaCadastroPedido.php" >Novo Pedido</a></br></br>
   SÓ PEDIDOS FINALIZADOS. 
    <?php  
session_start();
if(!isset($_SESSION["usuario"])|| !isset($_SESSION["senha"])){
   header('refresh:1,../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php'); 
}


?>             
    <?php
   echo"<table>";
   echo"<th>Numero</th>";
   echo"<th>Cliente</th>";
   echo"<th>Data</th>";
   echo"<th>Hora</th>";
   echo"<th>Status</th>";
   echo"<th>Observacao</th>";
   echo"<th>Vendedor</th>";
   $codigo_usuario = $_SESSION['codigo'];
   
    $cbd = new ConexaoBD();
    $situacao = "fechado";
    $sql = "select * from pedido p "
            . "inner join cadastro_usuario u on (p.vendedor_fk = u.codigo_usuario)"
            . "inner join cadastro_funcionario f on (f.cpf = u.funcionario_fk)"
            . "WHERE p.status='$situacao' AND vendedor_fk ='$codigo_usuario'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo_pedido'];
        $cliente_fk = $dados['cliente_fk'];
        $status = $dados['status'];
        $observacao = $dados['observacao'];
        $data = $dados['data'];
        $hora = $dados['hora'];
        $vendedor_fk = $dados['nome'];
        
        
        $sql1 = "select * from cadastro_cliente_pessoa_fisica WHERE cpf='$cliente_fk'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados1 = mysqli_fetch_assoc($resultado1);
    
    $sql2 = "select * from cadastro_cliente_pessoa_juridica WHERE cpf_cnpj='$cliente_fk'";
    $resultado2 = mysqli_query($cbd->conecta(),$sql2);
    $dados2 = mysqli_fetch_assoc($resultado2);

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo $dados1['nome'];
       echo $dados2['nome_fantasia'];
       echo"</td>";
       echo"<td>";
       echo"$data";
       echo"</td>";
       echo"<td>";
       echo"$hora";
       echo"</td>";
       echo"<td>";
       echo"$status";
       echo"</td>";
       echo"<td>";
       echo"$observacao";
       echo"</td>";
       echo"<td>";
       echo"$vendedor_fk";
       echo"</td>";
       echo"<td>";
       echo"<a class=alterar href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a class=deletar href='../../br.com.autosistem.visao/crud.pedidos/DeletaPedido.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>




