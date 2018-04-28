<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CadastroPedidoBD
 *
 * @author drop-
 */
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
class CadastroPedidoBD {
    function inserir($codigo, $cliente, $vendedor, $data, $hora, $status, $observacao){
        $cbd = new ConexaoBD();
        
        $query = "INSERT INTO pedido (codigo_pedido,cliente_fk,vendedor_fk,data,hora,status,observacao) VALUES ('$codigo','$cliente','$vendedor','$data','$hora','$status','$observacao')";
        $insert = mysqli_query($cbd->conecta(),$query);
        
    if($insert){
        echo "Iniciando Novo Pedido!";
        
        header ("Location: ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$codigo");
    
    } else {
        echo "erro ao tentar inserir";
        header('refresh:2, ../../br.com.autosistem.visao/crud.pedidos/TelaCadastroPedido.php');
    }
    
    }
      function alterar
   ($codigo_pedido, $pagamento, $status, $observacao){
      $cbd = new ConexaoBD();
      $query = "UPDATE pedido SET codigo_pedido='$codigo_pedido',"
              . "status='$status',observacao='$observacao',pagamento='$pagamento' "
              . "WHERE codigo_pedido='$codigo_pedido'";
                      
      
       $update = mysqli_query($cbd->conecta(),$query);
   
        if($update){
        
        echo "Pedido Finalizado Com Sucesso!";
        header('refresh:2, TelaCadastroPedido.php');
        
    } else {
        echo "erro ao tentar alterar";
        header('refresh:2, TelaCadastroPedido.php');
    }
     
    }
    function excluir
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM pedido WHERE codigo_pedido='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Pedido Excluido Com Sucesso!";
        header('refresh:2, GerenciaCadastroPedido.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroPedido.php');
   
}
    }
}
