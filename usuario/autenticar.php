<?php

require_once '../classes/util.class.php';

if(isset($_POST['email']) && isset($_POST['senha']))
{
    Util::autenticarUsuario($_POST['email'], $_POST['senha']);
}
else
{
    header('Location:index');
}