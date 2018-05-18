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
class CadastroComplementoProdutoBD {
    function inserir($produto, $codigo_fabricacao, $data_fabricacao, $lote, $tempo_garantia, $observacao_garantia, $altura, $largura, $peso_produto, $peso_embalagem, $itens_produto, $site_fabricante, $telefone_fabricante){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_produtos (nome,descricao) VALUES ('$nome','$descricao')";
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
   ($codigo, $nome, $descricao){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_produtos SET codigo_produto='$codigo',"
              . "nome='$nome',descricao='$descricao' WHERE codigo_produto='$codigo'";
                      
      
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
