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
        
        <style type="text/css">
             table{
              border-spacing:0px;
              border-collapse:collapse;
              border: 1px solid #7b8085;
              font-family: Arial;
              font-size: 15px;
              margin-top: 180px;
              
              }
              td,tr{
              background-color: #f2673a;
              
              }
              body{
              background-color: #9cf;    
              }
              .submit{
                  margin-left: 210px;
              }
            .inp{
                  margin-left: 7px;
              }
        </style>
    </head>
    <body>
 
        <div align='center'>
        
            <form name="formulario de login" action="GerenciaLogin.php" method="POST">
                <table>
                <tr><td>
                        <img src="../../imagem/logo autosistme.png" width="300" height="180" alt="logo autosistme"/>

                </td></tr>        
                <tr><td>
                <label for="name">Login:</label>
                <input  size="25" class="inp" type="text" name="usuario" /> 
                </td></tr>
                <tr><td>
                        <label for="name">Senha:</label>        
                        <input size="25" type="password" name="senha" />
                </td></tr>
                <tr><td>
                        <input class="submit" type="submit" value="Logar" name="Login" />
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
