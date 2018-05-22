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
class CadastroComplementoFuncaoBD {
    function inserir($funcao_fk, $bonus_salarial, $prl, $vale_alimentacao, $vale_refeicao, $vale_combustivel, 
            $vale_saude, $vale_cultura, $vale_educacao, $carga_horaria_mensal, $carga_horaria_anual, 
            $data_inicio, $observacao){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_complemento_funcao "
                . "(funcao_fk,bonus_salarial,prl,vale_alimentacao,"
                . "vale_refeicao,vale_combustivel,vale_saude,vale_cultura,vale_educacao,"
                . "carga_horaria_mensal,carga_horaria_anual,data_inicio,observacao)"
                . "VALUES ('$funcao_fk','$bonus_salarial','$prl','$vale_alimentacao','$vale_refeicao'"
                . ",'$vale_combustivel','$vale_saude','$vale_cultura','$vale_educacao','$carga_horaria_mensal'"
                . ",'$carga_horaria_anual','$data_inicio','$observacao')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
       

        echo "Complemento Função Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaComplementoFuncao.php');
    } else {
       

        echo "Erro ao tentar inserir";
        header('refresh:2, GerenciaComplementoFuncao.php');
    }
    
        
    }
      function alterar
   ($codigo_complemento_funcao, $bonus_salarial, $prl, $vale_alimentacao, $vale_refeicao, $vale_combustivel, 
            $vale_saude, $vale_cultura, $vale_educacao, $carga_horaria_mensal, $carga_horaria_anual, 
            $data_inicio, $observacao){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_complemento_funcao SET bonus_salarial='$bonus_salarial',"
              . "prl='$prl',vale_alimentacao='$vale_alimentacao',vale_refeicao='$vale_refeicao',"
              . "vale_combustivel='$vale_combustivel',vale_saude='$vale_saude',vale_cultura='$vale_cultura',vale_educacao='$vale_educacao',"
              . "carga_horaria_mensal='$carga_horaria_mensal',carga_horaria_anual='$carga_horaria_anual',data_inicio='$data_inicio',"
              . "observacao='$observacao' "
              . "WHERE codigo_complemento_funcao='$codigo_complemento_funcao'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Funcao Alterada Com Sucesso!";
        header('refresh:2, GerenciaComplementoFuncao.php');
        
    } else {
        echo "Erro ao tentar alterar";
        header('refresh:2, GerenciaComplementoFuncao.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_complemento_funcao WHERE codigo_complemento_funcao='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Complemento de Função Excluido Com Sucesso!";
        header('refresh:2, GerenciaComplementoFuncao.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaComplementoFuncao.php');
   
}
    }
}
