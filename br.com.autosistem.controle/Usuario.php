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
class Usuario {
    //put your code here
    private $funcao;
    private $matricula;
    private $login;
    private $senha;
    public function getFuncao() {
        return $this->funcao;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


}
