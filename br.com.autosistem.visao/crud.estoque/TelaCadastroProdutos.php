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
        <title>CADASTRO DE ITENS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE ITENS</div>
          <form name = "cadastro-novo-usuario" action="CadastraProduto.php" method="post">
            
            
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
        echo"<option value='$codigo'>$nome_fantasia </option>";
        
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
     <label for="name">Nome:</label>
     <input type="text" name="nome"/>
     </td></tr>   
     <tr><td>
     <label for="name">Modelo:</label>
     <input type="text" name="modelo"/>
     </td></tr>   
     <tr><td>
     <label for="name">Descrição:</label>
     <input type="text" name="descricao"/>
     </td></tr>   
     <tr><td>
     <label for="name">Quantidade:</label>
     <input type="text" name="quantidade"/>
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
