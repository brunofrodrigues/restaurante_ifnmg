<?php

require_once(dirname(__FILE__) ."");

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $perfil;

    public function __construct($nome,$email,$senha,$perfil)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->perfil = $perfil;
    }
}