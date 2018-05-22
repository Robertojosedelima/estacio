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
        <title>CADASTRO DE COMPLEMENTO FUNÇÃO </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE COMPLEMENTO FUNÇÃO</div>
          <form name = "cadastro-novo-complemento" action="CadastraComplementoFuncao.php" method="post">
            
            
 <!-- DADOS USUARIO-->
<fieldset>
     <legend>Função</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Selecione a Função :</label>
     <select name ="funcao">
    <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_funcao ";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo_funcao'];
        $descricao_funcao = $dados['descricao'];
        $nome = $dados['nome'];
        
        
        echo"<option value='$codigo'>Codigo:$codigo / Nome: $nome /Descrição: $descricao_funcao </option>";
        
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
     <label for="name">Bonus Salaria:</label>
     <input type="text" name="bonus_salarial" placeholder="R$"/>
     </td></tr> 
     <tr><td>
     <label for="name">PRL:</label>
     <input type="text" name="prl" placeholder="%"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Alimentação:</label>
     <input type="text" name="vale_alimentacao" placeholder="R$"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Refeição:</label>
     <input type="text" name="vale_refeicao" placeholder="R$"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Combustível:</label>
     <input type="text" name="vale_combustivel" placeholder="R$"/>
     </td></tr> 
     <tr><td>
     <label for="name">Vale Saúde:</label>
     <input type="text" name="vale_saude" placeholder="R$"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Cultura:</label>
     <input type="text" name="vale_cultura" placeholder="R$"/>
     </td></tr>   
     <tr><td>
     <label for="name">Vale Educação:</label>
     <input type="text" name="vale_educacao" placeholder="R$"/>
     </td></tr>  
     <tr><td>
     <label for="name">Carga Horária Mensal:</label>
     <input type="number" name="carga_horaria_mensal" placeholder="Quantidade de Horas"/>
     </td></tr>   
     <tr><td>
     <label for="name">Carga Horária Anual:</label>
     <input type="number" name="carga_horaria_anual" placeholder="Quantidade de Horas"/>
     </td></tr>  
     <tr><td>
     <label for="name">Data de Inicio:</label>
     <input type="date" name="data_inicio"/>
     </td></tr>      
     <tr><td>
     <label for="name">Observação:</label>
     <input type="text" name="observacao"/>
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
