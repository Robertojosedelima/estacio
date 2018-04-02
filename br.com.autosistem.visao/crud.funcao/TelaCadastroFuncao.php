<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CADASTRO DE FUNÇÃO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
             <div>CADASTRO DE FUNÇÃO</div>
        <form name = "cadastro-nova-funcao" action="CadastraFuncao.php" method="post">
            
            
 <!-- DADOS FUNCAO-->
<fieldset>
 <legend>Dados da Função</legend>
   <br/> 
 <table>
     <tr><td>
     <label for="name">Nome da Nova Função:</label>
     <input type="text" name="nomedafuncao"/>
     </td></tr> 
     <tr><td>
     <label for="name">Descrição da Nova Função:</label>
     <input type="text" name="descricaodafuncao"/>
     </td></tr>
     <tr><td>
     <label for="name">Carga Horaria Semanal:</label>
     <input type="text" name="cargahorariasemanal"/>
     </td></tr>

 </table>
</fieldset>
 <fieldset>
     <legend>Informação Salarial </legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Salario:</label>
     <input type="number" name="salario"/>
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
