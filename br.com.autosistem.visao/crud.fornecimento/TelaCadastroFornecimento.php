<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CADASTRO DE FORNECIMENTO </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE FORNECIMENTO</div>
          <form name = "cadastro-novo-fornecimento" action="CadastroFornecimento.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 <fieldset>
     <legend>Fabricante</legend>
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
        $codigo = $dados['cpf_cnpj'];
        $razao_social = $dados['razao_social'];
        $nome_fantasia = $dados['nome_fantasia'];
        echo"<option value='$codigo'>$nome_fantasia / $razao_social </option>";
        
       }
   
    ?>
   
</select>
     </td></tr>
    </table>
     
     
 </fieldset>
  <fieldset>
     <legend>Produto</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Selecione o Produto:</label>
     <select name ="produto">
    <?php
    $cbd = new ConexaoBD();
    $sql1 = "select * from cadastro_produtos";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    while ($dados1 = mysqli_fetch_array($resultado1)){
        $codigo = $dados1['codigo_produto'];
        $nome = $dados1['nome'];
        $descricao = $dados1['descricao'];
        echo"<option value='$codigo'>$nome / $descricao </option>";
        
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
     <input type="text" name="modelo"/>
     </td></tr> 
     <tr><td>
     <label for="name">Quantidade:</label>
     <input type="number" name="quantidade"/>
     </td></tr>   
      <tr><td>
     <label for="name">Valor:</label>
     <input type="text" name="valor"/>
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
