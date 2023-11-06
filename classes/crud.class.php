<?php

class CrudUserServices{
    public static function salvar($id, $nome, $email, $senha, $perfil)
    {
        require_once 'r.class.php';

        R::setup ('mysql:host=localhost;dbname=restaurante_ifnmg','root','');

        $usuario = R::dispense('usuario');

        $usuario->id = 'id';
        $usuario->nome = 'nome';
        $usuario->email = 'email';
        $usuario->senha = 'senha';
        $usuario->perfil = 'perfil';

        R::store($usuario);
    }
}