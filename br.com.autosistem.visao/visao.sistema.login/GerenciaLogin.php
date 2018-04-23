<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

$usuario= $_POST["usuario"];
$senha= $_POST["senha"];
$cbd = new ConexaoBD();
$sql = "select* from cadastro_usuario WHERE usuario ='$usuario' AND senha ='$senha'";
$resultado = mysqli_query($cbd->conecta(),$sql);
$dados = mysqli_fetch_assoc($resultado);
$funcionario_fk = $dados['funcionario_fk'];
$row = mysqli_num_rows($resultado);

if($row > 0){
    $sql1 = "select* from cadastro_funcionario WHERE cpf ='$funcionario_fk'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados01 = mysqli_fetch_assoc($resultado1);
    $nome = $dados01['nome'];
    $sobre_nome = $dados01['sobre_nome'];
    $funcao = $dados01['funcao'];
    $email = $dados01['email'];
    // INICIA UMA SESSAO.
    session_start();
    $_SESSION['codigo']=$dados['codigo_usuario'];
    $_SESSION['usuario']=$dados['usuario'];
    $_SESSION['senha']=$dados['senha'];
    $_SESSION['nome']= $nome;
    $_SESSION['sobre_nome']= $sobre_nome;
    $_SESSION['funcao']= $funcao;
    $_SESSION['email']= $email;
    
    if($dados['area']=='Administrativo'){
    echo " SEJA BEM VINDO ADMINISTRADOR";
    header('refresh:2,../../br.com.autosistem.visao/visao.painel.administrador/PainelControleAdministrador.php');
    }
    if($dados['area']=='Vendas'){
    echo " SEJA BEM VINDO VENDEDOR";
    header('refresh:2,../../br.com.autosistem.visao/visao.painel.vendas/PainelControleVendas.php');    
    }
    
     if($dados['area']=='Operacional'){
    echo " SEJA BEM VINDO OPERACIONAL";
    header('refresh:0,../../br.com.autosistem.visao/visao.painel.operacional/PainelControleOperacional.php');    
    }
} else {
    echo " VERIFIQUE O LOGIN E A SENHA!";
    header('refresh:3,TelaLogin.php'); 

}
    
    
    ?>