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
 <body>
         
 <form name = "cadastro-novo-pedido" action="ItemPedido.php" method="post">
     <fieldset>
     <legend>ESCOLHA OS ITENS DO PEDIDO </legend>
     <br/>
     <table>
     <tr><td>
    <select name ="produto">
    <?php
    $cbd = new ConexaoBD();
    $sql3 = "select * from cadastro_produtos";
           
    $resultado3 = mysqli_query($cbd->conecta(),$sql3);
    while ($dados3 = mysqli_fetch_array($resultado3)){
        $codigo_produto = $dados3['codigo_produto'];
        $nome_produto = $dados3['nome'];
        $modelo_produto = $dados3['modelo'];
        $descricao_produto = $dados3['descricao'];
        $quantidade_produto = $dados3['quantidade'];
        $valor_produto = $dados3['valor'];
        $fornecedor = $dados3['fornecedor_fk'];
        echo"<option value='$codigo_produto'>Cod: $codigo_produto - $nome_produto - Modelo: $modelo_produto - Valor: $valor_produto</option>";
        
       }
  
    ?>
   
</select>
     
     <input type="number" name="quantidade" value="1" style="width:60px">
     <input type="hidden" name="pedido" value="<?php echo $pedido; ?>" />
     
        <button type="submit">Adicionar</button>
         
     </td></tr>
    </table>
     
     
 </fieldset>
 </form>
 <fieldset>
 <legend>ITENS ESCOLHIDOS</legend>
       <?php
       
   echo"<table border=1>";
   echo"<th>Codigo</th>";
   echo"<th>Nome</th>";
   echo"<th>Modelo</th>";
   echo"<th>Descricao</th>";
   echo"<th>Quantidade</th>";
   echo"<th>Valor Unitario</th>";
   echo"<th>Sub-Total</th>";
   
   
   
  $total=0;
    
    $cbd = new ConexaoBD();
    $sql4 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "inner join cadastro_produtos cp on (ip.produto_fk = cp.codigo_produto)"
            . "WHERE ip.pedido_fk='$pedido'";
    $resultado4 = mysqli_query($cbd->conecta(),$sql4);
    while ($dados4 = mysqli_fetch_array($resultado4)){
        $codigo = $dados4['codigo_produto'];
        $nome = $dados4['nome'];
        $modelo = $dados4['modelo'];
        $descricao = $dados4['descricao'];
        $quantidade = $dados4['quantidade_escolhida'];
        $valor_unitario = $dados4['valor'];
        $sub_total = $dados4['total'];
        $codigo_item_pedido = $dados4['codigo_item_pedido'];
        
        $total = $sub_total+$total;

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$nome";
       echo"</td>";
       echo"<td>";
       echo"$modelo";
       echo"</td>";
       echo"<td>";
       echo"$descricao";
       echo"</td>";
       echo"<td>";
       echo"$quantidade";
       echo"</td>";
       echo"<td>";
       echo"$valor_unitario";
       echo"</td>";
       echo"<td>";
       echo"$sub_total";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaItem.php?id=".$codigo_item_pedido."&pedido=".$pedido."'>Deletar</a>'";
      
       echo"</td>";
       echo"</tr>";
       }
      
       
   echo"</table>";
   echo"<table align='right'border=1>";
   echo"<th>Total R$</th>";
       echo"<td>";
       echo"$total";
       echo"</td>";
       echo"</table>";
   
    ?>
 </fieldset>
 </body>