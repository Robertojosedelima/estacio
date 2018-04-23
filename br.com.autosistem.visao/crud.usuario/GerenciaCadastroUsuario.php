<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroUsuarioBD.php");


    ?>

<a href="TelaCadastroUsuario.php">Nova Usuario +</a></br></br>


    
        
           
    <?php
   echo"<table border=1>";
   echo"<th>Codigo</th>";
   echo"<th>Usuario</th>";
   echo"<th>Area</th>";
   
  
    
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_usuario";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo_usuario'];
        $usuario = $dados['usuario'];
        $area = $dados['area'];

       echo"<tr>";
       echo"<td>";
       echo"$codigo";
       echo"</td>";
       echo"<td>";
       echo"$usuario";
       echo"</td>";
       echo"<td>";
       echo"$area";
       echo"</td>";
       echo"<td>";
       echo"<a href='TelaAlteraCadastroUsuario.php?id=".$codigo."'>Alterar</a>";
       echo"</td>";
       echo"<td>";
       echo"<a href='DeletaUsuario.php?id=".$codigo."'>Deletar</a>";
       echo"</td>";
       echo"</tr>";
       }
   echo"</table>";
  
    ?>
