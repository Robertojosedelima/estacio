<?php
include("../../br.com.autosistem.controle/controle.empresa/Usuario.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroUsuarioBD.php");
$area = $_POST["area"];
$funcionario = $_POST["funcionario"];
$login = $_POST["login"];
$senha = $_POST["senha"];



 $cu = new Usuario();
        
       $cu->setArea($area);
       $cu->setFuncionario($funcionario);
       $cu->getLogin();
       $cu->setSenha($senha);
       
       $cubd = new CadastroUsuarioBD();
        $cubd->inserir($cu->getArea(), $cu->getFuncionario(), $cu->getLogin(), $cu->getSenha());
?>
