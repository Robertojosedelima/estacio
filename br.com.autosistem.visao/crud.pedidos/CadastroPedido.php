<?php  
session_start();
if(!isset($_SESSION["usuario"])|| !isset($_SESSION["senha"])){
   header('refresh:1,../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php'); 
}


include("../../br.com.autosistem.controle/controle.vendas/Pedido.php");
include("../../br.com.autosistem.modelo/modelo.vendas/CadastroPedidoBD.php");
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id = $_POST['id'];
// aqui montei toda estrutura usada para iniciar um pedido.
date_default_timezone_set('America/Sao_Paulo');
       
       $cpd = new CadastroPedidoBD();
       
       $cliente = $id;
       $vendedor = $_SESSION["codigo"];
       $data = date('Y-m-d H:i');
       $hora = date('Y-m-d H:i');
       $modelo_data = date('YmdHi');
       $status = "aberto";
       $observacao = "nenhuma";
       $codigo = $modelo_data.$vendedor.$cliente;
       
$cbd = new ConexaoBD();
    $sql = "select * from cadastro_cliente_pessoa_juridica WHERE cpf_cnpj='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $sql1 = "select * from cadastro_cliente_pessoa_fisica WHERE cpf='$id'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados1 = mysqli_fetch_assoc($resultado1);
    
if($id==""||$id==null){
    echo "campo cpf\cpf\cnpj não foi preenchido";
    header('refresh:1, ../../br.com.autosistem.visao/crud.pedidos/TelaCadastroPedido.php');
      
}else{
    if($dados['cpf_cnpj']==$id){
       
       $cpd ->inserir($codigo, $cliente, $vendedor, $data, $hora, $status, $observacao);
       
       
        
    }else{
    if($dados1['cpf']==$id){
        $cpd ->inserir($codigo, $cliente, $vendedor, $data, $hora, $status, $observacao);
        
        
        
    }else{
    
        echo "Cliente não Existe Escolha uma Opção <br>";
        echo"<a href='../../br.com.autosistem.visao/crud.cliente.pessoa.fisica/TelaCadastroClientePessoaFisica.php'>Cadastrar Cliente Pessoa Fisica</a><br>";
        echo"<a href='../../br.com.autosistem.visao/crud.cliente.pessoa.juridica/TelaCadastroClientePessoaJuridica.php'>Cadastrar Cliente Pessoa Juridica</a>";
        
        
    }
}
}

    


















?>