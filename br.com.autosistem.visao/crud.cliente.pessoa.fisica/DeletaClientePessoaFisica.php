<?php
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroClientePessoaFisicaBD.php");
$id=$_GET["id"];

$ccpf = new CadastroClientePessoaFisicaBD();
$ccpf->excluir($id);


