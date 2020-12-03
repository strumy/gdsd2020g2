<?php

require_once 'vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

$path = str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__) . '/..'));

$path_root = str_replace(
    ' ',
    '%20',
    preg_replace(
        '/' . preg_quote(
            str_replace(
                DIRECTORY_SEPARATOR,
                '/',
                $_SERVER['DOCUMENT_ROOT']
            ),
            '/') . '\/?/',
        '',
        str_replace(
            DIRECTORY_SEPARATOR,
            '/',
            realpath(
                dirname(__FILE__) . '/..'
            )
        )
    )
);

$apppath_url = (
    empty($_SERVER['HTTPS']) ?
        'http://' : 'https://'
    ) . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];


try {
    $errors = array();
    /* Load libraries */
    $loader = new Twig\Loader\FilesystemLoader('../template');
    $template = new Twig\Environment($loader, ['cache' => '../cache','debug' => 'true']);

    /* Create Request Variable*/
    $request = Request::createFromGlobals();

    /*Set DB Connection*/
    $db = new \FluentPDO(new \PDO('mysql:host=' . 'localhost' . ';dbname=' . 'fuldamarkt_proddb' . '',
        'root', 'root'));
    $db->debug = false;

    /* Start Session */
    $session = new Session();
    $session->start();

} catch (Exception $ex) {
    $errors[] = $ex->getMessage();
}
