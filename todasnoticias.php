<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas as notícias</title>
</head>
<body>
    <?php 
    
    ?>

<main>
    <h1>Notícias</h1>

    <div>
        <?php
        require_once 'inc/header.inc.php'; 

        require_once 'services/noticiaservices.class.php';
        $noticias = NoticiaServices::localizarTodos();

        foreach ($noticias as $noticia) {
            echo "<p>{$noticia->conteudo}</p>";
        }

        ?>
    </div>

    <p><a href="index.php">Retornar a Página Inicial</a></p>

</main>

<?php require_once 'inc/footer.inc.php'; ?>
</body>
</html>