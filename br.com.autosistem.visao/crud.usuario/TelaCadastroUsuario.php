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
        <title>CADASTRO DE USUARIO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
              
                
            }
            body{
                background-color: #9cf;
               
               
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
          <div>CADASTRO DE USUARIO</div>
        <form name = "cadastro-novo-usuario" action="CadastraUsuario.php" method="post">
            
            
 <!-- DADOS USUARIO-->
<fieldset>
 <legend>Dados Pessoais</legend>
   <br/> 
 <table>
     <tr><td>
     <label for="name">Area:</label>
     <select name="area">
         <option >Administrativo</option>
         <option >Operacional </option>
         <option selected="">Vendas</option>
     </select>
     </td></tr>   

 </table>
</fieldset>
 <fieldset>
     <legend>Dados do Funcionario</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Nome:</label>
     <select name ="funcionario">
    <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_funcionario";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['cpf'];
        $nome = $dados['nome'];
        $sobre_nome = $dados['sobre_nome'];
        echo"<option value='$codigo'>$nome $sobre_nome  / Cpf:$codigo</option>";
        
       }
   
    ?>
   
</select>
     </td></tr>
    </table>
     
     
 </fieldset>
 <fieldset>
     <legend>Dados de Login</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Login:</label>
     <input type="text" name="usuario"/>
     </td></tr>   
     <tr><td>
     <label for="name">Senha:</label>
     <input type="password" name="senha" />
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
