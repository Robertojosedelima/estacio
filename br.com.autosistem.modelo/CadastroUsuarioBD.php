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
    function inserir($area, $funcionario, $login, $senha){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_usuario (funcionario_fk,area,usuario,senha) VALUES ('$funcionario','$area','$login','$senha')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Usuario Cadastrado Com Sucesso!";
    } else {
        echo "erro ao tentar inserir";
    }
    
        
    }

}
