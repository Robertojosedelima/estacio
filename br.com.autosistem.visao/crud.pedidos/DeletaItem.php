<?php

include("../../br.com.autosistem.modelo/modelo.empresa/CadastroEmpresaBD.php");
$id=$_GET["id"];
$pedido_fk=$_GET["pedido"];
echo $pedido_fk;
echo $id;

//$cipbd = new CadastroItensPedidoBD();
//$cipbd->excluir($pedido_fk);
?>
