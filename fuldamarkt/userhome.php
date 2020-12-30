<?php

require 'project.php';

$template_name = 'user_home.twig';
$title = 'User Home';
$body = '';
$message = '';
$user = false;

try {
    if ($session->get("is_authenticated")) {
	    $user_data = $session->get('user_info');
	    $user = getUser($db, $errors, $user_data);

	    if($user == false) {
		    $message = "Userhome cannot be loaded. Please contact administrator";
	    } else {
            $data = setUserHomeData($db, $session, $user);
            $title = $data['title'];
	    }
    } else $message = "Sorry! This page can not be viewed without logging in. Please Login.";
} catch (\Exception $ex) {
	$errors[] = "Error: " . $ex->getMessage();
}

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'path_url' => $path_url, 'session' => $session,
    'data' => $data ];

try {
    echo $template->render($template_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
