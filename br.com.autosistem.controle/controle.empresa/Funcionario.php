<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**

 *
 * @author drop-
 */
require_once 'PessoaFisica.php';
class Funcionario extends PessoaFisica{
    //put your code here
    private $funcao;
    public function getFuncao() {
        return $this->funcao;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
    }


}
