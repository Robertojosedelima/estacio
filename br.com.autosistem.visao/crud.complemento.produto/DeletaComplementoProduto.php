<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("../../br.com.autosistem.modelo/modelo.complemento/CadastroComplementoProdutoBD.php");
$id=$_GET["id"];

$ccpbd = new CadastroComplementoProdutoBD();
$ccpbd->excluir($id);

                    