<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroFuncionarioBD
 *
 * @author drop-
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroFuncionarioBD {
  function inserir
    ($funcao, $nome, $sobre_nome, $data_nascimento, $naturalidade, $nacionalidade, $sexo, $estado_civil, $rg, $cpf, $ctps, $pis, $email, $email_alternativo, $telefone_residencial, $ramal, 
            $telefone_celular01, $telefone_celular02, $cep, $estado, $cidade, $bairro, $rua, $numero, 
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02){
      $cbd = new ConexaoBD();
      $query1 = "INSERT INTO endereco "
                . "(codigo,cep,estado,cidade,bairro,rua,numero,"
                . "complemento,referencia,pessoa_referencia01,pessoa_referencia02) "
                . "VALUES ('$cpf','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento','$referencia'"
                . ",'$pessoa_referencia01','$pessoa_referencia02')";
      
        $insert = mysqli_query($cbd->conecta(),$query1);
        
        $query2 = "INSERT INTO cadastro_funcionario (funcao,nome,sobre_nome,data_nascimento,naturalidade,nacionalidade,sexo,estado_civil,rg,cpf,ctps,pis,"
                . "email,email_alternativo,telefone_residencial,"
                . "ramal,telefone_celular01,telefone_celular02,fk_endereco) "
                . "VALUES ('$funcao','$nome','$sobre_nome','$data_nascimento','$naturalidade','$nacionalidade','$sexo','$estado_civil','$rg','$cpf','$ctps','$pis','$email','$email_alternativo'"
                . ",'$telefone_residencial','$ramal','$telefone_celular01','$telefone_celular02','$cpf')";
        $insert = mysqli_query($cbd->conecta(),$query2);
        
    
        if($insert){
        
        echo "Funcionario Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaCadastroFuncionario.php');
        
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaCadastroFuncionario.php');
    }
      
    }
        function alterar
    ($funcao, $nome, $sobre_nome, $data_nascimento, $naturalidade, $nacionalidade, $sexo, $estado_civil, $rg, $cpf, $ctps, $pis, $email, $email_alternativo, $telefone_residencial, $ramal, 
            $telefone_celular01, $telefone_celular02, $cep, $estado, $cidade, $bairro, $rua, $numero, 
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02){
      $cbd = new ConexaoBD();
      $query1 = "UPDATE endereco SET codigo='$cpf',"
              . "cep='$cep',estado='$estado',cidade='$cidade',bairro='$bairro',"
              . "rua='$rua',numero='$numero',complemento='$complemento',"
              . "referencia='$referencia',pessoa_referencia01='$pessoa_referencia01',"
              . "pessoa_referencia02='$pessoa_referencia02'"
              . "WHERE codigo='$cpf'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query1);
         
       $query2 = "UPDATE cadastro_funcionario SET funcao='$funcao',nome='$nome',sobre_nome='$sobre_nome',"
               . "data_nascimento='$data_nascimento',naturalidade='$naturalidade',nacionalidade='$nacionalidade',"
               . "sexo='$sexo',estado_civil='$estado_civil',rg='$rg',cpf='$cpf',ctps='$ctps',pis='$pis',"
               . "email='$email',email_alternativo='$email_alternativo',"
               . "telefone_residencial='$telefone_residencial',"
               . "ramal='$ramal',telefone_celular01='$telefone_celular01',"
               . "telefone_celular02='$telefone_celular02',fk_endereco='$cpf'"
               . "WHERE cpf='$cpf'"; 
       
        $update = mysqli_query($cbd->conecta(),$query2);
       
    
        if($update){
        
        echo "Funcionario Alterado Com Sucesso!";
        header('refresh:2, GerenciaCadastroFuncionario.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaCadastroFuncionario.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query1 = "DELETE FROM endereco WHERE codigo='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query1);
         
       $query2 = "DELETE FROM cadastro_funcionario WHERE cpf='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query2);
       
        
    
        if($delete){
        
        echo "Funcionario Excluido Com Sucesso!";
        header('refresh:2, GerenciaCadastroFuncionario.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroFuncionario.php');
    }
        
        
    
        
    }
}
