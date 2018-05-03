<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroClientePessoaJuridicaBD
 *
 * @author drop-
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroEnderecoBD {
   function inserir
    ($razao_social, $nome_fantasia, $data_parceria, $cpf_cnpj, $nit_pis_pasep, $email, $email_alternativo, $telefone_residencial, $ramal, 
            $telefone_celular01, $telefone_celular02, $cep, $estado, $cidade, $bairro, $rua, $numero, 
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02){
        $cbd = new ConexaoBD();
      $query1 = "INSERT INTO endereco "
                . "(codigo,cep,estado,cidade,bairro,rua,numero,"
                . "complemento,referencia,pessoa_referencia01,pessoa_referencia02) "
                . "VALUES ('$cpf_cnpj','$cep','$estado','$cidade','$bairro','$rua','$numero','$complemento','$referencia'"
                . ",'$pessoa_referencia01','$pessoa_referencia02')";
        $insert = mysqli_query($cbd->conecta(),$query1);
    
       
    if($insert){
        echo "Endereco Cadastrado Com Sucesso!";
        
    } else {
        echo "erro ao tentar inserir";
        
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
         
      
        if($update){
        
        echo "Endereco Alterado Com Sucesso!";
    
        
    } else {
        echo "erro ao tentar alterar";
       
    }
        
        
    
        
    }
  
}
