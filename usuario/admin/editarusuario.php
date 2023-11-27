<?php
require_once '../classes/util.class.php';
if (!Util::isAdministrador()) {
    header('Location:/sistemab/index.php');
}
?>
<?php
if (isset($_GET['id'])) {
    require_once '../classes/usuarioservices.class.php';

    $usuario = UsuarioServices::localizarPorId($_GET['id']);

    $id = $usuario->id;
    $nome = $usuario->nome;
    $email = $usuario->email;
    $admin = $usuario->admin;

} else {
    header('Location:cadastrousuarios.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema B</title>
    <style>
        .fa-user-tie {
            color: orange;
        }

        .fa-circle-user {
            color: skyblue;
        }
    </style>
</head>

<body>
    <?php include '..inc/header.inc.php'; ?>

    <main>
        <h1>Edição de Usuário</h1>

        <form action="processaredicao.php">
            <fieldset>
                <legend>Dados do Usuário</legend>

                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?= $nome ?>"><br>

                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?= $email ?>"><br>

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha"><br>

                <!-- Falta valor pré-definido no perfil -->

                <!-- <select name="perf" id="perf">
                <option value="gerente" name="gerente" id="gerente">Gerente</option>
                <option value="caixa" name="caixa" id="caixa">Caixa</option>
                <option value="cliente" name="cliente" id="cliente">Cliente</option>
                <option value="administrador" name="administrador" id="dministrador">Administrador</option> -->
                </select>



                <a href="../../index.php">Cancelar</a> | 

                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

    </main>

    <?php include '../inc/rodape.inc.php'; ?>
</body>

</html>