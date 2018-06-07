<html>
<head>
    <title>Gerenciamento vend</title>
    <style type="text/css">
        
        table{border-spacing:0px;
              border-collapse:collapse;
              
             
              
             
          }
        th{border:1px solid #aaa;
           background-color: #f2673a;
           padding: 0px;
           text-align: left;
           height: 40px;
           width: 300px;
           font-family: Arial;
           margin-top: 10px;
           color: #ffffff;
           font-size: 16px;
           
           }
            .dif{border:1px solid #aaa;
           background-color: #434343;
           padding: 0px;
           text-align: left;
           height: 40px;
           width: 600px;
           font-family: Arial;
           margin-top: 10px;
           color: #ffffff;
           font-size: 16px;
           
           }
        td{border:1px solid #aaa}
        tr{background-color: #ffffff;}
        fieldset{background-color: #9cf;
                 margin-left: 300px;
                 margin-right: 30px;
                 border: 1px solid #aaa;
                
                 }
                 .field1{background-color: #7b8085;
                 margin-left: 300px;
                 margin-right: 30px;
                 border: 1px solid #aaa;
                
                 }         
        legend{color: #434343;
               font-weight:bolder;
               padding: 0px;
               font-family: Arial;
               background-color: #9cf;}
        .legend{color: #434343;
               font-weight:bolder;
               padding: 0px;
               font-family: Arial;
               background-color: #7b8085;}
                 
        body{ background-color: #e8e8e8;
             margin-left: 50px;
              margin-top: 10px;}
        
        
        
    </style>
    
</head>
<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
  $cbd = new ConexaoBD();
     $sql = "select * from cadastro_empresa_responsavel er "
           . "inner join endereco en on (er.fk_endereco = en.codigo)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $endereco = $dados['rua'].$dados['numero'];
    
    
     
?>

 
<body>
    <fieldset>
        <legend></legend>
 <table>
     <legend>DADOS DO USUARIO</legend>
     <th class="dif">Nome</th>
     <th class="dif">Função</th>
     <th class="dif">Usuario</th>
     <th class="dif">Email</th>
     <th class="dif">Telefone</th>
     
     <tr>
     <td><?php echo $_SESSION['nome'];?></td>
     <td><?php echo $_SESSION['funcao'];?></td>
     <td><?php echo $_SESSION['usuario'];?></td>
     <td><?php echo $_SESSION['email'];?></td>
     <td><?php echo $_SESSION['telefone'];?></td>
     </tr>

 </table>

 
  
 <table>
     <legend>DADOS DA EMPRESA</legend>
     <th class="dif">Nome da Empresa</th>
     <th class="dif">Razão Social</th>
     <th class="dif">Cnpj</th>
     <th class="dif">Endereço</th>
     <th class="dif">Telefone</th>
     
     <tr>
     <td><?php echo $dados['nome_fantasia'];?></td>
     <td><?php echo $dados['razao_social'];?></td>
     <td><?php echo $dados['cpf_cnpj'];?></td>
     <td>Rua:<?php echo $dados['rua'];?> N:<?php echo $dados['numero'];?>,<?php echo $dados['bairro'];?>,<?php echo $dados['cidade'];?>-<?php echo $dados['estado'];?></td>
     <td><?php echo $dados['telefone_residencial'];?></td>
     </tr>

 </table>
    </fieldset>
    <br>
    <fieldset class="field1">
        <legend></legend>
 <table >
     <legend class="legend">ULTIMAS VENDAS & ORÇAMENTOS</legend>
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
   
 
   <br/> 
 <table>
     <legend class="legend">DADOS FINANCEIRO ANUAL</legend>
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
    </body>
</html>