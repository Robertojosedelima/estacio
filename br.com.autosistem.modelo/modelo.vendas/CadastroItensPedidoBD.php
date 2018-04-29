<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroItensPedidoBD
 *
 * @author drop-
 */

require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroItensPedidoBD {
    function inserir($pedido_fk, $produto_fk, $quantidade_escolhida, $total){
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_produtos WHERE codigo_produto='$produto_fk'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $quantidade_produto = $dados['quantidade'];
    $nova_quantidade = $quantidade_produto-$quantidade_escolhida;
        
        $query = "INSERT INTO item_pedido (pedido_fk,produto_fk,quantidade_escolhida,total) VALUES ('$pedido_fk','$produto_fk','$quantidade_escolhida','$total')";
        if($quantidade_escolhida<=$quantidade_produto){
        $insert = mysqli_query($cbd->conecta(),$query);
        if($insert){
           $query1 = "UPDATE cadastro_produtos SET codigo_produto='$produto_fk',"
              . "quantidade='$nova_quantidade' "
              . "WHERE codigo_produto='$produto_fk'";
       
       $update = mysqli_query($cbd->conecta(),$query1);
   
        echo "Item Adicionado!";
        
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");  
         }else {
        echo "erro ao tentar inserir";
        header('refresh:2, ../../br.com.autosistem.visao/crud.pedidos/TelaCadastroPedido.php');
    }
        }else{
            
            echo"Estoque desse produto não suporta pedido pois a quantidade atual é de apenas >>".$quantidade_produto;
            header ("refresh:2, ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");
        
    
        
    }
    }
    function excluir($id,$pedido_fk,$quantidade_escolhida,$produto_fk){
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_produtos WHERE codigo_produto='$produto_fk'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $quantidade_produto = $dados['quantidade'];
    $nova_quantidade = $quantidade_produto+$quantidade_escolhida;
      
    $query = "DELETE FROM item_pedido WHERE codigo_item_pedido='$id'";
      $delete = mysqli_query($cbd->conecta(),$query);
      
        if($delete){
        $query1 = "UPDATE cadastro_produtos SET codigo_produto='$produto_fk',"
              . "quantidade='$nova_quantidade' "
              . "WHERE codigo_produto='$produto_fk'";
       
       $update = mysqli_query($cbd->conecta(),$query1);
            
        echo "sucesso";
        
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");
        
    }   else {
        echo "erro ao tentar excluir";
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");
   
}
    }
}
