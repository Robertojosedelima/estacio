<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("../../br.com.autosistem.modelo/modelo.complemento/CadastroComplementoFuncaoBD.php");
$id=$_GET["id"];

$ccfbd = new CadastroComplementoFuncaoBD();
$ccfbd->excluir($id);

                    