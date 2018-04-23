<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
$id= $_GET["id"];
$cbd = new ConexaoBD();
    $sql1 = "select * from cadastro_usuario WHERE codigo_usuario='$id'";
    $resultado1 = mysqli_query($cbd->conecta(),$sql1);
    $dados = mysqli_fetch_assoc($resultado1);
    $funcionario = $dados['funcionario_fk'];
    

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA CADASTRO DE USUARIO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
             <div>ALTERA CADASTRO DE USUARIO</div>
             <form name = "cadastro-nova-usuario" action="AlteraUsuario.php" method="post">
            
            
 <!-- DADOS USUARIO-->
<fieldset>
 <legend>Dados Pessoais</legend>
   <br/> 
 <table>
     <tr><td>
     <label for="name">Area:</label>
     <select name="area">
         
         <option selected=""><?php echo $dados['area']; ?></option>
         
         <?php if($dados['area']=="Vendas"){echo"<option>Administrativo</option>";echo"<option>Operacional</option>";} ?>
         <?php if($dados['area']=="Operacional"){echo"<option>Administrativo</option>";echo"<option>Vendas</option>";} ?>
         <?php if($dados['area']=="Administrativo"){echo"<option>Operacional</option>";echo"<option>Vendas</option>";} ?>
     </select>
     </td></tr>   

 </table>
</fieldset>
 <fieldset>
     <legend>Dados do Funcionario</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Nome:</label>
     <select name ="funcionario" disabled="">
    <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_funcionario WHERE cpf='$funcionario'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados1 = mysqli_fetch_array($resultado);
        $codigo = $dados1['cpf'];
        $nome = $dados1['nome'];
        $sobre_nome = $dados1['sobre_nome'];
        echo"<option value='$codigo'>$nome $sobre_nome  / Cpf:$codigo</option>";
        
       
   
    ?>
   
</select>
     </td></tr>
    </table>
     
     
 </fieldset>
 <fieldset>
     <legend>Dados de Login</legend>
     <br/>
     <table>
     <tr><td>
     <input type="hidden" name="codigo" value="<?php echo $dados['codigo_usuario']; ?>">
     </td></tr>
     <tr><td>
     <label for="name">Login:</label>
     <input type="text" name="usuario" value="<?php echo $dados['usuario']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">Senha:</label>
     <input type="password" name="senha" value="<?php echo $dados['senha']; ?>"/>
     </td></tr>
   
     </table>
     
     
 </fieldset>
<br/>
        <div class="button">
        <button type="submit">Alterar Cadastro</button>
        </div>  
            
        </form>
    </body>
</html>
