<?php

require '../project.php';

$temp_name = 'index.twig';
$title = 'FuldaMarkt Home';
$body = '';
$message = '';

$logout = false;

if ($session->get('is_authenticated')) {
    $logout = clearSession($session);
} else {
    $message = "User can not logout without loggin in.";
}

if ($logout) {
    $message = 'The user successfully logged out.';
}

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'path_url' => $path_url, 'session' => $session];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
