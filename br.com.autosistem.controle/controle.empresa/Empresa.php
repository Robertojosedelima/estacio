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
require_once 'PessoaJuridica.php';
class Empresa extends PessoaJuridica{
    //put your code here
    private $login;
    private $senha;
    private $area;
    private $logomarca;
    public function getLogomarca() {
        return $this->logomarca;
    }

    public function setLogomarca($logomarca) {
        $this->logomarca = $logomarca;
    }

        public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

        public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


}
