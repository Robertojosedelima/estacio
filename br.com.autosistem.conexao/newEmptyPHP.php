<select name ="funcionario">
    <?php
    $sql = "select * from cadastro_funcionario";
    $resultado = mysql_query($sql,$conexao);
    while ($dados = mysqli_fetch_array($resultado)){
        $codigo = $dados['cpf'];
        $nome = $dados['nome'];
        echo"<option value='$codigo'>$nome</option>";
    }
    
    ?>
   
</select>