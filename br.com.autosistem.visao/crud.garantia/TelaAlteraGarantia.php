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
    $sql = "select * from cadastro_solicitacao_garantia WHERE codigo_solicitacao_garantia='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA CADASTRO DE GARANTIA </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
              
                
            }
            body{
                background-color: #f2673a;
               
               
            }
            fieldset{
                border: 1px solid #434343;
                
            }
            table{
                font-family: Arial;
                margin-left: 20px;
            }
            </style>
    </head>
    <body>
          <div>ALTERA CADASTRO DE GARANTIA / TROCA DE PRODUTO</div>
          <form name = "garantia" action="AlteraGarantia.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 
 <fieldset>
     <legend>Dados da Solicitação </legend>
     <br/>
     <table>
     <tr><td>
     <input type="hidden" name="codigo_solicitacao_garantia" value="<?php echo $id; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Numero do Pedido:</label>
     <input type="number" name="numero_pedido" value="<?php echo $dados['pedido_fk']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Numero da Nota Fiscal:</label>
     <input type="number" name="numero_nota" value="<?php echo $dados['nota_fk']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Codigo do Produto:</label>
     <input type="number" name="codigo_produto" value="<?php echo $dados['produto_fk']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Codigo de Fabricacao:</label>
     <input type="number" name="codigo_fabricacao" value="<?php echo $dados['codigo_fabricacao']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Data de Fabricacao:</label>
     <input type="date" name="data_fabricacao" value="<?php echo $dados['data_fabricacao']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Data da Compra:</label>
     <input type="date" name="data_compra" value="<?php echo $dados['data_compra']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Lote:</label>
     <input type="number" name="lote" value="<?php echo $dados['lote']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Descrição da Solicitação:</label>
     <input type="text" name="descricao_solicitacao" value="<?php echo $dados['descricao_solicitacao']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Descrição do Motivo:</label>
     <input type="text" name="descricao_motivo" value="<?php echo $dados['descricao_motivo']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Nome do Solicitante:</label>
     <input type="text" name="nome_solicitante" value="<?php echo $dados['nome_solicitante']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Cpf / Rg do Solicitante:</label>
     <input type="text" name="cpf_rg_solicitante" value="<?php echo $dados['cpf_rg_solicitante']; ?>"/>
     </td></tr>  
     <tr><td>
     <label for="name">Data da Solicitação:</label>
     <input type="date" name="data_solicitacao" value="<?php echo $dados['data_solicitacao']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Telefone 01 Solicitante:</label>
     <input type="number" name="telefone01_solicitante" value="<?php echo $dados['telefone01']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Telefone 02 Solicitante:</label>
     <input type="number" name="telefone02_solicitante" value="<?php echo $dados['telefone02']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Prazo de Retorno (dias):</label>
     <input type="number" name="prazo_retorno" value="<?php echo $dados['prazo_retorno']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Status Atual:</label>
     <input type="text" name="status_atual" value="<?php echo $dados['status']; ?>" disabled=""/>
     </td></tr>
     <tr><td>
     <label for="name">Status Desejado:</label>
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
     <input type="text" name="conclusao" value="<?php echo $dados['conclusao']; ?>"/>
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
