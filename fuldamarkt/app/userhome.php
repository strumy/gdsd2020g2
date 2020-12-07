<?php

require '../project.php';

$temp_name = 'user_home.twig';
$title = 'User Home';
$body = '';
$message = '';
$user = false;

if ($request->getSession()->isStarted() ) {
    $user_data = $request->getSession()->get('user_info');
    $user = getUser($db, $errors, $user_data);

    if($user == false){
        $message = "Userhome cannot be loaded. Please contact administrator";
    } else {
        $body = "User's Home";

    }
} else $message = "Sorry! This page can not be viewed without logging in. Please <a href='login.php'>Login</a>";

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'path_url' => $path_url, 'session' => $session];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
