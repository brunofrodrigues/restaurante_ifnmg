<?php

class UsuarioServices
{

    public static function salvar($nome, $email, $senha, $perf)
    {
        require_once  './classes/r.class.php';

        R::setup(
            'mysql:host=localhost;dbname=restaurante_ifnmg',
            'root',
            ''
        );

        $usuario = R::dispense('usuario');

        $usuario->nome = $_POST['nome'];
        $usuario->email = $_POST['email'];
        $usuario->senha = md5($_POST['senha'] . '__');
        
        if($_POST['perf'] == 1)
        {
            $usuario->perfil = R::enum('perf' .  Perfil::Gerente);
        }
        if($_POST['perf'] == 2)
        {
            $usuario->perfil = R::enum('perf' .  Perfil::Cliente);
        }
        if($_POST['perf'] == 3)
        {
            $usuario->perfil = R::enum('perf' .  Perfil::Caixa);
        }
        if($_POST['perf'] == 4)
        {
            $usuario->perfil = R::enum('perf' .  Perfil::Administrador);
        }

        R::store($usuario);

        R::close();
    }

    public static function salvarEdicao($id, $nome, $email, $senha, $perf)
    {
        require_once  './classes/r.class.php';

        R::setup(
            'mysql:host=127.0.0.1;dbname=restaurante_ifnmg',
            'root',
            ''
        );

        $usuario = R::dispense('usuario');

        $usuario->id = $id;
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = md5($senha . '__');
        $usuario->perf = $perf;

        R::store($usuario);

        R::close();
    }

    public static function localizarTodos()
    {
        require_once  './classes/r.class.php';

        if (!R::testConnection()) {
            R::setup(
                'mysql:host=127.0.0.1;dbname=restaurante_ifnmg',
                'root',
                ''
            );
        }

        $usuarios = R::findAll('usuario');

        R::close();

        return $usuarios;
    }

    public static function localizarPorId($id)
    {
        require_once  './classes/r.class.php';

        if (!R::testConnection()) {
            R::setup(
                'mysql:host=127.0.0.1;dbname=restaurante_ifnmg',
                'root',
                ''
            );
        }

        $usuario = R::load('usuario', $id);

        R::close();

        return $usuario;
    }

    public static function excluir($id)
    {
        require_once  './classes/r.class.php';

        R::setup(
            'mysql:host=127.0.0.1;dbname=restaurante_ifnmg',
            'root',
            ''
        );

        R::trash('usuario', $id);

        R::close();
    }
}
