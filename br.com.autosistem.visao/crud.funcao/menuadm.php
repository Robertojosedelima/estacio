<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../../br.com.autosistem.visao/crud.funcao/GrenciaCadastroFuncao.php';

?>
<html>
    <head>
        <title>menu administrador</title>
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
                
                <input type="checkbox" id="check1">
                <label for="check1">Gerenciamento</label>
                <ul>
                    <li><a href="GerenciamentoCadastroFuncionario.php">Funcionario</a></li>
                    <li><a href="">Funcao</a></li>
                    <li><a href="">Cliente</a></li>
                    <li><a href="">Fornecedor</a></li>
                    
                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check2">
                <label for="check2">Relatórios</label>
                <ul>
                    <li><a href="">Administrativo</a></li>
                    <li><a href="">Operacional</a></li>
                    <li><a href="">Vendas</a></li>
                    
                </ul>
                
            </div>
            <div class="item">
                
                <input type="checkbox" id="check3">
                <label for="check3">Configurações</label>
                <ul>
                    <li><a href="">Gerenciamento de Usuarios</a></li>
                    <li><a href="">Gerenciamento de Empresa</a></li>
                    
                    
                </ul>
                
            </div>
        </nav>
    </body>
</html>
