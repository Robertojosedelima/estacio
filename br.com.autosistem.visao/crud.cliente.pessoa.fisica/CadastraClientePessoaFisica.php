<?php
include("../../br.com.autosistem.controle/controle.empresa/ClientePessoaFisica.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroClientePessoaFisicaBD.php");

$nome = $_POST["nome"];
$sobre_nome = $_POST["sobrenome"];
$sexo = $_POST["sexo"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];

$email = $_POST["email"];
$email_alternativo = $_POST["emailalternativo"];
$telefone_residencial = $_POST["telefoneresidencial"];
$ramal = $_POST["ramal"];
$telefone_celular01 = $_POST["telefonecelular01"];
$telefone_celular02 = $_POST["telefonecelular02"];

$cep = $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$referencia = $_POST["referencia"];
$pessoa_referencia01 = $_POST["pessoa01"];
$pessoa_referencia02 = $_POST["pessoa02"];

$pf = new ClientePessoaFisica();
$ccpfbd = new CadastroClientePessoaFisicaBD();

$pf->setNome($nome);
$pf->setSobre_nome($sobre_nome);
$pf->setSexo($sexo);
$pf->setRg($rg);
$pf->setCpf($cpf);
$pf->setEmail($email);
$pf->setEmail_alternativo($email_alternativo);
$pf->setTelefone_residencial($telefone_residencial);
$pf->setRamal($ramal);
$pf->setTelefone_celular01($telefone_celular01);
$pf->setTelefone_celular02($telefone_celular02);

//-------------------------------------------------------

$pf->setCep($cep);
$pf->setEstado($estado);
$pf->setCidade($cidade);
$pf->setBairro($bairro);
$pf->setRua($rua);
$pf->setNumero($numero);
$pf->setComplemento($complemento);
$pf->setPonto_referencia($referencia);
$pf->setPessoa_referencia01($pessoa_referencia01);
$pf->setPessoa_referencia02($pessoa_referencia02);

//-------------------------------------------------------
//chama metodo inserir

$ccpfbd->inserir(
        $pf->getNome(), $pf->getSobre_nome(), $pf->getSexo(), $pf->getRg(), 
        $pf->getCpf(), $pf->getEmail(), $pf->getEmail_alternativo(), $pf->getTelefone_residencial(), 
        $pf->getRamal(), $pf->getTelefone_celular01(), $pf->getTelefone_celular02(), $pf->getCep(), 
        $pf->getEstado(), $pf->getCidade(), $pf->getBairro(), $pf->getRua(), $pf->getNumero(), 
        $pf->getComplemento(), $pf->getPonto_referencia(), $pf->getPessoa_referencia01(), 
        $pf->getPessoa_referencia02());




?>
   