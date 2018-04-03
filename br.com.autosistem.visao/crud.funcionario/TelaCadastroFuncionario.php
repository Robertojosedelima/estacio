<?xml version="1.0" encoding="UTF-8"?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>CADASTRO DE FUNCIONARIO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

   
        <div>CADASTRO DE FUNCIONARIO</div>
        <form name = "cadastro-novo-funcionario.php" action ="CadastraFuncionario.php" method="post">
       
 <!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
   <br/> 
 <table >
     <tr><td>
     <label for="name">Função:</label>
      <select name ="funcao">
    <?php
    $cbd = new ConexaoBD();
    $sql = "select * from cadastro_funcao";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['codigo'];
        $nome = $dados['nome'];
        $descricao = $dados['descricao'];
        echo"<option value='$codigo'>$nome</option>";
        
       }
   
    ?>
   
</select>
     </td></tr>
     
     <tr><td>
     <label for="name">Nome:</label>
     <input type="text" name="nome" />
     </td></tr>
     <tr><td>
     <label for="name">Sobre Nome:</label>
     <input type="text" name="sobrenome" />
     </td></tr>
     <tr><td>
     <label for="name">Data De Nascimento:</label>
     <input type="date" name="datanascimento" />
     </td></tr>
     <tr><td>
     <label for="name">Naturalidade:</label>
     <input type="text" name="naturalidade" />
     </td></tr>
     <tr><td>
     <label for="name">Nacionalidade:</label>
     <input type="text" name="nacionalidade" />
     </td></tr>
     <tr><td>
     <label for="name">Sexo:</label>
     <select name="sexo">
         <option>Masculino</option>
         <option>Feminino</option>
     </select>
     </td></tr>
     <tr><td>
     <label for="name">Estado Civil:</label>
     <select name="estadocivil">
         <option>Solteiro</option>
         <option>Casado</option>
         <option>Divorciado</option>
     </select>
     </td></tr>
     <tr><td>
     <label for="name">Rg:</label>
     <input type="number" name="rg"/>
     </td></tr>
      <tr><td>
     <label for="name">Cpf:</label>
     <input type="number" name="cpf" />
     </td></tr>
     <tr><td>
     <label for="name">Ctps:</label>
     <input type="number" name="ctps" />
     </td></tr>
     <tr><td>
     <label for="name">Pis:</label>
     <input type="number" name="pis" />
     </td></tr>
 </table>
</fieldset>
 <fieldset>
     <legend>Dados de Contato</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">E-mail:</label>
     <input type="email" name="email"/>
     </td></tr>   
     <tr><td>
     <label for="name">E-mail Alternativo:</label>
     <input type="text" name="emailalternativo" />
     </td></tr>
     <tr><td>
     <label for="name">Telefone Residencial:</label>
     <input type="tel" name="telefoneresidencial" />
     </td></tr>
     <tr><td>
     <label for="name">Ramal:</label>
     <input type="number" name="ramal" />
     </td></tr>
    
     <tr><td>
     <label for="name">Telefone Celular 01:</label>
     <input type="tel" name="telefonecelular01" />
     </td></tr>
     <tr><td>
     <label for="name">Telefone Celular 02:</label>
     <input type="tel" name="telefonecelular02" />
     </td></tr>
         
         
     </table>
     
     
 </fieldset>
 <fieldset>
     <legend>Endereço</legend>
     <br/>
     <table>
     <tr><td>
     <label for="name">Cep:</label>
     <input type="number" name="cep" />
     </td></tr> 
     <tr><td>
     <label for="name">Estado:</label>
     <select name="estado">
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
     <input type="text" name="cidade" />
     </td></tr>
     <tr><td>
     <label for="name">Bairro:</label>
     <input type="text" name="bairro" />
     </td></tr>
     <tr><td>
     <label for="name">Nome da Rua:</label>
     <input type="text" name="rua" />
     </td></tr>
     <tr><td>
     <label for="name">Numero:</label>
     <input type="number" name="numero" />
     </td></tr>
     <tr><td>
     <label for="name">Complemento:</label>
     <input type="text" name="complemento" />
     </td></tr>
     <tr><td>
     <label for="name">Ponto de Referencia:</label>
     <input type="text" name="referencia" />
     </td></tr> 
     <tr><td>
     <label for="name">Pessoa de Referencia 01:</label>
     <input type="text" name="pessoa01" />
     </td></tr>
     <tr><td>
     <label for="name">Pessoa de Referencia 02:</label>
     <input type="text" name="pessoa02" />
     </td></tr>
         
     </table>
     
     
 </fieldset>

<br/>
        <div class="button">
        <button type="submit">Finalizar Cadastro</button>
        </div>  
            
        </form>
            
            
            
            
            
           
    </body>
</html>
