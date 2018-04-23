<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroUsuarioBD
 *
 * @author drop-
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroUsuarioBD {
    function inserir($area, $funcionario, $usuario, $senha){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_usuario (funcionario_fk,area,usuario,senha) VALUES ('$funcionario','$area','$usuario','$senha')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Usuario Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaCadastroUsuario.php');
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaCadastroUsuario.php');
    }
    
        
    }
      function alterar
   ($codigo,$area, $usuario, $senha){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_usuario SET area='$area',"
              . "usuario='$usuario',senha='$senha' WHERE codigo_usuario='$codigo'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Usuario Alterado Com Sucesso!";
        header('refresh:2, GerenciaCadastroUsuario.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaCadastroUsuario.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_usuario WHERE codigo_usuario='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Usuario Excluido Com Sucesso!";
        header('refresh:2, GerenciaCadastroUsuario.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroUsuario.php');
   
}
    }
}
