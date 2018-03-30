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
    private $area;
    private $funcionario;
    private $login;
    private $senha;
    public function getArea() {
        return $this->area;
    }

    public function getFuncionario() {
        return $this->funcionario;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function setFuncionario($funcionario) {
        $this->funcionario = $funcionario;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }



}
