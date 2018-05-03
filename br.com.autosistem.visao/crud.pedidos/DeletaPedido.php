<?php

include("../../br.com.autosistem.modelo/modelo.vendas/CadastroPedidoBD.php");
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id=$_GET["id"];

$cbd = new ConexaoBD();
    $sql = "select * from item_pedido WHERE pedido_fk='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_array($resultado);
    $produto_fk = $dados['produto_fk'];
    $quantidade_escolhida = $dados['quantidade_escolhida'];
    $row = mysqli_num_rows($resultado);
    
    //----------------
    $sql1 = "select * from pedido WHERE codigo_pedido='$id'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados1 = mysqli_fetch_array($resultado1);
    $status = $dados1['status'];
    
    
    if($row > 0){
      
    echo "Exclua os Itens Desse Pedido!";
       header ("refresh:2, ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php?pedido=$id");
    }else{

$cpbd = new CadastroPedidoBD();
$cpbd->excluir($id,$status);
    }
?>
