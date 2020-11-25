<?php

require_once 'vendor/autoload.php';

try {
    $loader = new Twig\Loader\FilesystemLoader('../template');
    $template = new Twig\Environment($loader, ['cache' => '../cache','debug' => 'true']);
} catch (Exception $ex) {
    echo $ex->getMessage();
}
