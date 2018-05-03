<?php
include("../../br.com.autosistem.controle/controle.empresa/ClientePessoaJuridica.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroClientePessoaJuridicaBD.php");

$razao_social = $_POST["razaosocial"];
$nome_fantasia = $_POST["nomefantasia"];
$data_parceria = $_POST["dataparceria"];
$cpf_cnpj = $_POST["cpfcnpj"];
$nit_pis_pasep = $_POST["nitpispasep"];

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


$pj = new ClientePessoaJuridica();
$ccpjbd = new CadastroClientePessoaJuridicaBD();

$pj->setRazao_social($razao_social);
$pj->setNome_fantasia($nome_fantasia);
$pj->setData_parceria($data_parceria);
$pj->setCpf_cnpj($cpf_cnpj);
$pj->setNit_pis_pasep($nit_pis_pasep);
$pj->setEmail($email);
$pj->setEmail_alternativo($email_alternativo);
$pj->setTelefone_residencial($telefone_residencial);
$pj->setRamal($ramal);
$pj->setTelefone_celular01($telefone_celular01);
$pj->setTelefone_celular02($telefone_celular02);

//-------------------------------------------------------

$pj->setCep($cep);
$pj->setEstado($estado);
$pj->setCidade($cidade);
$pj->setBairro($bairro);
$pj->setRua($rua);
$pj->setNumero($numero);
$pj->setComplemento($complemento);
$pj->setPonto_referencia($referencia);
$pj->setPessoa_referencia01($pessoa_referencia01);
$pj->setPessoa_referencia02($pessoa_referencia02);

//-------------------------------------------------------
//chama metodo inserir

$ccpjbd->inserir(
        $pj->getRazao_social(), $pj->getNome_fantasia(), $pj->getData_parceria(), $pj->getCpf_cnpj(), 
        $pj->getNit_pis_pasep(), $pj->getEmail(), $pj->getEmail_alternativo(), $pj->getTelefone_residencial(), 
        $pj->getRamal(), $pj->getTelefone_celular01(), $pj->getTelefone_celular02(), $pj->getCep(), 
        $pj->getEstado(), $pj->getCidade(), $pj->getBairro(), $pj->getRua(), $pj->getNumero(), 
        $pj->getComplemento(), $pj->getPonto_referencia(), $pj->getPessoa_referencia01(), 
        $pj->getPessoa_referencia02());






?>
   