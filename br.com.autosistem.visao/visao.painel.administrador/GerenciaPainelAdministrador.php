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
 <legend>DADOS ADMINISTRATIVOS</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
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
   
   
</fieldset>
<fieldset>
 <legend>DADOS FINANCEIRO</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
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
</fieldset>
<fieldset>
 <legend>DADOS ESTOQUE</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
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
</fieldset>
<fieldset>
 <legend>DATAS COMEMORATIVAS</legend>
   <br/> 
 <table border="1" bgcolor="#9cf">
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