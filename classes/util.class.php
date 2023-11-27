<?php

class Util{

    public static function autenticarUsuario($email, $senha)
    {
        require_once 'r.class.php';

        R::setup(
            'mysql:host=localhost;dbname=restaurante_ifnmg',
            'root',
            ''
        );

        $usuario = R::findOne(
            'usuario',
            ' email = ? AND senha = ?',
            [$email, md5($senha . '__')]
        );

        if (isset($usuario)) 
        {
            session_start();
            $_SESSION['usuario'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['perfil'] = $usuario['perfil'];

            if ($usuario['perfil'] == 1) 
            {
                header('Location:caixa/index');
            } 
            else if($usuario['perfil'] == 2)
            {
                header('Location:cliente/index');
            }
            else if($usuario['perfil'] == 3)
            {
                header('Location:gerente/index');
            }
        } 
        else 
        {
            header('Location:index');
        }

        R::close();
    }

    public static function isLogado()
    {
        if (!isset($_SESSION)) session_start();
        return isset($_SESSION['usuario']);
    }

    public static function logout()
    {
        if (!isset($_SESSION)) session_start();
        session_destroy();
        header('Location:./index');
        die();
    }
}