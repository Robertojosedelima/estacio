<?php  
session_start();
if(!isset($_SESSION["usuario"])|| !isset($_SESSION["senha"])){
   header('refresh:1,../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php'); 
}


?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CADASTRO DE PEDIDO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
          <div>CADASTRO DE PEDIDO</div>
          <form name = "cadastro-novo-pedido" action="CadastroPedido.php" method="POST">
            
            
 <!-- DADOS USUARIO-->
 
<fieldset>
 <legend>Dados do Pedido</legend>
   <br/> 
 
     <tr><td>
     <label for="name">Digitar Cpf/Cnpj do Cliente:</label>
     <input type="text" name="id">
     
         
         <input type="submit" value="Buscar Cliente"/>
     
     </td></tr>   

 
 </fieldset>


         
        </form>
    



</html>