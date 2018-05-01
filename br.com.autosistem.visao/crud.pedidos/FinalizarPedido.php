<?php
include("../../br.com.autosistem.modelo/modelo.vendas/CadastroPedidoBD.php");

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$codigo_pedido = $_POST['pedido'];
$observacao = $_POST['observacao'];
$pagamento = $_POST['pagamento'];
$status = "fechado";


$cpbd = new CadastroPedidoBD();
$cpbd->alterar($codigo_pedido, $pagamento, $status, $observacao);
?>