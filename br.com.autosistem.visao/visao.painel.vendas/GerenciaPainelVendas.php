
<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
  $cbd = new ConexaoBD();
     $sql = "select * from cadastro_empresa_responsavel er "
           . "inner join endereco en on (er.fk_endereco = en.codigo)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $endereco = $dados['rua'].$dados['numero'];
    
    
     
?>
<fieldset>
 <legend>DADOS DO USUARIO</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
     <th>Nome</th>
     <th>Função</th>
     <th>Usuario</th>
     <th>Email</th>
     <th>Telefone</th>
     
     <tr>
     <td><?php echo $_SESSION['nome'];?></td>
     <td><?php echo $_SESSION['funcao'];?></td>
     <td><?php echo $_SESSION['usuario'];?></td>
     <td><?php echo $_SESSION['email'];?></td>
     <td><?php echo $_SESSION['telefone'];?></td>
     </tr>

 </table>
</fieldset>
<fieldset>
 <legend>DADOS DA EMPRESA</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
     <th>Nome da Empresa</th>
     <th>Razão Social</th>
     <th>Cnpj</th>
     <th>Endereço</th>
     <th>Telefone</th>
     
     <tr>
     <td><?php echo $dados['nome_fantasia'];?></td>
     <td><?php echo $dados['razao_social'];?></td>
     <td><?php echo $dados['cpf_cnpj'];?></td>
     <td>Rua:<?php echo $dados['rua'];?> N:<?php echo $dados['numero'];?>,<?php echo $dados['bairro'];?>,<?php echo $dados['cidade'];?>-<?php echo $dados['estado'];?></td>
     <td><?php echo $dados['telefone_residencial'];?></td>
     </tr>

 </table>
</fieldset>
<fieldset>
    
    
 <legend>ULTIMAS VENDAS & ORÇAMENTOS</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
     <th>Ultimas Vendas Realizadas</th>
     <th>Ultimas Vendas Não Concluidas</th>
     <th>Ultimos Orçamentos</th>

     
     <tr>
     <td> <?php
    $codigo_usuario = $_SESSION['codigo'];
    $codigo_usuario = $_SESSION['codigo'];
    $sql1 = "select * from pedido WHERE vendedor_fk ='$codigo_usuario' AND status ='fechado'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    while ($dados1 = mysqli_fetch_array($resultado1)){
    $codigo = $dados1['codigo_pedido'];
    echo"<br>";
    echo $dados1['codigo_pedido'];
    
    echo"<a href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'>Alterar</a>";
        echo "</br>";
        
     }
    ?></td>
     <td><?php
    $codigo_usuario = $_SESSION['codigo'];
    $sql2 = "select* from pedido WHERE vendedor_fk ='$codigo_usuario' AND status ='aberto'";
    $resultado2 = mysqli_query($cbd->conecta(),$sql2);
    while ($dados2 = mysqli_fetch_array($resultado2)){
    $codigo = $dados2['codigo_pedido'];
    echo"<br>";
    echo $dados2['codigo_pedido'];
    
    echo"<a href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'>Alterar</a>";
        echo "</br>";
        
     }
    ?></td>
     <td>
     <?php
    $codigo_usuario = $_SESSION['codigo'];
    $sql3 = "select * from pedido WHERE vendedor_fk ='$codigo_usuario' AND status ='orcamento'";
    $resultado3 = mysqli_query($cbd->conecta(),$sql3);
    while ($dados3 = mysqli_fetch_array($resultado3)){
    $codigo = $dados3['codigo_pedido'];
    echo"<br>";
    echo $dados3['codigo_pedido'];
    
    echo"<a href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'>Alterar</a>";
        echo "</br>";
        
     }
    ?>
    </td>
     </tr>

 </table>
   
   
</fieldset>

<fieldset>

 <legend>DADOS FINANCEIRO ANUAL</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
     <th>Total Vendas Més</th>
     <th>Total Vendas Ano</th>
     <th>Quantidade de Itens Vendidos</th>
     <th>Quantidade de Vendas Realizadas Més</th>
     <th>Quantidade de Vendas Realizadas Ano</th>
     
     <tr>
     <td>R$:<?php
            $modelo_ano = date('Y');
            $modelo_mes = date('m');
            $sql4 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "WHERE p.vendedor_fk ='$codigo_usuario' AND p.status='fechado' AND year(p.data)='$modelo_ano' AND month(p.data)='$modelo_mes'";
            $resultado4 = mysqli_query($cbd->conecta(),$sql4);
            while ($dados4 = mysqli_fetch_array($resultado4)){
            $valores = $dados4['total'];
            $total_de_vendas_mes = $valores + @$total_de_vendas_mes;
   }
   
    echo @$total_de_vendas_mes;
    ?></td>
     <td>R$:<?php
            $sql5 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "WHERE p.vendedor_fk ='$codigo_usuario' AND p.status='fechado' AND year(p.data)='$modelo_ano'";
            $resultado5 = mysqli_query($cbd->conecta(),$sql5);
            while ($dados5 = mysqli_fetch_array($resultado5)){
            $valores = $dados5['total'];
            $total_de_vendas = $valores + @$total_de_vendas;
   }
    echo $total_de_vendas;
    ?></td>
     <td><?php
            $sql6 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "WHERE p.vendedor_fk ='$codigo_usuario' AND p.status='fechado' AND year(p.data)='$modelo_ano'";
            $resultado6 = mysqli_query($cbd->conecta(),$sql6);
            while ($dados6 = mysqli_fetch_array($resultado6)){
            $itens = $dados6['quantidade_escolhida'];
            $quantidade = $itens + @$quantidade;
   }
    echo @$quantidade;
    ?> Unidades</td>
       <td><?php
          
            $modelo_ano = date('Y');
            $modelo_mes = date('m');
            $sql7 = "select * from pedido  "
            . "WHERE vendedor_fk ='$codigo_usuario' AND status='fechado' AND year(data)='$modelo_ano' AND month(data)='$modelo_mes'";
            $resultado7 = mysqli_query($cbd->conecta(),$sql7);
            while ($dados7 = mysqli_fetch_array($resultado7)){
                 
                @$quantidade_total_de_vendas_mes=$quantidade_total_de_vendas_mes+1;
   }
   
    echo @$quantidade_total_de_vendas_mes;
    ?> Vendas</td>
     <td><?php
          
            $modelo_ano = date('Y');
            $modelo_mes = date('m');
            $sql8 = "select * from pedido  "
            . "WHERE vendedor_fk ='$codigo_usuario' AND status='fechado' AND year(data)='$modelo_ano'";
            $resultado8 = mysqli_query($cbd->conecta(),$sql8);
            while ($dados8 = mysqli_fetch_array($resultado8)){
                 
                @$quantidade_total_de_vendas_ano=$quantidade_total_de_vendas_ano+1;
   }
   
    echo @$quantidade_total_de_vendas_ano;
    ?> Vendas</td>
     </tr>

 </table>
</fieldset>
