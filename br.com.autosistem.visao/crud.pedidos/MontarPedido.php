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
            legend{color: #434343;
               font-weight:bolder;
               padding: 0px;
               font-family: Arial;
               background-color: #9cf;
               margin-left: 20px;}
            
        .legend{color: #434343;
               font-weight:bolder;
               padding: 0px;
               font-family: Arial;
               background-color: #7b8085;}
            </style>   
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
<body>
<fieldset>
     <legend class="legend">DADOS DO PEDIDO</legend>
   <br/> 
 <table>
     
     <th>Numero</th>
     <th>Cliente</th>
     <th>Vendedor</th>
     <th>Data</th>
     <th>Hora</th>
     
     <tr>
     <td><?php echo $dados['codigo_pedido']; ?></td>
     <td><?php echo $dados1['nome']; ?> <?php echo $dados2['nome_fantasia']; ?></td>
     <td><?php echo $dados['nome']; ?></td>
     <td><?php echo $dados['data']; ?></td>
     <td><?php echo $dados['hora']; ?></td>
     </tr>

 </table>
   <br>
  </fieldset>
<br>

 
<fieldset>
<legend class="legend">ESCOLHA OS ITENS DO PEDIDO </legend>
 <form name = "cadastro-novo-pedido" action="ItemPedido.php" method="post">
     
     
     <br/>
     <table>
     <tr><td>
    <select name ="produto">
    <?php
    $cbd = new ConexaoBD();
    $sql3 = "select * from cadastro_fornecimento f "
            . "inner join cadastro_fornecedor cf on (cf.cpf_cnpj = f.fornecedor_fk)"
            . "inner join cadastro_produtos cp on (cp.codigo_produto = f.produto_fk)";
    $resultado3 = mysqli_query($cbd->conecta(),$sql3);
    $dados3 = mysqli_fetch_assoc($resultado3);
    $resultado3 = mysqli_query($cbd->conecta(),$sql3);
    while ($dados3 = mysqli_fetch_array($resultado3)){
        $codigo_fornecimento = $dados3['codigo_fornecimento'];
        $nome_produto = $dados3['nome'];
        $modelo_produto = $dados3['modelo'];
        $descricao_produto = $dados3['descricao'];
        $quantidade_produto = $dados3['quantidade'];
        $valor_produto = $dados3['valor'];
        $fornecedor = $dados3['fornecedor_fk'];
        echo"<option value='$codigo_fornecimento'>Cod: $codigo_fornecimento - $nome_produto / $descricao_produto - Modelo: $modelo_produto - Valor: $valor_produto</option>";
        
       }
  
    ?>
   
</select>
     
     <input type="number" name="quantidade" value="1" style="width:60px">
     <input type="hidden" name="pedido" value="<?php echo $pedido; ?>" />
     <input type="hidden" name="quantidade_produto" value="<?php echo $quantidade_produto; ?>" />
     
     
        <button type="submit">Adicionar</button>
         
     </td></tr>
    </table>
     
     
 
 </form>
<br>
</fieldset>
<br>
 <legend class="legend">ITENS ESCOLHIDOS</legend>
       <?php
       
   echo"<table>";
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
            . "inner join cadastro_fornecimento cf on (ip.produto_fk = cf.codigo_fornecimento)"
            . "inner join cadastro_produtos cp on (cf.produto_fk = cp.codigo_produto)"
            . "WHERE ip.pedido_fk='$pedido'";
    $resultado4 = mysqli_query($cbd->conecta(),$sql4);
    while ($dados4 = mysqli_fetch_array($resultado4)){
        $codigo = $dados4['codigo_fornecimento'];
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
       echo"<a class=deletar href='DeletaItem.php?id=".$codigo_item_pedido."&pedido=".$pedido."'>Deletar</a>";
       
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
 <br>
     <form name = "finalizar-novo-pedido" action="FinalizarPedido.php" method="post">
         <fieldset>
     <legend class="legend">ESCOLHA A FORMA DE PAGAMENTO </legend>
     <br/>
     <table>
     <tr><td>
     <select name="pagamento">
     <option value="Dinheiro">Dinheiro</option> 
     <option value="Cartao de credito" selected>Cartao de credito</option>
     <option value="Cartao de debito">Cartao de debito</option>
     </select>
     
     <input type="hidden" name="pedido" value="<?php echo $pedido; ?>" />
     <input type="text" name="observacao" value="observação"/>
     <input type="text" value="Orçamento" disabled=""/>
     <input type="checkbox" name="orcamento" value="on"/>
     
     <button type="submit">Finalizar Pedido</button>
     
         
     </td></tr>
    </table>
     <br>
         </fieldset>
     
     

 </form>
     <br>
 <fieldset>
     <legend class="legend">RETORNE</legend>
     <br>
     
     <a class="novo" href='GerenciaCadastroPedido.php'>Pedidos Em Aberto</a></br><BR>
     <a class="novo" href='../../br.com.autosistem.visao/crud.orcamento/GerenciaCadastroOrcamento.php'>Pedidos Em Orçamento</a></br><BR>
     <a class="novo" href='../../br.com.autosistem.visao/crud.vendas/GerenciaCadastroVendas.php'>Pedidos Finalizados</a>
     </fieldset>
 </body>