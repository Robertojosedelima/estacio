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
  
 <table>
     <legend class="legend">ULTIMAS VENDAS & ORÇAMENTOS</legend>
     <th>Ultimas Vendas Realizadas</th>
     <th>Ultimas Vendas Não Concluidas</th>
     <th>Ultimos Orçamentos</th>

     
     <tr>
     <td> <?php
    $codigo_usuario = $_SESSION['codigo'];
    $codigo_usuario = $_SESSION['codigo'];
    $sql1 = "select * from pedido WHERE status ='fechado'";
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
    $sql2 = "select* from pedido WHERE status ='aberto'";
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
    $sql3 = "select * from pedido WHERE status ='orcamento'";
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
     <legend class="legend">DADOS ADMINISTRATIVOS</legend>
     <th>Ultimos Usuarios Cadastrados</th>
     <th>Ultimos Clientes Cadastrados</th>
     <th>Ultimos Fornecedores Cadastrados</th>
     <th>Ultimos Funções Cadastradas</th>
     <th>Ultimos Funcionarios Cadastrados</th>
     
     <tr>
     <td>USUARIO</td>
     <td>CLIENTES</td>
     <td>FORNECEDORES</td>
     <td>FUNÇÕES</td>
     <td>FUNCIONARIOS</td>
     </tr>

 </table>
   

 
   <br/> 
 <table>
     <legend class="legend">DADOS FINANCEIRO</legend>
     <th>Receita</th>
     <th>Despesa</th>
     <th>Faturamentos</th>
     <th>Total de Vendas</th>
     <th>Total de Serviços</th>
     
     <tr>
     <td>1</td>
     <td>2</td>
     <td>3</td>
     <td>4</td>
     <td>5</td>
     </tr>

 </table>

 
   <br/> 
 <table>
     <legend class="legend">DADOS ESTOQUE</legend>
     <th>Quantidade de Itens</th>
     <th>Itens com Baixo Estoque</th>
     <th>Poriduto com Pouc Saida</th>
     <th>Valor do Estoque</th>
     <th>Quantidade de Saida Diaria</th>
     
     <tr>
     <td>1</td>
     <td>2</td>
     <td>3</td>
     <td>4</td>
     <td>5</td>
     </tr>

 </table>

 
   <br/> 
 <table>
     <legend class="legend">DATAS COMEMORATIVAS</legend>
     <th>Aniversariante do Més</th>
     <th>Aniversariante do Dia</th>
     <th>Data Parceria do Més</th>
     <th>Data Parceria do Dia</th>
     <th>Funcionario do Més</th>
     
     <tr>
     <td>1</td>
     <td>2</td>
     <td>3</td>
     <td>4</td>
     <td>5</td>
     </tr>

 </table>
   </fieldset>
    </body>
</html>