<?php
include("../../br.com.autosistem.controle/controle.empresa/Funcionario.php");
include("../../br.com.autosistem.modelo/modelo.empresa/CadastroFuncionarioBD.php");

$funcao = $_POST["funcao"];
$nome = $_POST["nome"];
$sobre_nome = $_POST["sobrenome"];
$data_nascimento = $_POST["datanascimento"];
$naturalidade = $_POST["naturalidade"];
$nacionalidade = $_POST["nacionalidade"];
$sexo = $_POST["sexo"];
$estado_civil = $_POST["estadocivil"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$ctps = $_POST["ctps"];
$pis = $_POST["pis"];

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

$fc = new Funcionario();
$cfcbd = new CadastroFuncionarioBD();

$fc->setFuncao($funcao);
$fc->setNome($nome);
$fc->setSobre_nome($sobre_nome);
$fc->setData_nascimento($data_nascimento);
$fc->setNaturalidade($naturalidade);
$fc->setNacionalidade($nacionalidade);
$fc->setSexo($sexo);
$fc->setEstado_civil($estado_civil);
$fc->setRg($rg);
$fc->setCpf($cpf);
$fc->setCtps($ctps);
$fc->setPis($pis);
$fc->setEmail($email);
$fc->setEmail_alternativo($email_alternativo);
$fc->setTelefone_residencial($telefone_residencial);
$fc->setRamal($ramal);
$fc->setTelefone_celular01($telefone_celular01);
$fc->setTelefone_celular02($telefone_celular02);

//-------------------------------------------------------

$fc->setCep($cep);
$fc->setEstado($estado);
$fc->setCidade($cidade);
$fc->setBairro($bairro);
$fc->setRua($rua);
$fc->setNumero($numero);
$fc->setComplemento($complemento);
$fc->setPonto_referencia($referencia);
$fc->setPessoa_referencia01($pessoa_referencia01);
$fc->setPessoa_referencia02($pessoa_referencia02);

//-------------------------------------------------------
//chama metodo inserir

$cfcbd->inserir(
        $fc->getFuncao(), $fc->getNome(), $fc->getSobre_nome(), $fc->getData_nascimento(), $fc->getNaturalidade(), $fc->getNacionalidade(), $fc->getSexo(), $fc->getEstado_civil(),$fc->getRg(), 
        $fc->getCpf(), $fc->getCtps(), $fc->getPis(), $fc->getEmail(), $fc->getEmail_alternativo(), $fc->getTelefone_residencial(), 
        $fc->getRamal(), $fc->getTelefone_celular01(), $fc->getTelefone_celular02(), $fc->getCep(), 
        $fc->getEstado(), $fc->getCidade(), $fc->getBairro(), $fc->getRua(), $fc->getNumero(), 
        $fc->getComplemento(), $fc->getPonto_referencia(), $fc->getPessoa_referencia01(), 
        $fc->getPessoa_referencia02());




?>



