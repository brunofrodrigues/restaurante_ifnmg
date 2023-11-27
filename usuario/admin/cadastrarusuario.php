<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro de Usuário e Perfis</title>
</head>
<body>
    <main>
     <h2>Formulário de Inscrição de Usuários ao Restaurante </h2>

        <form action="../../services/usuarioservices.class.php" method="post">
            <fieldset>

            <label for="nome">Nome:</label><br>
            <input name="nome" type="text" id="nome" value="Testador"><br>
        
            <label for="email">Email:</label><br>
            <input name="email" type="text" id="email" value="test@gmail.com"><br>
        
            <label for="senha">Senha:</label><br>
            <input name="senha" type="password" id="senha"><br>
        
            <br>

            <select name="perf" id="perf">
                <option value="gerente" name="gerente" id="gerente">Gerente</option>
                <option value="caixa" name="caixa" id="caixa">Caixa</option>
                <option value="cliente" name="cliente" id="cliente">Cliente</option>
                <option value="administrador" name="administrador" id="administrador">Administrador</option>
            </select>
            
            </fieldset>
            <br>
            <button type="submit" id="sub1">Cadastrar</button>
        </form>

    <?php
    if (isset($_POST['salvar']))
    {
        if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['perf']))
        {
            require_once '../classes/r.class.php';
            require_once '../services/usuarioservices.class.php';

            UsuarioServices::salvar($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['perf']);
        }
        else
        {
            echo '<p>Verifique se todos os campos estão ocupados!</p>';
        }
    }
    ?>

    <h2>Lista de Usuários Cadastrados</h2>
    <?php
    require_once '../../classes/r.class.php';

    R::setup ('mysql:host=localhost;dbname=restaurante_ifnmg', 'root', '');

    $usuarios = R::findAll('usuario');
    ?>

    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Perfil</th>
        </thead>

        <tbody>
            <?php
            foreach ($usuarios as $u)
            {
                echo             
                "<tr>
                    <td>{$u->id}</td>
                    <td>{$u->nome}</td>
                    <td>{$u->email}</td>
                    <td>{$u->perfil->nome}</td>
                    <td><a href=\"editarusuario.php\">Editar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
        <?php R::close(); ?>

        <br>
        <a href="./">Retornar</a>
    </main>
    <!-- Não salva no BD nem aparece na lista de salvos -->
</body>
</html>