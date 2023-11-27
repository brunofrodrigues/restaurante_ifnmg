<?php
require_once '../classes/util.class.php';
if (!Util::isAdministrador()) {
    header('Location:/sistemab/index.php');
}
?>
<?php

if (isset($_GET['id'])) {
    require_once '../classes/usuarioservices.class.php';
    UsuarioServices::excluir($_GET['id']);
}

header('Location:/sistemab/admin/index.php');
