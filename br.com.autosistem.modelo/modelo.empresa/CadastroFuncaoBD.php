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

require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroFuncaoBD {
 function inserir($nome, $descricao, $carga_horaria_semanal, $salario){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_funcao (nome,descricao,carga_horaria_semanal,salario) VALUES ('$nome','$descricao','$carga_horaria_semanal','$salario')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Nova Função Cadastrada Com Sucesso!";
        header('refresh:2, GerenciaCadastroFuncao.php');
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaCadastroFuncao.php');
    }
    
        
    }

     function alterar
   ($codigo,$nome, $descricao, $carga_horaria_semanal, $salario){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_funcao SET codigo='$codigo',"
              . "nome='$nome',descricao='$descricao',"
              . "carga_horaria_semanal='$carga_horaria_semanal',salario='$salario' WHERE codigo='$codigo'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Funcao Alterada Com Sucesso!";
        header('refresh:2, GerenciaCadastroFuncao.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaCadastroFuncao.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_funcao WHERE codigo='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Funcao Excluida Com Sucesso!";
        header('refresh:2, GerenciaCadastroFuncao.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroFuncao.php');
   
}
    }
}