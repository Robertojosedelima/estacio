<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("../../br.com.autosistem.controle/controle.empresa/Fornecedor.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroFornecedorBD.php");

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

$fo = new Fornecedor();
$cfbd = new CadastroFornecedorBD();

$fo->setRazao_social($razao_social);
$fo->setNome_fantasia($nome_fantasia);
$fo->setData_parceria($data_parceria);
$fo->setCpf_cnpj($cpf_cnpj);
$fo->setNit_pis_pasep($nit_pis_pasep);
$fo->setEmail($email);
$fo->setEmail_alternativo($email_alternativo);
$fo->setTelefone_residencial($telefone_residencial);
$fo->setRamal($ramal);
$fo->setTelefone_celular01($telefone_celular01);
$fo->setTelefone_celular02($telefone_celular02);

//-------------------------------------------------------

$fo->setCep($cep);
$fo->setEstado($estado);
$fo->setCidade($cidade);
$fo->setBairro($bairro);
$fo->setRua($rua);
$fo->setNumero($numero);
$fo->setComplemento($complemento);
$fo->setPonto_referencia($referencia);
$fo->setPessoa_referencia01($pessoa_referencia01);
$fo->setPessoa_referencia02($pessoa_referencia02);

//-------------------------------------------------------
//chama metodo inserir

$cfbd->alterar(
        $fo->getRazao_social(), $fo->getNome_fantasia(), $fo->getData_parceria(), $fo->getCpf_cnpj(), 
        $fo->getNit_pis_pasep(), $fo->getEmail(), $fo->getEmail_alternativo(), $fo->getTelefone_residencial(), 
        $fo->getRamal(), $fo->getTelefone_celular01(), $fo->getTelefone_celular02(), $fo->getCep(), 
        $fo->getEstado(), $fo->getCidade(), $fo->getBairro(), $fo->getRua(), $fo->getNumero(), 
        $fo->getComplemento(), $fo->getPonto_referencia(), $fo->getPessoa_referencia01(), 
        $fo->getPessoa_referencia02());




?>