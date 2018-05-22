
<?php
include("../../br.com.autosistem.controle/controle.complemento/ComplementoFuncao.php");
include("../../br.com.autosistem.modelo/modelo.complemento/CadastroComplementoFuncaoBD.php");




$funcao_fk = $_POST['funcao'];
$bonus_salarial = $_POST['bonus_salarial'];
$prl = $_POST['prl'];
$vale_alimentacao = $_POST['vale_alimentacao'];
$vale_refeicao = $_POST['vale_refeicao'];
$vale_combustivel = $_POST['vale_combustivel'];
$vale_saude = $_POST['vale_saude'];
$vale_cultura= $_POST['vale_cultura'];
$vale_educacao = $_POST['vale_educacao'];
$carga_horaria_mensal = $_POST['carga_horaria_mensal'];
$carga_horaria_anual= $_POST['carga_horaria_anual'];
$data_inicio = $_POST['data_inicio'];
$observacao = $_POST['observacao'];

$ccf = new ComplementoFuncao();

$ccf->setFuncao_fk($funcao_fk);
$ccf->setBonus_salarial($bonus_salarial);
$ccf->setPrl($prl);
$ccf->setVale_alimentacao($vale_alimentacao);
$ccf->setVale_refeicao($vale_refeicao);
$ccf->setVale_combustivel($vale_combustivel);
$ccf->setVale_saude($vale_saude);
$ccf->setVale_cultura($vale_cultura);
$ccf->setVale_educacao($vale_educacao);
$ccf->setCarga_horaria_mensal($carga_horaria_mensal);
$ccf->setCarga_horaria_anual($carga_horaria_anual);
$ccf->setData_inicio($data_inicio);
$ccf->setObservacao($observacao);

$ccfbd = new CadastroComplementoFuncaoBD();

$ccfbd->inserir($ccf->getFuncao_fk(), $ccf->getBonus_salarial(), $ccf->getPrl(), $ccf->getVale_alimentacao(), 
        $ccf->getVale_refeicao(), $ccf->getVale_combustivel(), $ccf->getVale_saude(), $ccf->getVale_cultura(), 
        $ccf->getVale_educacao(), $ccf->getCarga_horaria_mensal(), $ccf->getCarga_horaria_anual(), $ccf->getData_inicio(), 
        $ccf->getObservacao())


?>






