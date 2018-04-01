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
            $complemento, $referencia, $pessoa_referencia01, $pessoa_referencia02){
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
        
         
    if($insert){
        echo "Empresa Cadastrada Com Sucesso!";
    } else {
        echo "erro ao tentar inserir";
    }
    }
}
