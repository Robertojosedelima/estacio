<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';
  $cbd = new ConexaoBD();
     $sql = "select * from cadastro_empresa_responsavel er "
           . "inner join endereco en on (er.fk_endereco = en.codigo)";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $endereco = $dados['rua'].$dados['numero'];
    
    
     
?>
<?php  
session_start();
if(!isset($_SESSION["usuario"])|| !isset($_SESSION["senha"])){
   header('refresh:1,../../br.com.autosistem.visao/visao.sistema.login/TelaLogin.php'); 
}


?>

<html>
    <head>
        <title>PAINEL DE CONTROLE ADMINISTRADOR</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                margin: 0;
                padding: 0;
              
            }
            body{
                background-color: #e8e8e8;
               
            }
            nav{
                float:left;
                width: 250px;
                height: auto;
                font-family: 'Arial';
                
                
            }
            .item label{
               display: block;
               padding: 10px;
               background-color: #434343;
               font-size: 20px;
               cursor: pointer;
               color: #fff;
               border-bottom: solid 2px #aaa;
              
               
            }
            .item label:hover{
                background-color: #f2673a;
            }
           
            .item ul{
                width:100%;
                list-style: none;
                overflow: hidden;
                max-height: 0;
               
                transition: all .4s linear;
                    
            }
            .item input{
                display: none;
                
            }
            .item ul li a{
                width: 100%;
                height: 20px;
                padding: 10px;
                display: block;
                text-decoration: none;
                background-color: #fafafa;
                color: #333;
                border-bottom: solid 2px #aaa;
               
            }
            .item ul li a:hover{
                
                background-color: #9cf;
            }
            .item input:checked ~ ul{
                height: auto;
                max-height: 200px;
                transform: all;
                
            }
            
            .log{background-color: #9cf;
                 border: 1px solid #aaa; }
            .log1{background-color: #aaa;
                 color: #ffffff;
                 float: right;
                 text-decoration: none;}
            .log1:hover{
                background-color: #f2673a;
            }
            </style>
    </head>
    <body>
        <nav>
            <div class="log">
                <?php echo $_SESSION["nome"]; ?>
                <a class="log1" href="../../br.com.autosistem.visao/visao.sistema.login/Logout.php">Logout</a>
                
                <img src="../../imagem/<?php echo $dados['logomarca'];?>" width="248" height="120" alt="Sem Logo no Momento"/></br>
            </div>
                <div class="item">
                <input type="checkbox" id="check1">
                <label for="check1">Gerenciamento</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/crud.funcionario/GerenciaCadastroFuncionario.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Funcionario" id="funcao">Funcionario</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.funcao/GerenciaCadastroFuncao.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Funcao" id="funcao">Função</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.fornecedor/GerenciaCadastroFornecedor.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Fornecedor" id="funcao">Fornecedor</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.cliente.pessoa.fisica/GerenciaCadastroClientePessoaFisica.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia cliente pessoa fisica" id="funcao">Cliente Pessoa Fisica</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.cliente.pessoa.juridica/GerenciaCadastroClientePessoaJuridica.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia cliente pessoa juridica" id="funcao">Cliente Pessoa Juridica</a></li>
                    
                   

                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check2">
                <label for="check2">Listar</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/visao.sistema.relatorio/GerenciaPedido.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Relatorio Pedidos" id="funcao">Pedidos Pendentes</a></li>
                    <li><a href="../../br.com.autosistem.visao/visao.sistema.relatorio/GerenciaVenda.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Relatorio Vendas" id="funcao">Vendas Realizadas</a></li>
                    <li><a href="../../br.com.autosistem.visao/visao.sistema.relatorio/GerenciaOrcamento.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Relatorio Orcamento" id="funcao">Orcamentos</a></li>
                    
                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check3">
                <label for="check3">Configurações</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/crud.usuario/GerenciaAlteraSenha.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Alterar Dados de Acesso" id="funcao">Alterar Dados de Acesso</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.usuario/GerenciaCadastroUsuario.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Usuario" id="funcao">Gerencia Usuario</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.empresa/GerenciaCadastroEmpresa.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Empresa" id="funcao">Gerencia Empresa</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.estoque/GerenciaEstoque.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Estoque" id="funcao">Produto</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.fornecimento/GerenciaFornecimento.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Fornecimento" id="funcao">Fornecimento</a></li>
                    
                </ul>
                
            </div>
           
            <div class="item">
                
                <input type="checkbox" id="check4">
                <label for="check4">Complementos</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/crud.complemento.produto/GerenciaComplementoProduto.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Complemento de Produto" id="funcao">Complementar Produto</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.complemento.funcao/GerenciaComplementoFuncao.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Complemento de Funcao" id="funcao">Complementar Funcao</a></li>
                    
                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check5">
                <label for="check5">Garantia</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/crud.garantia/GerenciaGarantia.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Garantia" id="funcao">Gerenciar Garantia</a></li>
                    
                    
                </ul>
                
            </div>
        </nav>
        <?php
include("../../br.com.autosistem.visao/visao.painel.administrador/GerenciaPainelAdministrador.php");
?>
    </body>
</html>
