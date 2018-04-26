<?php

include("../../br.com.autosistem.modelo/modelo.vendas/CadastroItensPedidoBD.php");
$id=$_GET["id"];
$pedido_fk=$_GET["pedido"];


$cipbd = new CadastroItensPedidoBD();
$cipbd->excluir($id,$pedido_fk);
?>
