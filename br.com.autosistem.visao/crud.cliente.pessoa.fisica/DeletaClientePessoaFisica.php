<?php
include("../../br.com.autosistem.modelo/CadastroClientePessoaFisicaBD.php");
$id=$_GET["id"];

$ccpf = new CadastroClientePessoaFisicaBD();
$ccpf->excluir($id);


