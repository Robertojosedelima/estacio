<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>AUTO SYSTEM LOGIN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
 
        <div align='center'>
        
            <form name="formulario de login" action="GerenciaLogin.php" method="POST">
                <table>
                <tr><td>
                <img src="../../imagem/logo autosistme.jpg" width="250" height="237" alt="logo autosistme"/>

                </td></tr>        
                <tr><td>
                <label for="name">Login:</label>
                <input   type="text" name="usuario" /> 
                </td></tr>
                <tr><td>
                        <label for="name">Senha</label>        
                        <input type="password" name="senha" />
                </td></tr>
                <tr><td>
                        <input type="submit" value="Logar" name="Login" />
                </td></tr>
                </table>
             
            </form>
<?php

require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

$cbd = new ConexaoBD();
    $sql = "select * from cadastro_empresa_responsavel";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_array($resultado);
    
    $row = mysqli_num_rows($resultado);
   
    
    if($row <= 0){
    echo"</br>";  
    echo "Sem Empresa!";
    echo"<a href='../../br.com.autosistem.visao/crud.empresa/TelaCadastroEmpresa.php?'>Cadastrar Sua Empresa</a>";
       
    }else{
        echo"</br>";
        echo"Sistema Sem Pendencias Cadastrais!";
    }
?>


  
        
        
        
        </div>
    </body>
</html>
