<?php
/**
 * Created by PhpStorm.
 * User: test
 * Date: 22/10/14
 * Time: 17:37
 */

require __DIR__.'/vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
]);

$twig = new Twig_Environment($loader, [
    //'cache' => null,
]);

$articles = [
    ['name' => 'My beautiful article',
    'content' => 'Hi, it\'s my content',
    'enabled' => true,
    'date' => new DateTime('now'),
    ],
    ['name' => 'LALALALA',
        'content' => 'UNICORN',
        'enabled' => true,
        'date' => new DateTime('now'),
    ],
    ['name' => 'SuperName',
        'content' => 'POWER',
        'enabled' => false,
        'date' => new DateTime('now'),
    ],

];

echo $twig->render('article.html.twig', [
    'articles' => $articles,
]);