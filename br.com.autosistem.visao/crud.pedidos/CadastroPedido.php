<?php  

 
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id = $_POST['id'];
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
       
       header('refresh:0, ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php');
        
    }else{
    if($dados1['cpf']==$id){
        
        header('refresh:0, ../../br.com.autosistem.visao/crud.pedidos/MontarPedido.php');
        
        
    }else{
    
        echo "Cliente não Existe Escolha uma Opção <br>";
        echo"<a href='../../br.com.autosistem.visao/crud.cliente.pessoa.fisica/TelaCadastroClientePessoaFisica.php'>Cadastrar Cliente Pessoa Fisica</a><br>";
        echo"<a href='../../br.com.autosistem.visao/crud.cliente.pessoa.juridica/TelaCadastroClientePessoaJuridica.php'>Cadastrar Cliente Pessoa Juridica</a>";
        
        
    }
}
}

    


















?>