<?php
include("../br.com.autosistem.controle/Fornecedor.php");
include("../br.com.autosistem.modelo/CadastroFornecedorBD.php");
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


$for = new Fornecedor();
$cforbd = new CadastroFornecedorBD();

$for->setRazao_social($razao_social);
$for->setNome_fantasia($nome_fantasia);
$for->setData_parceria($data_parceria);
$for->setCpf_cnpj($cpf_cnpj);
$for->setNit_pis_pasep($nit_pis_pasep);
$for->setEmail($email);
$for->setEmail_alternativo($email_alternativo);
$for->setTelefone_residencial($telefone_residencial);
$for->setRamal($ramal);
$for->setTelefone_celular01($telefone_celular01);
$for->setTelefone_celular02($telefone_celular02);

//-------------------------------------------------------

$for->setCep($cep);
$for->setEstado($estado);
$for->setCidade($cidade);
$for->setBairro($bairro);
$for->setRua($rua);
$for->setNumero($numero);
$for->setComplemento($complemento);
$for->setPonto_referencia($referencia);
$for->setPessoa_referencia01($pessoa_referencia01);
$for->setPessoa_referencia02($pessoa_referencia02);

//-------------------------------------------------------
//chama metodo inserir

$cforbd->inserir(
        $for->getRazao_social(), $for->getNome_fantasia(), $for->getData_parceria(), $for->getCpf_cnpj(), 
        $for->getNit_pis_pasep(), $for->getEmail(), $for->getEmail_alternativo(), $for->getTelefone_residencial(), 
        $for->getRamal(), $for->getTelefone_celular01(), $for->getTelefone_celular02(), $for->getCep(), 
        $for->getEstado(), $for->getCidade(), $for->getBairro(), $for->getRua(), $for->getNumero(), 
        $for->getComplemento(), $for->getPonto_referencia(), $for->getPessoa_referencia01(), 
        $for->getPessoa_referencia02());






?>