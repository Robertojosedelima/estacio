<?php
include("../br.com.autosistem.controle/Funcao.php");
include("../br.com.autosistem.modelo/CadastroFuncaoBD.php");
//RECEBENDO DADOS DO FOMULARIO
$nome_funcao = $_POST["nomedafuncao"];
$descricao_funcao = $_POST["descricaodafuncao"];
$carga_horaria_semanal = $_POST["cargahorariasemanal"];
$salario = $_POST["salario"];



        $cf = new Funcao();
        $cf->setNome($nome_funcao);
        $cf->setDescricao($descricao_funcao);
        $cf->setCarga_horaria_semanal($carga_horaria_semanal);
        $cf->setSalario($salario);
        $cfbd = new CadastroFuncaoBD();
        
        $cfbd->inserir($cf->getNome(), $cf->getDescricao(), $cf->getCarga_horaria_semanal(), $cf->getSalario());
?>
