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
        <title>CADASTRO DE COMPLEMENTO PRODUTOS </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE COMPLEMENTO PRODUTOS</div>
          <form name = "cadastro-novo-complemento" action="CadastraComplementoProduto.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 
 <fieldset>
     <legend>Dados do item</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Nome:</label>
     <input type="text" name="nome"/>
     </td></tr>   
     <tr><td>
     <label for="name">Descrição:</label>
     <input type="text" name="descricao"/>
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
