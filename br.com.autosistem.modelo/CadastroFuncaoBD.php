<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroFuncaoBD
 *
 * @author drop-
 */

require_once '../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroFuncaoBD {
 function inserir($nome, $descricao, $carga_horaria_semanal, $salario){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_funcao (nome,descricao,carga_horaria_semanal,salario) VALUES ('$nome','$descricao','$carga_horaria_semanal','$salario')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Nova Função Cadastrada Com Sucesso!";
    } else {
        echo "erro ao tentar inserir";
    }
    
        
    }


   
}
