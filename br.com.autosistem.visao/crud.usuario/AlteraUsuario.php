<?php
include("../../br.com.autosistem.controle/controle.empresa/Usuario.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroUsuarioBD.php");
$codigo =$_POST['codigo'];
$area = $_POST["area"];
$funcionario = $_POST["funcionario"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];



 $cu = new Usuario();
       $cu->setCodigo($codigo); 
       $cu->setArea($area);
       $cu->setFuncionario($funcionario);
       $cu->setLogin($usuario);
       $cu->setSenha($senha);
       
       $cubd = new CadastroUsuarioBD();
        $cubd->alterar($cu->getCodigo(),$cu->getArea(), $cu->getLogin(), $cu->getSenha());
?>
