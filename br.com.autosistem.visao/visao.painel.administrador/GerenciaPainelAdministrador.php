<html>
    
<head>
    <title>Gerenciamento adm</title>
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
        td{border:1px solid #aaa;
        }
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
        .alterar{
                
            background-color: #e4b691;
                text-decoration: none;
                border: 1px solid #aaa;
                color: #030303;
                margin-left: 60px;
                
               
                
                
            }
            .alterar:hover{
                background-color: #7b8085;
                color: #fafafa;
                
            }
            
        
        
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
    
    
    date_default_timezone_set('America/Sao_Paulo'); 
?>

<body>
    
 <fieldset>
  <legend ></legend>
 <table >
     <legend >DADOS DO USUARIO</legend>
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


 
   <br/> 
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
 <legend ></legend>
  
 <table >
     <legend class="legend">ULTIMAS VENDAS & ORÇAMENTOS</legend>
     <th>Ultimas Vendas Realizadas</th>
     <th>Ultimas Vendas Não Concluidas</th>
     <th>Ultimos Orçamentos</th>

     
     <tr>
     <td> <?php
    $codigo_usuario = $_SESSION['codigo'];
    $codigo_usuario = $_SESSION['codigo'];
    $sql1 = "select * from pedido WHERE status ='fechado' ORDER BY codigo_pedido DESC LIMIT 5";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    while ($dados1 = mysqli_fetch_array($resultado1)){
    $codigo = $dados1['codigo_pedido'];
    echo"<br>";
    echo $dados1['codigo_pedido'];
    
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'> Alterar</a>";
        echo "</br>";
        
     }
    ?></td>
     <td><?php
    $codigo_usuario = $_SESSION['codigo'];
    $sql2 = "select* from pedido WHERE status ='aberto' ORDER BY codigo_pedido DESC LIMIT 5";
    $resultado2 = mysqli_query($cbd->conecta(),$sql2);
    while ($dados2 = mysqli_fetch_array($resultado2)){
    $codigo = $dados2['codigo_pedido'];
    echo"<br>";
    echo $dados2['codigo_pedido'];
    
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'> Alterar</a>";
        echo "</br>";
        
     }
    ?></td>
     <td>
     <?php
    $codigo_usuario = $_SESSION['codigo'];
    $sql3 = "select * from pedido WHERE status ='orcamento' ORDER BY codigo_pedido DESC LIMIT 5";
    $resultado3 = mysqli_query($cbd->conecta(),$sql3);
    while ($dados3 = mysqli_fetch_array($resultado3)){
    $codigo = $dados3['codigo_pedido'];
    echo"<br>";
    echo $dados3['codigo_pedido'];
    
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=".$codigo."'> Alterar</a>";
        echo "</br>";
        
     }
    ?>
    </td>
     </tr>

 </table>
   
   

 
   <br/> 
 <table>
     <legend class="legend">DADOS ADMINISTRATIVOS</legend>
     <th>Ultimos Usuarios Cadastrados</th>
     <th>Ultimos Clientes PF</th>
     <th>Ultimos Clientes PJ</th>
     <th>Ultimos Fornecedores Cadastrados</th>
     <th>Ultimos Funções Cadastradas</th>
     <th>Ultimos Funcionarios Cadastrados</th>
     
     <tr>
      <td>
     <?php
    if($_SESSION["nome"]=="ADM-MASTER"){
    $sql4 = "select * from cadastro_usuario ORDER BY codigo_usuario DESC LIMIT 5 ";
    }else{
    $sql4 = "select * from cadastro_usuario WHERE area!='Administrativo' ORDER BY codigo_usuario DESC LIMIT 5";
    }
    
    $resultado4 = mysqli_query($cbd->conecta(),$sql4);
    while ($dados4 = mysqli_fetch_array($resultado4)){
    $codigo = $dados4['codigo_usuario'];
    echo"<br>";
    echo $dados4['usuario'];
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.usuario/TelaAlteraCadastroUsuario.php?id=".$codigo."'> Alterar</a>";
        echo "</br>"; 
     }
    ?>
    </td>
       <td>
     <?php
    
    $sql5 = "select * from cadastro_cliente_pessoa_fisica ORDER BY cpf DESC LIMIT 5 ";
    $resultado5 = mysqli_query($cbd->conecta(),$sql5);
    while ($dados5 = mysqli_fetch_array($resultado5)){
    $codigo = $dados5['cpf'];
    echo"<br>";
    echo $dados5['nome'];
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.cliente.pessoa.fisica/TelaAlteraCadastroClientePessoaFisica.php?id=".$codigo."'> Alterar</a>";
        echo "</br>"; 
     }
    ?>
    </td>
     <td>
     <?php
    
    $sql6 = "select * from cadastro_cliente_pessoa_juridica ORDER BY cpf_cnpj DESC LIMIT 5 ";
    $resultado6 = mysqli_query($cbd->conecta(),$sql6);
    while ($dados6 = mysqli_fetch_array($resultado6)){
    $codigo = $dados6['cpf_cnpj'];
    echo"<br>";
    echo $dados6['razao_social'];
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.cliente.pessoa.juridica/TelaAlteraCadastroClientePessoaJuridica.php?id=".$codigo."'> Alterar</a>";
        echo "</br>"; 
     }
    ?>
    </td>
    <td>
     <?php
    
    $sql7 = "select * from cadastro_fornecedor ORDER BY cpf_cnpj DESC LIMIT 5 ";
    $resultado7 = mysqli_query($cbd->conecta(),$sql7);
    while ($dados7 = mysqli_fetch_array($resultado7)){
    $codigo = $dados7['cpf_cnpj'];
    echo"<br>";
    echo $dados7['razao_social'];
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.fornecedor/TelaAlteraCadastroFornecedor.php?id=".$codigo."'> Alterar</a>";
        echo "</br>"; 
     }
    ?>
    </td>
     <td>
     <?php
    
    $sql8 = "select * from cadastro_funcao ORDER BY codigo_funcao DESC LIMIT 5 ";
    $resultado8 = mysqli_query($cbd->conecta(),$sql8);
    while ($dados8 = mysqli_fetch_array($resultado8)){
    $codigo = $dados8['codigo_funcao'];
    echo"<br>";
    echo $dados8['nome'];
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.funcao/TelaAlteraCadastroFuncao.php?id=".$codigo."'> Alterar</a>";
        echo "</br>"; 
     }
    ?>
    </td>
     <td>
     <?php
    
    $sql9 = "select * from cadastro_funcionario WHERE nome!='ADM-MASTER' ORDER BY cpf DESC LIMIT 5 ";
    $resultado9 = mysqli_query($cbd->conecta(),$sql9);
    while ($dados9 = mysqli_fetch_array($resultado9)){
    $codigo = $dados9['cpf'];
    echo"<br>";
    echo $dados9['nome'];
    echo"<a class=alterar target=_blank href='../../br.com.autosistem.visao/crud.funcionario/TelaAlteraCadastroFuncionario.php?id=".$codigo."'> Alterar</a>";
        echo "</br>"; 
     }
    ?>
    </td>
     </tr>

 </table>
   

 
   <br/> 
 <table>
     <legend class="legend">DADOS FINANCEIRO</legend>
     
     <th>Total de Vendas Dia</th>
     <th>Total de Vendas Més</th>
     <th>Total de Vendas Ano</th>
     
     <tr>
     
     <td>R$:<?php
            $data = date('Y-m-d');
            $sql10 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "WHERE p.status='fechado'  AND p.data='$data'";
            $resultado10 = mysqli_query($cbd->conecta(),$sql10);
            while ($dados10 = mysqli_fetch_array($resultado10)){
            $valores = $dados10['total'];
            $total_de_vendas_dia = $valores + @$total_de_vendas_dia;
   }
   
    echo @$total_de_vendas_dia;
    ?></td>
     <td>R$:<?php
            $modelo_ano = date('Y');
            $modelo_mes = date('m');
            $sql12 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "WHERE p.status='fechado' AND year(p.data)='$modelo_ano' AND month(p.data)='$modelo_mes'";
            $resultado12 = mysqli_query($cbd->conecta(),$sql12);
            while ($dados12 = mysqli_fetch_array($resultado12)){
            $valores = $dados12['total'];
            $total_de_vendas_mes = $valores + @$total_de_vendas_mes;
   }
   
    echo @$total_de_vendas_mes;
    ?></td>
     <td>R$:<?php
            $sql16 = "select * from item_pedido ip "
            . "inner join pedido p on (ip.pedido_fk = p.codigo_pedido)"
            . "WHERE p.status='fechado' AND year(p.data)='$modelo_ano'";
            $resultado16 = mysqli_query($cbd->conecta(),$sql16);
            while ($dados16 = mysqli_fetch_array($resultado16)){
            $valores = $dados16['total'];
            $total_de_vendas = $valores + @$total_de_vendas;
   }
    echo @$total_de_vendas;
    ?></td>
    
     </tr>

 </table>

 
   <br/> 
 

 
   <br/> 
 
   </fieldset>
    </body>
</html>