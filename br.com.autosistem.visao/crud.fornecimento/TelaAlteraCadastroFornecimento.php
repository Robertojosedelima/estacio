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
   $sql2 = "select * from cadastro_fornecimento f "
            . "inner join cadastro_fornecedor cf on (cf.cpf_cnpj = f.fornecedor_fk)"
            . "inner join cadastro_produtos cp on (cp.codigo_produto = f.produto_fk)";
    $resultado2 = mysqli_query($cbd->conecta(),$sql2);
    $dados2 = mysqli_fetch_assoc($resultado2);
    
    
    

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA CADASTRO DE FORNECIMENTO </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>ALTERA CADASTRO DE FORNECIMENTO</div>
          <form name = "altera-fornecimento" action="AlteraFornecimento.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 <fieldset>
     <tr><td>
     <label for="name">Fabricante Atual:</label>
     <input type="text" value="<?php echo $dados2['nome_fantasia'];?>" disabled=""/>
     </td></tr> 
     <legend>Novo Fabricante</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Selecione o Fabricante:</label>
     <select name ="fornecedor">
    <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_fornecedor";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo_fornecedor = $dados['cpf_cnpj'];
        $razao_social = $dados['razao_social'];
        $nome_fantasia = $dados['nome_fantasia'];
        echo"<option value='$codigo_fornecedor'>$nome_fantasia / $razao_social </option>";
        
       }
   
    ?>
   
</select>
     </td></tr>
    </table>
     
     
 </fieldset>
  <fieldset>
      <tr><td>
     <input type="hidden" name="codigo" value="<?php echo $dados2['codigo_fornecimento']; ?>">
     </td></tr>
      <tr><td>
     <label for="name">Produto Atual:</label>
     <input type="text" value="<?php echo $dados2['nome']; ?>" disabled=""/>
     </td></tr>
     <legend>Produto</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Selecione o Novo Produto:</label>
     <select name ="produto">
    <?php
    $cbd = new ConexaoBD();
    $sql1 = "select * from cadastro_produtos";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    while ($dados1 = mysqli_fetch_array($resultado1)){
        $codigo_produto = $dados1['codigo_produto'];
        $nome = $dados1['nome'];
        $descricao = $dados1['descricao'];
        echo"<option value='$codigo_produto'>$nome / $descricao </option>";
        
       }
   
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
     <label for="name">Modelo:</label>
     <input type="text" name="modelo" value="<?php echo $dados2['modelo']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Quantidade:</label>
     <input type="number" name="quantidade" value="<?php echo $dados2['quantidade']; ?>"/>
     </td></tr>   
      <tr><td>
     <label for="name">Valor:</label>
     <input type="number" name="valor" value="<?php echo $dados2['valor']; ?>"/>
     </td></tr>   
     
   
     </table>
     
     
 </fieldset>
<br/>
        <div class="button">
        <button type="submit">Finalizar Cadastro</button>
        </div>  
            
        </form>
    </body>
</html>
