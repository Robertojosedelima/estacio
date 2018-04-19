
<?php
$mensagem ="..";
$cpf_cnpj = $_POST["cpf_cnpj"];
$mensagem = $_POST["mensagem"];

     
     if($cpf_cnpj=="123"){
         $mensagem="nome do cliente";
         include("../../br.com.autosistem.visao/crud.pedidos/SubTelaCadastroPedido.php");
     }else{

$mensagem="Cliente não Cadastrado";
//echo"<a href='../../br.com.autosistem.visao/crud.cliente.pessoa.fisica/TelaCadastroClientePessoaFisica.php?id=".$codigo."'>Cliente Pessoa Fisica</a>";
//echo"<a href='../../br.com.autosistem.visao/crud.cliente.pessoa.juridica/TelaCadastroClientePessoaJuridica.php?id=".$codigo."'>Cliente Pessoa Juridica</a>";


     }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CADASTRO DE PEDIDO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
          <div>CADASTRO DE PEDIDO</div>
        <form name = "cadastro-novo-pedido" action="#" method="post">
            
            
 <!-- DADOS USUARIO-->
<fieldset>
 <legend>Dados do Pedido</legend>
   <br/> 
 <table>
     <tr><td>
     <label for="name">Digitar Cpf/Cnpj do Cliente:</label>
     <input type="text" name="cpf_cnpj">
         <input type="text" name="mensagem" value="<?php echo $mensagem; ?>"/>
     <button type="submit">Buscar Cliente</button>
         
     </td></tr>   

 </table>
 </fieldset>
 

 <br/>
    
         
        </form>
    </body>
</html>
