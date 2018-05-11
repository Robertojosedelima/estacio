<?php
include("../../br.com.autosistem.controle/controle.empresa/Usuario.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroUsuarioBD.php");
$codigo =$_POST['codigo'];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];



 $cu = new Usuario();
       $cu->setCodigo($codigo); 
       $cu->setLogin($usuario);
       $cu->setSenha($senha);
       
       $cubd = new CadastroUsuarioBD();
        $cubd->alterarSenha($cu->getCodigo(),$cu->getLogin(), $cu->getSenha());
?>
