<?php
include("../../br.com.autosistem.controle/controle.empresa/Usuario.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroUsuarioBD.php");
$area = $_POST["area"];
$funcionario = $_POST["funcionario"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

 if($area=="Administrativo"){
     $opcao="a";
 }if($area=="Vendas"){
     $opcao="v";
     
 }if($area=="Operacional"){
     $opcao="o";
 }



 $cu = new Usuario();
        
       $cu->setArea($area);
       $cu->setFuncionario($funcionario);
       $cu->setLogin($usuario);
       $cu->setSenha($senha);
       
       $cubd = new CadastroUsuarioBD();
        $cubd->inserir($cu->getArea(), $cu->getFuncionario(), $cu->getLogin(), $cu->getSenha(), $opcao);
?>
