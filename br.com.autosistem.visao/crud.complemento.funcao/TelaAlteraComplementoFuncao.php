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
    $sql = "select * from cadastro_complemento_funcao WHERE codigo_complemento_funcao='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title> ALTERA COMPLEMENTO FUNÇÃO </title>
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
          <div>ALTERA CADASTRO DE COMPLEMENTO FUNÇÃO</div>
          <form name = "Altera-complemento" action="AlteraComplementoFuncao.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 
 <fieldset>
     <legend>Dados do complemento</legend>
     <br/>
     <table>
     <tr><td>
     <input type="hidden" name="codigo_complemento_funcao" value="<?php echo $id; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Bonus Salaria:</label>
     <input type="text" name="bonus_salarial" value="<?php echo $dados['bonus_salarial']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">PRL:</label>
     <input type="text" name="prl" value="<?php echo $dados['prl']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Alimentação:</label>
     <input type="text" name="vale_alimentacao" value="<?php echo $dados['vale_alimentacao']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Refeição:</label>
     <input type="text" name="vale_refeicao" value="<?php echo $dados['vale_refeicao']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Combustível:</label>
     <input type="text" name="vale_combustivel" value="<?php echo $dados['vale_combustivel']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Vale Saúde:</label>
     <input type="text" name="vale_saude" value="<?php echo $dados['vale_saude']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Cultura:</label>
     <input type="text" name="vale_cultura" value="<?php echo $dados['vale_cultura']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Educação:</label>
     <input type="text" name="vale_educacao" value="<?php echo $dados['vale_educacao']; ?>"/>
     </td></tr>  
     <tr><td>
     <label for="name">Carga Horária Mensal:</label>
     <input type="text" name="carga_horaria_mensal" value="<?php echo $dados['carga_horaria_mensal']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Carga Horária Anual:</label>
     <input type="number" name="carga_horaria_anual" value="<?php echo $dados['carga_horaria_anual']; ?>"/>
     </td></tr>  
     <tr><td>
     <label for="name">Data de Inicio:</label>
     <input type="date" name="data_inicio" value="<?php echo $dados['data_inicio']; ?>"/>
     </td></tr>      
     <tr><td>
     <label for="name">Observação:</label>
     <input type="text" name="observacao" value="<?php echo $dados['observacao']; ?>"/>
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
