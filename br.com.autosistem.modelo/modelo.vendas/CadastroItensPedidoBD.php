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
        
        $query = "INSERT INTO item_pedido (pedido_fk,produto_fk,quantidade_escolhida,total) VALUES ('$pedido_fk','$produto_fk','$quantidade_escolhida','$total')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Item Adicionado!";
        
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");
    
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, ../../br.com.autosistem.visao/crud.pedidos/TelaCadastroPedido.php');
    }
    
        
    }
      function alterar
   ($codigo,$area, $usuario, $senha){
      $cbd = new ConexaoBD();
      $query = "UPDATE cadastro_usuario SET area='$area',"
              . "usuario='$usuario',senha='$senha' WHERE codigo='$codigo'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Usuario Alterado Com Sucesso!";
        header('refresh:2, GerenciaCadastroUsuario.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, GerenciaCadastroUsuario.php');
    }
        
        
    
        
    }
    function excluir
    ($pedido_fk){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM item_pedido WHERE codigo='$pedido_fk'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Usuario Excluido Com Sucesso!";
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");
        
    } else {
        echo "erro ao tentar excluir";
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$pedido_fk");
   
}
    }
}
