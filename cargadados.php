<?php

require_once 'classes/r.class.php';
require_once 'classes/perfil.enum.class.php';

R::setup('mysql:host=localhost;dbname=restaurante_ifnmg', 'root', '' );

$usuario = R::dispense('usuario');
$usuario->nome = 'Rafaell';
$usuario->email = 'rafa@gmail';
$usuario->senha = md5('1234' . '__');
$usuario->perfil = R::enum('perfil:'. Perfil::Gerente);

$usuario2 = R::dispense('usuario');    
$usuario2->nome = 'Bruno';
$usuario2->email = 'bruno@gmail.com';
$usuario2->senha = md5('1234'. '__');
$usuario2->perfil = R::enum('perfil:'. Perfil::Cliente);

$usuario3 = R::dispense('usuario'); 
$usuario3->nome = 'Edu';
$usuario3->email = 'bet@gmail.com';
$usuario3->senha = md5('1234'. '__');
$usuario3->perfil = R::enum('perfil:'. Perfil::Caixa);

R::store( $usuario );
R::store( $usuario2 );
R::store( $usuario3 );

R::close();

echo('Executado com Sucesso!' . '<br>' . '<a href="./login.php">Retornar ao Login</a>');
?>