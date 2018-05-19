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
    function inserir($produto, $codigo_fabricacao, $data_fabricacao, $lote, $tempo_garantia,
            $observacao_garantia, $altura, $largura, $peso_produto,
            $peso_embalagem, $itens_produto, $site_fabricante, $telefone_fabricante){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO cadastro_complemento_produto "
                . "(fornecimento_fk,codigo_fabricacao,data_fabricacao,lote,"
                . "tempo_garantia,observacao_garantia,altura,largura,peso_produto,"
                . "peso_embalagem,itens_produto,site_fabricante,telefone_fabricante)"
                . "VALUES ('$produto','$codigo_fabricacao','$data_fabricacao','$lote','$tempo_garantia'"
                . ",'$observacao_garantia','$altura','$largura','$peso_produto','$peso_embalagem'"
                . ",'$itens_produto','$site_fabricante','$telefone_fabricante')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
       

        echo "Produto Cadastrado Com Sucesso!";
        header('refresh:2, GerenciaComplementoProduto.php');
    } else {
       

        echo "erro ao tentar inserir";
        header('refresh:2, GerenciaComplementoProduto.php');
    }
    
        
    }
      function alterar
   ($codigo_complemento_produto, $codigo_fabricacao, $data_fabricacao, $lote, $tempo_garantia,
            $observacao_garantia, $altura, $largura, $peso_produto,
            $peso_embalagem, $itens_produto, $site_fabricante, $telefone_fabricante){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_complemento_produto SET codigo_fabricacao='$codigo_fabricacao',"
              . "data_fabricacao='$data_fabricacao',lote='$lote',tempo_garantia='$tempo_garantia',"
              . "observacao_garantia='$observacao_garantia',altura='$altura',largura='$largura',peso_produto='$peso_produto',"
              . "peso_embalagem='$peso_embalagem',itens_produto='$itens_produto',site_fabricante='$site_fabricante',"
              . "telefone_fabricante='$telefone_fabricante' "
              . "WHERE codigo_complemento_produto='$codigo_complemento_produto'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Produto Alterado Com Sucesso!";
        header('refresh:2, GerenciaComplementoProduto.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaComplementoProduto.php');
    }
        
        
    
        
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_complemento_produto WHERE codigo_complemento_produto='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Produto Excluido Com Sucesso!";
        header('refresh:2, GerenciaComplementoProduto.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaComplementoProduto.php');
   
}
    }
}
