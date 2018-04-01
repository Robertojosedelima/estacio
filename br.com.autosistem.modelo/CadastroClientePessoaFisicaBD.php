<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroClientePessoaFisicaBD
 *
 * @author drop-
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroClientePessoaFisicaBD {
    function inserir
    ($nome, $sobre_nome, $sexo, $rg, $cpf, $email, $email_alternativo, $telefone_residencial, $ramal, 
            $telefone_celular01, $telefone_celular02, $cep, $estado, $cidade, $bairro, $rua, $numero, 
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02){
      $cbd = new ConexaoBD();
      $query1 = "INSERT INTO endereco "
                . "(codigo,cep,estado,cidade,bairro,rua,numero,"
                . "complemento,referencia,pessoa_referencia01,pessoa_referencia02) "
                . "VALUES ('$cpf','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento','$referencia'"
                . ",'$pessoa_referencia01','$pessoa_referencia02')";
      
        $insert = mysqli_query($cbd->conecta(),$query1);
        
        $query2 = "INSERT INTO cadastro_cliente_pessoa_fisica (nome,sobre_nome,sexo,rg,cpf,"
                . "email,email_alternativo,telefone_residencial,"
                . "ramal,telefone_celular01,telefone_celular02,fk_endereco) "
                . "VALUES ('$nome','$sobre_nome','$sexo','$rg','$cpf','$email','$email_alternativo'"
                . ",'$telefone_residencial','$ramal','$telefone_celular01','$telefone_celular02','$cpf')";
        $insert = mysqli_query($cbd->conecta(),$query2);
        
    
        if($insert){
        
        echo "Cliente Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaCadastroClientePessoaFisica.php');
        
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaCadastroClientePessoaFisica.php');
    }

    }
    function alterar
    ($nome, $sobre_nome, $sexo, $rg, $cpf, $email, $email_alternativo, $telefone_residencial, $ramal, 
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
         
       $query2 = "UPDATE cadastro_cliente_pessoa_fisica SET nome='$nome',sobre_nome='$sobre_nome',sexo='$sexo',rg='$rg',cpf='$cpf',"
               . "email='$email',email_alternativo='$email_alternativo',"
               . "telefone_residencial='$telefone_residencial',"
               . "ramal='$ramal',telefone_celular01='$telefone_celular01',"
               . "telefone_celular02='$telefone_celular02',fk_endereco='$cpf'"
               . "WHERE cpf='$cpf'"; 
       
        $update = mysqli_query($cbd->conecta(),$query2);
       
    
        if($update){
        
        echo "Cliente Alterado Com Sucesso!";
        header('refresh:2, GerenciaCadastroClientePessoaFisica.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaCadastroClientePessoaFisica.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query1 = "DELETE FROM endereco WHERE codigo='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query1);
         
       $query2 = "DELETE FROM cadastro_cliente_pessoa_fisica WHERE cpf='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query2);
       
        
    
        if($delete){
        
        echo "Cliente Excluido Com Sucesso!";
        header('refresh:2, GerenciaCadastroClientePessoaFisica.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroClientePessoaFisica.php');
    }
        
        
    
        
    }
}
