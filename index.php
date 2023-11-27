<?php
// require_once"classes/util.class.php";

// if(Util::isLogado()){
//     if($_SESSION['perfil'] == 1){
//         header('Location: cliente/index');
//     }
//     if($_SESSION['perfil'] == 2){
//         header('Location: caixa/index');
//     }
//     if($_SESSION['perfil'] == 3){
//         header('Location: gerente/index');
//     }
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>
    <header>
        <?php 
        include_once 'inc/header.inc.php';
        ?>
    </header>

    <main>
        <fieldset>
            <form action="./" method="post">
                <label for="email">Email:</label><br>
                <input name="email" type="text" id="email" value=""><br>
        
                <label for="senha">Senha:</label><br>
                <input name="senha" type="password" id="senha" value=""><br>

                <button type="submit" id="">Logar</button>
                
            </form>
            <a href="./cargadados.php">Clique aqui</a> para carregar dados pré definidos anteriomente.
        </fieldset>
        <fieldset>
            <!-- Campo de Ultimas Notícias -->
            <h2>Últimas Notícias</h2>
            <?= $_POST['conteudo'] ?>

            <a href="todasnoticias.php">All noticies</a>
        </fieldset>
    </main>

    <footer>
        <?php 
        include_once 'inc/footer.inc.php';
        ?>

    </footer>
</body>
</html>
