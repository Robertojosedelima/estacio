<?php
include("../br.com.autosistem.controle/Empresa.php");
include("../br.com.autosistem.modelo/CadastroEmpresaBD.php");
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


$em = new Empresa();
$cebd = new CadastroEmpresaBD();

$em->setRazao_social($razao_social);
$em->setNome_fantasia($nome_fantasia);
$em->setData_parceria($data_parceria);
$em->setCpf_cnpj($cpf_cnpj);
$em->setNit_pis_pasep($nit_pis_pasep);
$em->setEmail($email);
$em->setEmail_alternativo($email_alternativo);
$em->setTelefone_residencial($telefone_residencial);
$em->setRamal($ramal);
$em->setTelefone_celular01($telefone_celular01);
$em->setTelefone_celular02($telefone_celular02);

//-------------------------------------------------------

$em->setCep($cep);
$em->setEstado($estado);
$em->setCidade($cidade);
$em->setBairro($bairro);
$em->setRua($rua);
$em->setNumero($numero);
$em->setComplemento($complemento);
$em->setPonto_referencia($referencia);
$em->setPessoa_referencia01($pessoa_referencia01);
$em->setPessoa_referencia02($pessoa_referencia02);

//-------------------------------------------------------
//chama metodo inserir

$cebd->inserir(
        $em->getRazao_social(), $em->getNome_fantasia(), $em->getData_parceria(), $em->getCpf_cnpj(), 
        $em->getNit_pis_pasep(), $em->getEmail(), $em->getEmail_alternativo(), $em->getTelefone_residencial(), 
        $em->getRamal(), $em->getTelefone_celular01(), $em->getTelefone_celular02(), $em->getCep(), 
        $em->getEstado(), $em->getCidade(), $em->getBairro(), $em->getRua(), $em->getNumero(), 
        $em->getComplemento(), $em->getPonto_referencia(), $em->getPessoa_referencia01(), 
        $em->getPessoa_referencia02());






?>
   