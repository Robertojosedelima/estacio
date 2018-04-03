   
<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroClientePessoaFisicaBD.php");

    ?>
<a href="TelaCadastroClientePessoaFisica.php">Novo Cliente Pessoa Fisica +</a></br></br>


    
        
           
    <?php
   echo"<table border=1>";
   echo"<th>Nome</th>";
   echo"<th>Cpf</th>";
   echo"<th>Rg</th>";
  
    
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_cliente_pessoa_fisica";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['cpf'];
        $nome = $dados['nome'];
        $sobre_nome = $dados['sobre_nome'];
        $rg=$dados['rg'];
       
       echo"<tr>";
       echo"<td>";
       echo"$nome $sobre_nome";
       echo"</td>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$rg";
       echo"</td>";
       echo"<td>";
       echo"<a href='TelaAlteraCadastroClientePessoaFisica.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaClientePessoaFisica.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
          
   
    


    

