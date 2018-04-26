<?php

include("../../br.com.autosistem.modelo/modelo.vendas/CadastroPedidoBD.php");
$id=$_GET["id"];



$cpbd = new CadastroPedidoBD();
$cpbd->excluir($id);
?>
