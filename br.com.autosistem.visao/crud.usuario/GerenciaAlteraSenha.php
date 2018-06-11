<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php  
session_start();
if(!isset($_SESSION["usuario"])|| !isset($_SESSION["senha"])){
   header('refresh:1,../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php'); 
}
 $codigo_usuario = $_SESSION['codigo'];
?>
<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

$cbd = new ConexaoBD();
    $sql1 = "select * from cadastro_usuario WHERE codigo_usuario='$codigo_usuario'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados = mysqli_fetch_assoc($resultado1);
    $funcionario = $dados['funcionario_fk'];
    

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA CADASTRO DE USUARIO</title>
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
             <div>ALTERA LOGIN E SENHA</div>
             <form name = "cadastro-nova-usuario" action="AlteraSenha.php" method="post">
            
            
 <!-- DADOS USUARIO-->

 <fieldset>
     <legend>Dados de Login</legend>
     <br/>
     <table>
     <tr><td>
     <input type="hidden" name="codigo" value="<?php echo $dados['codigo_usuario']; ?>">
     </td></tr>
     <tr><td>
     <label for="name">Login:</label>
     <input type="text" name="usuario" value="<?php echo $dados['usuario']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Senha:</label>
     <input type="password" name="senha" value="<?php echo $dados['senha']; ?>"/>
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
