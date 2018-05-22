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
        <title>CADASTRO DE COMPLEMENTO PRODUTOS REQ </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE COMPLEMENTO PRODUTOS REQ</div>
          <form name = "cadastro-novo-complemento" action="CadastraComplementoProduto.php" method="post">
            
            
 <!-- DADOS USUARIO-->
<fieldset>
     <legend>Produto</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Selecione o Produto :</label>
     <select name ="produto">
    <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_fornecimento f "
            . "inner join cadastro_fornecedor cf on (cf.cpf_cnpj = f.fornecedor_fk)"
            . "inner join cadastro_produtos cp on (cp.codigo_produto = f.produto_fk)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo_fornecimento'];
        
        $valor = $dados['valor'];
        
        $produto = $dados['nome'];
        
        $descricao = $dados['descricao'];
        
        $modelo = $dados['modelo'];
        echo"<option value='$codigo'>Codigo:$codigo / Produto: $produto /Modelo: $modelo </option>";
        
       }
   
    ?>
   
</select>
     </td></tr>
    </table>
     
     
 </fieldset>
 
 <fieldset>
     <legend>Dados do complemento</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Codigo de Fabricacao:</label>
     <input type="number" name="codigo_fabricacao"/>
     </td></tr> 
     <tr><td>
     <label for="name">Data de Fabricacao:</label>
     <input type="date" name="data_fabricacao"/>
     </td></tr>   
     <tr><td>
     <label for="name">Lote:</label>
     <input type="number" name="lote"/>
     </td></tr>   
     <tr><td>
     <label for="name">Tempo de Garantia:</label>
     <input type="number" name="tempo_garantia"/>
     </td></tr>   
     <tr><td>
     <label for="name">Observacao Referente a Garantia:</label>
     <input type="text" name="observacao_garantia"/>
     </td></tr> 
     <tr><td>
     <label for="name">Altura:</label>
     <input type=text" name="altura"/>
     </td></tr>   
     <tr><td>
     <label for="name">Largura:</label>
     <input type="text" name="largura"/>
     </td></tr>   
     <tr><td>
     <label for="name">Peso do Produto:</label>
     <input type="text" name="peso_produto"/>
     </td></tr>  
     <tr><td>
     <label for="name">Peso da Embalagem:</label>
     <input type="number" name="peso_embalagem"/>
     </td></tr>   
     <tr><td>
     <label for="name">Itens do Produto:</label>
     <input type="number" name="itens_produto"/>
     </td></tr>   
     <tr><td>
     <label for="name">Site do Fabricante:</label>
     <input type="text" name="site_fabricante"/>
     </td></tr>   
     <tr><td>
     <label for="name">Telefone Fabricante:</label>
     <input type="number" name="telefone_fabricante"/>
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
