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
class CadastroProdutoBD {
    function inserir($fornecedor, $nome, $modelo, $descricao, $quantidade,$valor){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_produtos (fornecedor_fk,nome,modelo,descricao,quantidade,valor) VALUES ('$fornecedor','$nome','$modelo','$descricao','$quantidade','$valor')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Produto Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaEstoque.php');
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaEstoque.php');
    }
    
        
    }
      function alterar
   ($fornecedor, $nome, $modelo, $descricao, $quantidade,$valor){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_produtos SET codigo_produto='$fornecedor',"
              . "nome='$nome',modelo='$modelo',descricao='$descricao',quantidade='$quantidade',valor='$valor' WHERE codigo_produto='$fornecedor'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Produto Alterado Com Sucesso!";
        header('refresh:2, GerenciaEstoque.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaEstoque.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_produtos WHERE codigo_produto='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Produto Excluido Com Sucesso!";
        header('refresh:2, GerenciaEstoque.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaEstoque.php');
   
}
    }
}
