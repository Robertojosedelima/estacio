<?php

include("../../br.com.autosistem.modelo/modelo.vendas/CadastroItensPedidoBD.php");
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id=$_GET["id"];
$pedido_fk=$_GET["pedido"];
$cbd = new ConexaoBD();
    $sql = "select * from item_pedido WHERE codigo_item_pedido='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $produto_fk = $dados['produto_fk'];
    $quantidade_escolhida = $dados['quantidade_escolhida'];

$cipbd = new CadastroItensPedidoBD();
$cipbd->excluir($id,$pedido_fk,$quantidade_escolhida,$produto_fk);
?>
