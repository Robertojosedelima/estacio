   
<?php
require_once '../br.com.autosistem.conexao/ConexaoBD.php';
include("../br.com.autosistem.modelo/CadastroClientePessoaFisicaBD.php");

$cbd = new ConexaoBD();
    $sql = "select * from cadastro_funcionario";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    
       
       ?>
<table border="1" cellpadding="2">
<?php
$ccpf= new CadastroClientePessoaFisicaBD();
echo"<thead><tr><th>Codigo</th><th>Nome</th><th>Sobre Nome</th><th>Cpf</th><th>Alterar</th><th>Deletar</></tr></thead>";
while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['cpf'];
        $nome = $dados['nome'];
        $sobre_nome = $dados['sobre_nome'];
echo"<tbody><tr><td></td><td>$nome</td><td>$sobre_nome</td><td>$codigo</td><td></td><td></td></tr></tbody>";
}



        ?>
</table>


<form method="POST" action="index.php"><input type="text" name="mensagem"><input type="submit" value="Aqui envia"></form>