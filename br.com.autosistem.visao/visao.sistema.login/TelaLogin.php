<?php
echo "BEM VINDO AO AUTO-SISTEM";
?>

<form name="formulario_login" action="GerenciaLogin.php" method="POST">
    
    
    <label for="name">Login:</label>
     <input type="text" name="login" />
     <label for="name">Senha:</label>
     <input type="password" name="senha" />
     
   
    <div class="button">
        <button type="submit">Logar</button>
        </div> 

</form>