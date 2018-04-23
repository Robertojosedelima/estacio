<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
    $pedido=$_GET["pedido"];
    
    $cbd = new ConexaoBD();
    $sql = "select * from pedido p "
            . "inner join cadastro_usuario u on (p.vendedor_fk = u.codigo_usuario)"
            . "inner join cadastro_funcionario f on (f.cpf = u.funcionario_fk)"
            
            . "WHERE p.codigo_pedido='$pedido'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_array($resultado);
    $cliente = $dados['cliente_fk'];
    
    $sql1 = "select * from cadastro_cliente_pessoa_fisica WHERE cpf='$cliente'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados1 = mysqli_fetch_assoc($resultado1);
    
    $sql2 = "select * from cadastro_cliente_pessoa_juridica WHERE cpf_cnpj='$cliente'";
    $resultado2 = mysqli_query($cbd->conecta(),$sql2);
    $dados2 = mysqli_fetch_assoc($resultado2);

?>
<fieldset>
 <legend>DADOS DO PEDIDO</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
     <th>Numero</th>
     <th>Cliente</th>
     <th>Vendedor</th>
     <th>Data</th>
     <th>Hora</th>
     
     <tr>
     <td><?php echo $dados['codigo_pedido']; ?></td>
     <td><?php echo $dados1['nome']; ?><?php echo $dados2['nome_fantasia']; ?></td>
     <td><?php echo $dados['nome']; ?></td>
     <td><?php echo $dados['data']; ?></td>
     <td><?php echo $dados['hora']; ?></td>
     </tr>

 </table>
</fieldset>
