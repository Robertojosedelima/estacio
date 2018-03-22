<?php
//RECEBENDO DADOS DO FOMULARIO
$funcao = $_POST["funcao"];
$nome = $_POST["nome"];
$sobre_nome = $_POST["sobrenome"];
$data_de_nascimento = $_POST["datanascimento"];
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


//teste do post
print_r($_POST);





?>
   