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
     <label for="name">Descrição:</label>
     <input type="text" name="descricao" value="<?php echo $dados['descricao']; ?>"/>
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
