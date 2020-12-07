<?php

require_once 'vendor/autoload.php';
require_once 'app/functions.php';
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

$path_url = (
    empty($_SERVER['HTTPS']) ?
        'http://' : 'https://'
    ) .
    $_SERVER['HTTP_HOST'] .
    (
    strlen($path_root) ?
        ("/" . $path_root) : ''
    ) .
    '/fuldamarkt/';

$host = "localhost";
$db_name = "fuldamarkt_proddb";
$dbuser = "root";
$dbpass = "root";

try {
    $loader = new Twig\Loader\FilesystemLoader('../template');
    $template = new Twig\Environment($loader, ['cache' => '../cache','debug' => 'true']);

    /* Create Request Variable*/
    $request = Request::createFromGlobals();

    /*Set DB Connection*/
    $db = new \FluentPDO(new \PDO('mysql:host=' . $host . ';dbname=' . $db_name, $dbuser, $dbpass));
    $db->debug = false;

    /* Start Session */
    $session = new Session();
    $session->start();

} catch (Exception $ex) {
    echo $ex->getMessage();
}

try {
    $dbi = mysqli_connect($host, $dbuser, $dbpass, $db_name);

    if (!$dbi) {
        echo "Error Occured: " . mysqli_connect_errno() . " Error message: " . mysqli_connect_error();
        exit;
    }
}
catch (Exception $ex) {
    echo $ex->getMessage();
}