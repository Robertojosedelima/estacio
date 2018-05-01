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
class CadastroFornecimentoBD {
    function inserir($fornecedor_fk, $produto_fk, $modelo, $quantidade, $valor){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_fornecimento (modelo,quantidade,valor,fornecedor_fk,produto_fk) VALUES ('$modelo','$quantidade','$valor','$fornecedor_fk','$produto_fk')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Fornecimento Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaFornecimento.php');
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaFornecimento.php');
    }
    
        
    }
      function alterar($codigo, $fornecedor_fk, $produto_fk, $modelo, $quantidade, $valor){
          
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_fornecimento SET codigo_fornecimento='$codigo',"
              . "fornecedor_fk='$fornecedor_fk',produto_fk='$produto_fk',modelo='$modelo',quantidade='$quantidade',valor='$valor' WHERE codigo_fornecimento='$codigo'";
       
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Ordem Alterada Com Sucesso!";
        header('refresh:2, GerenciaFornecimento.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaFornecimento.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_fornecimento WHERE codigo_fornecimento='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Ordem Excluida Com Sucesso!";
        header('refresh:2, GerenciaFornecimento.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaFornecimento.php');
   
}
    }
}
