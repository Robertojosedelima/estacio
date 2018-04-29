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
    if($row > 0){
        
        echo "Exclua os Itens Desse Pedido!";
        header('refresh:2, ../../br.com.autosistem.visao/crud.pedidos/GerenciaCadastroPedido.php');
    }else{

$cpbd = new CadastroPedidoBD();
$cpbd->excluir($id);
    }
?>
