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
    $sql = "select * from cadastro_empresa_responsavel WHERE cpf_cnpj='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $sql = "select * from endereco WHERE codigo='$id'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados1 = mysqli_fetch_assoc($resultado);

?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>ALTERA CADASTRO DE EMPRESA RESPONSAVEL</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
                <div>ALTERA CADASTRO DE EMPRESA RESPONSAVEL</div>
                <form name = "cadastro-empresa" action="AlteraEmpresa.php" method="POST">
            
            
 <!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
   <br/> 
  <table >
  
     <tr><td>
     <label for="name">Razão Social:</label>
     <input type="text" name="razaosocial" value="<?php echo $dados['razao_social']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Nome Fantasia:</label>
     <input type="text" name="nomefantasia" value="<?php echo $dados['nome_fantasia']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Data De Parceria:</label>
     <input type="date" name="dataparceria" value="<?php echo $dados['data_parceria']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">CPF/CNPJ:</label>
     <input type="number" name="cpfcnpj" value="<?php echo $dados['cpf_cnpj']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">NIT ou PIS/PASEP:</label>
     <input type="number" name="nitpispasep" value="<?php echo $dados['nit_pis_pasep']; ?>"/>
     </td></tr>
 </table>
</fieldset>
 <fieldset>
     <legend>Dados de Contato</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">E-mail:</label>
     <input type="email" name="email" value="<?php echo $dados['email']; ?>"/>
     </td></tr>   
     <tr><td>
     <label for="name">E-mail Alternativo:</label>
     <input type="text" name="emailalternativo" value="<?php echo $dados['email_alternativo']; ?>" />
     </td></tr>
     <tr><td>
     <label for="name">Telefone Residencial:</label>
     <input type="tel" name="telefoneresidencial" value="<?php echo $dados['telefone_residencial']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Ramal:</label>
     <input type="number" name="ramal" value="<?php echo $dados['ramal']; ?>"/>
     </td></tr>
    
     <tr><td>
     <label for="name">Telefone Celular 01:</label>
     <input type="tel" name="telefonecelular01" value="<?php echo $dados['telefone_celular01']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Telefone Celular 02:</label>
     <input type="tel" name="telefonecelular02" value="<?php echo $dados['telefone_celular02']; ?>"/>
     </td></tr>
         
         
     </table>
     
     
 </fieldset>
 <fieldset>
     <legend>Endereço</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Cep:</label>
     <input type="number" name="cep" value="<?php echo $dados1['cep']; ?>" />
     </td></tr> 
     <tr><td>
     <label for="name">Estado:</label>
     <select name="estado" >
         <option selected=""><?php echo $dados1['estado']; ?></option>
         <option>AC</option>
         <option>AL</option>
         <option>AM</option>
         <option>AP</option>
         <option>BA</option>
         <option>CE</option>
         <option>DF</option>
         <option>ES</option>
         <option>GO</option>
         <option>MA</option>
         <option>MG</option>
         <option>MS</option>
         <option>MT</option>
         <option>PA</option>
         <option>PB</option>
         <option>PE</option>
         <option>PI</option>
         <option>PR</option>
         <option>RJ</option>
         <option>RN</option>
         <option>RO</option>
         <option>RR</option>
         <option>RS</option>
         <option>SC</option>
         <option>SE</option>
         <option>SP</option>
         <option>TO</option>
         
     </select>
     
     </td></tr>   
     <tr><td>
     <label for="name">Cidade:</label>
     <input type="text" name="cidade" value="<?php echo $dados1['cidade']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Bairro:</label>
     <input type="text" name="bairro" value="<?php echo $dados1['bairro']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Nome da Rua:</label>
     <input type="text" name="rua" value="<?php echo $dados1['rua']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Numero:</label>
     <input type="number" name="numero" value="<?php echo $dados1['numero']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Complemento:</label>
     <input type="text" name="complemento" value="<?php echo $dados1['complemento']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Ponto de Referencia:</label>
     <input type="text" name="referencia" value="<?php echo $dados1['referencia']; ?>"/>
     </td></tr> 
     <tr><td>
     <label for="name">Pessoa de Referencia 01:</label>
     <input type="text" name="pessoa01" value="<?php echo $dados1['pessoa_referencia01']; ?>"/>
     </td></tr>
     <tr><td>
     <label for="name">Pessoa de Referencia 02:</label>
     <input type="text" name="pessoa02" value="<?php echo $dados1['pessoa_referencia02']; ?>"/>
     </td></tr>
         
     </table>
     
     
 </fieldset>
  <fieldset>
     <legend>Logomarca</legend>
     <br/>
     <table>
     <tr><td>
   <input name="logomarca" type="file" size="30"/>
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
