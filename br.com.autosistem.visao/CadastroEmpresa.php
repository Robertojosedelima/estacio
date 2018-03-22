<?php
//RECEBENDO DADOS DO FOMULARIO

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

$login = $_POST["login"];
$senha = $_POST["senha"];


//teste do post
print_r($_POST);





?>
   