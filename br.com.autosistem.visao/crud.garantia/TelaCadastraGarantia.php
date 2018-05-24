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
        <title>CADASTRO DE GARANTIA </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE GARANTIA / TROCA DE PRODUTO</div>
          <form name = "garantia" action="CadastroGarantia.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 
 <fieldset>
     <legend>Dados da Solicitação </legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Numero do Pedido:</label>
     <input type="number" name="numero_pedido"/>
     </td></tr> 
     <tr><td>
     <label for="name">Numero da Nota Fiscal:</label>
     <input type="number" name="numero_nota"/>
     </td></tr> 
     <tr><td>
     <label for="name">Codigo do Produto:</label>
     <input type="number" name="codigo_produto"/>
     </td></tr> 
     <tr><td>
     <label for="name">Codigo de Fabricacao:</label>
     <input type="number" name="codigo_fabricacao"/>
     </td></tr> 
     <tr><td>
     <label for="name">Data de Fabricacao:</label>
     <input type="date" name="data_fabricacao"/>
     </td></tr> 
     <tr><td>
     <label for="name">Data da Compra:</label>
     <input type="date" name="data_compra"/>
     </td></tr> 
     <tr><td>
     <label for="name">Lote:</label>
     <input type="number" name="lote"/>
     </td></tr>   
     <tr><td>
     <label for="name">Descrição da Solicitação:</label>
     <input type="text" name="descricao_solicitacao" size="160"/>
     </td></tr> 
     <tr><td>
     <label for="name">Descrição do Motivo:</label>
     <input type="text" name="descricao_motivo" size="160"/>
     </td></tr> 
     <tr><td>
     <label for="name">Nome do Solicitante:</label>
     <input type="text" name="nome_solicitante"/>
     </td></tr>   
     <tr><td>
     <label for="name">Cpf / Rg do Solicitante:</label>
     <input type="text" name="cpf_rg_solicitante"/>
     </td></tr>  
     <tr><td>
     <label for="name">Data da Solicitação:</label>
     <input type="date" name="data_solicitacao"/>
     </td></tr>
     <tr><td>
     <label for="name">Telefone 01 Solicitante:</label>
     <input type="number" name="telefone01_solicitante"/>
     </td></tr>
     <tr><td>
     <label for="name">Telefone 02 Solicitante:</label>
     <input type="number" name="telefone02_solicitante"/>
     </td></tr>
     <tr><td>
     <label for="name">Prazo de Retorno (dias):</label>
     <input type="number" name="prazo_retorno" />
     </td></tr>
     <tr><td>
     <label for="name">Status:</label>
     <select name="status">
         <option>Em Andamento</option>
         <option>Em Analise</option>
         <option>Troca Autorizada</option>
         <option>Conserto Realizado</option>
         <option>Garantia Indeferida</option>
         <option></option>
     </select>
     </td></tr>
     <tr><td>
     <label for="name">Conclusão:</label>
     <input type="text" name="conclusao" size="160" />
     </td></tr>
     
        
     
     
   
     </table>
     
     
 </fieldset>
<br/>
        <div class="button">
        <button type="submit">Finalizar Solicitação</button>
        </div>  
            
        </form>
    </body>
</html>
