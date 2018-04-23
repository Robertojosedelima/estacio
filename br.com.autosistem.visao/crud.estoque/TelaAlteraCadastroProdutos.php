<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php

require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id= $_GET["id"];
$cbd = new ConexaoBD();
    $sql1 = "select * from cadastro_produtos WHERE codigo_produto='$id'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados = mysqli_fetch_assoc($resultado1);
    $fornecedor = $dados['fornecedor_fk'];
    

?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA DE ITENS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>ALTERA DE ITENS</div>
          <form name = "altera-novo-produto" action="AlteraProduto.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 <fieldset>
     <legend>Fabricante</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Selecione o Fabricante:</label>
     <select name ="fornecedor" disabled="" >
   <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_fornecedor WHERE cpf_cnpj='$fornecedor'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados1 = mysqli_fetch_array($resultado);
        $codigo = $dados1['cpf_cnpj'];
        $nome_fantasia = $dados1['nome_fantasia'];
        
        echo"<option value='$codigo'>$nome_fantasia / $fornecedor </option>";
   
    ?>
   
</select>
     </td></tr>
    </table>
     
     
 </fieldset>
 <fieldset>
     <legend>Dados do item</legend>
     <br/>
     <table>
     <tr><td>
     <input type="hidden" name="codigo" value="<?php echo $dados['codigo_produto']; ?>">
     </td></tr>
     <tr><td>
     <label for="name">Nome:</label>
     <input type="text" name="nome"value="<?php echo $dados['nome']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Modelo:</label>
     <input type="text" name="modelo" value="<?php echo $dados['modelo']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Descrição:</label>
     <input type="text" name="descricao" value="<?php echo $dados['descricao']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Quantidade:</label>
     <input type="text" name="quantidade" value="<?php echo $dados['quantidade']; ?>"/>
     </td></tr>   
      <tr><td>
     <label for="name">Valor:</label>
     <input type="text" name="valor" value="<?php echo $dados['valor']; ?>"/>
     </td></tr>   
     
   
     </table>
     
     
 </fieldset>
<br/>
        <div class="button">
        <button type="submit">Finalizar Alteração</button>
        </div>  
            
        </form>
    </body>
</html>
