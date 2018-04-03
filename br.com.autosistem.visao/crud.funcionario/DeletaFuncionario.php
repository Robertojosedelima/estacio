<?php
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroFuncionarioBD.php");
$id=$_GET["id"];

$cfbd = new CadastroFuncionarioBD();
$cfbd->excluir($id);


