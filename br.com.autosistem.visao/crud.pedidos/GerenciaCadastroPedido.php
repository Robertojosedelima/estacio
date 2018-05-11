<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

?>

<a href="TelaCadastroPedido.php" >Novo Pedido +</a></br></br>
   SÓ PEDIDOS EM ABERTO. 
    <?php  
session_start();
if(!isset($_SESSION["usuario"])|| !isset($_SESSION["senha"])){
   header('refresh:1,../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php'); 
}


?>       
    <?php
   echo"<table border=1>";
   echo"<th>Numero</th>";
   echo"<th>Cliente</th>";
   echo"<th>Data</th>";
   echo"<th>Hora</th>";
   echo"<th>Status</th>";
   echo"<th>Observacao</th>";
   echo"<th>Vendedor</th>";
   $codigo_usuario = $_SESSION['codigo'];
 
    $cbd = new ConexaoBD();
    $situacao = "aberto";
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
       echo"<a href='MontarPedido.php?pedido=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaPedido.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>




