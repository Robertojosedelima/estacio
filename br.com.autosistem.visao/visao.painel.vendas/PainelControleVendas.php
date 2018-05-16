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
        <title>PAINEL DE CONTROLE VENDEDOR</title>
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
            </style>
    </head>
    <body>
        <nav>
            <div class="item">
                <?php echo $_SESSION["nome"]; ?>
                <a href="../../br.com.autosistem.visao/visao.sistema.login/Logout.php">Logout</a>
                
                <img src="../../imagem/<?php echo $dados['logomarca'];?>" width="250" height="120" alt="Sem Logo no Momento"/></br>
                
                
                <input type="checkbox" id="check1">
                <label for="check1">Gerenciamento</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/crud.orcamento/GerenciaCadastroOrcamento.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Orçamento" id="funcao">Orçamento</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.pedidos/GerenciaCadastroPedido.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Pedido" id="funcao">Pedido</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.vendas/GerenciaCadastroVendas.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Vendas" id="funcao">Vendas</a></li>
                    
                   

                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check2">
                <label for="check2">Lista Rapida</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/visao.busca/GerenciaBusca.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Listar Vendas" id="funcao">Listar Produtos</a></li>
                  
                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check3">
                <label for="check3">Configurações</label>
                <ul>
                    <li><a href="../../br.com.autosistem.visao/crud.usuario/GerenciaAlteraSenha.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Senha" id="funcao">Alterar Dados Da Conta</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.nota/GerenciaCadastroNota.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Nota Fiscal" id="funcao">Nota Fiscal</a></li>
                    <li><a href="../../br.com.autosistem.visao/crud.nota/GerenciaImpressao.php" onclick="window.open(this.href,'funcao','aling=right','width=580,height=400'); return false;" title="Gerencia Imprimir Nota Fiscal" id="funcao">Impimir Nota Fiscal</a></li>
                    
                </ul>
                
            </div>
        </nav>
        <?php
include("../../br.com.autosistem.visao/visao.painel.vendas/GerenciaPainelVendas.php");
?>
    </body>
</html>
