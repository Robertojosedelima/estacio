<?php
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroClientePessoaFisicaBD.php");
$id=$_GET["id"];

$ccpfbd = new CadastroClientePessoaFisicaBD();
$ccpfbd->excluir($id);


