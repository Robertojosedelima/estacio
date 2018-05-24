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
class CadastroGarantiaBD {
    function inserir($pedido, $nota, $codigo_produto, $codigo_fabricacao, $data_fabricacao, $data_compra, 
            $lote, $descricao_solicitacao, $descricao_motivo, $nome_solicitante, $cpf_rg_solicitante, 
            $data_solicitacao, $telefone01, $telefone02, $prazo_retorno, $status, $conclusao){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_solicitacao_garantia "
                . "(pedido_fk,nota_fk,produto_fk,codigo_fabricacao,data_fabricacao,data_compra,"
                . "lote,descricao_solicitacao,descricao_motivo,nome_solicitante,cpf_rg_solicitante,data_solicitacao,telefone01,"
                . "telefone02,prazo_retorno,status,conclusao)"
                . "VALUES ('$pedido','$nota','$codigo_produto','$codigo_fabricacao','$data_fabricacao','$data_compra',"
                . "'$lote','$descricao_solicitacao','$descricao_motivo','$nome_solicitante','$cpf_rg_solicitante',"
                . "'$data_solicitacao','$telefone01','$telefone02','$prazo_retorno','$status','$conclusao')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
       

        echo "Solitação Cadastrada Com Sucesso!";
        header('refresh:2, GerenciaGarantia.php');
    } else {
       

        echo "Erro ao Tentar Inserir Solicitação";
        header('refresh:2, GerenciaGarantia.php');
    }
    
        
    }
      function alterar
   ($codigo_solicitacao_garantia, $pedido, $nota, $codigo_produto, $codigo_fabricacao, $data_fabricacao, $data_compra, 
            $lote, $descricao_solicitacao, $descricao_motivo, $nome_solicitante, $cpf_rg_solicitante, 
            $data_solicitacao, $telefone01, $telefone02, $prazo_retorno, $status, $conclusao){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_solicitacao_garantia SET pedido_fk='$pedido',"
              . "nota_fk='$nota',produto_fk='$codigo_produto',codigo_fabricacao='$codigo_fabricacao',"
              . "data_fabricacao='$data_fabricacao',data_compra='$data_compra',lote='$lote',descricao_solicitacao='$descricao_solicitacao',"
              . "descricao_motivo='$descricao_motivo',nome_solicitante='$nome_solicitante',cpf_rg_solicitante='$cpf_rg_solicitante',"
              . "data_solicitacao='$data_solicitacao',telefone01='$telefone01',telefone02='$telefone02',prazo_retorno='$prazo_retorno',"
              . "status='$status',conclusao='$conclusao' "
              . "WHERE codigo_solicitacao_garantia='$codigo_solicitacao_garantia'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Alterada Com Sucesso!";
        header('refresh:2, GerenciaGarantia.php');
        
    } else {
        echo "Erro ao Tentar Alterar";
        header('refresh:2, GerenciaGarantia.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_solicitacao_garantia WHERE codigo_solicitacao_garantia='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Excluido Com Sucesso!";
        header('refresh:2, GerenciaGarantia.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaGarantia.php');
   
}
    }
}
