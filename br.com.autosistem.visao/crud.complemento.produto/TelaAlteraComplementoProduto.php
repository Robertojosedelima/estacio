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
    $sql = "select * from cadastro_complemento_produto WHERE codigo_complemento_produto='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> ALTERA COMPLEMENTO PRODUTOS REQ </title>
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
          <div>ALTERA CADASTRO DE COMPLEMENTO PRODUTOS REQ</div>
          <form name = "Altera-complemento" action="AlteraComplementoProduto.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 
 <fieldset>
     <legend>Dados do complemento</legend>
     <br/>
     <table>
     <tr><td>
     <input type="hidden" name="codigo_complemento_produto" value="<?php echo $id; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Codigo de Fabricacao:</label>
     <input type="number" name="codigo_fabricacao" value="<?php echo $dados['codigo_fabricacao']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Data de Fabricacao:</label>
     <input type="date" name="data_fabricacao"value="<?php echo $dados['data_fabricacao']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Lote:</label>
     <input type="number" name="lote" value="<?php echo $dados['lote']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Tempo de Garantia:</label>
     <input type="number" name="tempo_garantia" value="<?php echo $dados['tempo_garantia']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Observacao Referente a Garantia:</label>
     <input type="text" name="observacao_garantia" value="<?php echo $dados['observacao_garantia']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Altura:</label>
     <input type=text" name="altura" value="<?php echo $dados['altura']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Largura:</label>
     <input type="text" name="largura" value="<?php echo $dados['largura']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Peso do Produto:</label>
     <input type="text" name="peso_produto" value="<?php echo $dados['peso_produto']; ?>"/>
     </td></tr>  
     <tr><td>
     <label for="name">Peso da Embalagem:</label>
     <input type="number" name="peso_embalagem" value="<?php echo $dados['peso_embalagem']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Itens do Produto:</label>
     <input type="number" name="itens_produto" value="<?php echo $dados['itens_produto']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Site do Fabricante:</label>
     <input type="text" name="site_fabricante" value="<?php echo $dados['site_fabricante']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Telefone Fabricante:</label>
     <input type="number" name="telefone_fabricante" value="<?php echo $dados['telefone_fabricante']; ?>"/>
     </td></tr>   
        
     
     
   
     </table>
     
     
 </fieldset>
<br/>
        <div class="button">
        <button type="submit">Alterar</button>
        </div>  
             
        </form>
    </body>
</html>
