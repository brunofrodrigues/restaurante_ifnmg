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
            <form action="" method="get">
                <label for="email">Email:</label><br>
                <input name="email" type="text" id="email" value=""><br>
        
                <label for="senha">Senha:</label><br>
                <input name="senha" type="password" id="senha" value=""><br>

          
                <button type="submit" id="">Logar</button>
            </form>
        </fieldset>

    </main>

    <footer>
        <?php 
        include_once 'inc/footer.inc.php';
        ?>

    </footer>
</body>
</html>
