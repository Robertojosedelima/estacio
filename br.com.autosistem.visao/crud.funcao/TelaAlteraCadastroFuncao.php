<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id= $_GET["id"];
$cbd = new ConexaoBD();
    $sql = "select * from cadastro_funcao WHERE codigo_funcao='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA CADASTRO DE FUNÇÃO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
             <div>ALTERA CADASTRO DE FUNÇÃO</div>
             <form name = "cadastro-nova-funcao" action="AlteraFuncao.php" method="post">
            
            
 <!-- DADOS FUNCAO-->
<fieldset>
 <legend>Dados da Função</legend>
   <br/> 
 <table>
     <tr><td>
     <input type="hidden" name="codigo" value="<?php echo $dados['codigo_funcao']; ?>">
     </td></tr>
     <tr><td>
     <label for="name">Nome da Nova Função:</label>
     <input type="text" name="nomedafuncao" value="<?php echo $dados['nome']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Descrição da Nova Função:</label>
     <input type="text" name="descricaodafuncao" value="<?php echo $dados['descricao']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Carga Horaria Semanal:</label>
     <input type="text" name="cargahorariasemanal" value="<?php echo $dados['carga_horaria_semanal']; ?>"/>
     </td></tr>

 </table>
</fieldset>
 <fieldset>
     <legend>Informação Salarial </legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Salario:</label>
     <input type="number" name="salario" value="<?php echo $dados['salario']; ?>"/>
     </td></tr>   
    
     </table>
     
     
 </fieldset>
 
<br/>
        <div class="button">
        <button type="submit">Alterar Cadastro</button>
        </div>  
            
        </form>
    </body>
</html>
