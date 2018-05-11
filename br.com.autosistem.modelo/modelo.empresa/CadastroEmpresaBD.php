<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroEmpresaBD
 *
 * @author drop-
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroEmpresaBD {
     function inserir
    ($razao_social, $nome_fantasia, $data_parceria, $cpf_cnpj, $nit_pis_pasep, $email, $email_alternativo, $telefone_residencial, $ramal, 
            $telefone_celular01, $telefone_celular02, $cep, $estado, $cidade, $bairro, $rua, $numero, 
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02, $area, $login, $senha){
        $cbd = new ConexaoBD();
      $query1 = "INSERT INTO endereco "
                . "(codigo,cep,estado,cidade,bairro,rua,numero,"
                . "complemento,referencia,pessoa_referencia01,pessoa_referencia02) "
                . "VALUES ('$cpf_cnpj','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento','$referencia'"
                . ",'$pessoa_referencia01','$pessoa_referencia02')";
        $insert = mysqli_query($cbd->conecta(),$query1);
        
       $query2 = "INSERT INTO cadastro_empresa_responsavel "
                . "(razao_social,nome_fantasia,data_parceria,cpf_cnpj,nit_pis_pasep,"
                . "email,email_alternativo,telefone_residencial,"
                . "ramal,telefone_celular01,telefone_celular02,fk_endereco) "
                . "VALUES ('$razao_social','$nome_fantasia','$data_parceria','$cpf_cnpj','$nit_pis_pasep','$email','$email_alternativo'"
                . ",'$telefone_residencial','$ramal','$telefone_celular01','$telefone_celular02','$cpf_cnpj')";
        $insert = mysqli_query($cbd->conecta(),$query2);
         
        $query3 = "INSERT INTO cadastro_usuario "
                . "(area,usuario,senha) "
                . "VALUES ('$area','$login','$senha')";
        $insert = mysqli_query($cbd->conecta(),$query3);
        
         
    if($insert){
        echo "Empresa Cadastrada Com Sucesso!";
        header('refresh:2, ../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php');
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaCadastroEmpresa.php');
    }
    }
    function alterar
    ($razao_social, $nome_fantasia, $data_parceria, $cpf_cnpj, $nit_pis_pasep, $email, $email_alternativo, 
            $telefone_residencial, $ramal, 
            $telefone_celular01, $telefone_celular02, $cep, $estado, $cidade, $bairro, $rua, $numero, 
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02){
      $cbd = new ConexaoBD();
      $query1 = "UPDATE endereco SET codigo='$cpf_cnpj',"
              . "cep='$cep',estado='$estado',cidade='$cidade',bairro='$bairro',"
              . "rua='$rua',numero='$numero',complemento='$complemento',"
              . "referencia='$referencia',pessoa_referencia01='$pessoa_referencia01',"
              . "pessoa_referencia02='$pessoa_referencia02'"
              . "WHERE codigo='$cpf_cnpj'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query1);
         
       $query2 = "UPDATE cadastro_empresa_responsavel SET razao_social='$razao_social',"
               . "nome_fantasia='$nome_fantasia',data_parceria='$data_parceria',cpf_cnpj='$cpf_cnpj',"
               . "nit_pis_pasep='$nit_pis_pasep',"
               . "email='$email',email_alternativo='$email_alternativo',"
               . "telefone_residencial='$telefone_residencial',"
               . "ramal='$ramal',telefone_celular01='$telefone_celular01',"
               . "telefone_celular02='$telefone_celular02',fk_endereco='$cpf_cnpj'"
               . "WHERE cpf_cnpj='$cpf_cnpj'"; 
       
        $update = mysqli_query($cbd->conecta(),$query2);
       
    
        if($update){
        
        echo "Empresa Alterada Com Sucesso!";
        header('refresh:2, GerenciaCadastroEmpresa.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaCadastroEmpresa.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query1 = "DELETE FROM endereco WHERE codigo='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query1);
         
       $query2 = "DELETE FROM cadastro_empresa_responsavel WHERE cpf_cnpj='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query2);
       
        
    
        if($delete){
        
        echo "Empresa Excluida Com Sucesso!";
         header('refresh:2, ../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php');;
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroEmpresa.php');
    }
        
        
    
        
    }
}
