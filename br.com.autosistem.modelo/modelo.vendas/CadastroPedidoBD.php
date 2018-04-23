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
    ($codigo){
      $cbd = new ConexaoBD();
       $query = "DELETE FROM cadastro_usuario WHERE codigo='$codigo'";
                      
      
       $delete = mysqli_query($cbd->conecta(),$query);
        
        if($delete){
        
        echo "Usuario Excluido Com Sucesso!";
        header('refresh:2, GerenciaCadastroUsuario.php');
        
    } else {
        echo "erro ao tentar excluir";
        header('refresh:2, GerenciaCadastroUsuario.php');
   
}
    }
}
