<?php

class NoticiaServices
{

    public static function salvar($conteudo)
    {
        require_once './classes/r.class.php';

        R::setup(
            'mysql:host=localhost;dbname=restaurante_ifnmg',
            'root',
            ''
        );

        $noticia = R::dispense('noticia');

        $noticia->conteudo = nl2br($conteudo, FALSE);
        // $noticia->data = new DateTime();

        R::store($noticia);

        R::close();
    }

    public static function localizarRecentes()
    {
        require_once './classes/r.class.php';

        if (!R::testConnection()) {
            R::setup(
                'mysql:host=localhost;dbname=restaurante_ifnmg',
                'root',
                ''
            );
        }

        $noticias = R::findAll('noticia', ' ORDER BY data DESC LIMIT 5 ');

        R::close();

        return $noticias;
    }

    public static function localizarTodos()
    {
        require_once './classes/r.class.php';

        if (!R::testConnection()) {
            R::setup(
                'mysql:host=localhost;dbname=restaurante_ifnmg',
                'root',
                ''
            );
        }

        $noticias = R::findAll('noticia', ' ORDER BY data DESC ');

        R::close();

        return $noticias;
    }
}
