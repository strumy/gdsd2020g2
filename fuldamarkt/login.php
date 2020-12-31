<?php

require 'project.php';

$temp_name = 'login.twig';
$title = 'Login';
$body = 'Login Here';
$message = '';
$user = false;

if ($request->getMethod() == "POST") {
    $user_data = array(
        'email' => trim($request->get('email')),
        'pass' => trim($request->get('password')),
        'ustatus' => 1
    );

    $user = getUser($db, $errors, $user_data);

    if($user == false){
        $message = "Login Failed! Either user email or password is incorrect. Try again.";
    } else {
        $is_authenticated = authenticateUser($user, $user_data);
        if ($is_authenticated) {
            try {
                if (!$session->isStarted()) {
                    $request->getSession()->start();
                }
            } catch (\Exception $ex) {
                $errors[] = "Set Session Error: " . $ex->getMessage();
                return false;
            }
            $session->set('is_authenticated', true);
            $session->set('user_info', $user);
            updateLoginTime($db, $errors, $user['id']);

            $temp_name = 'user_home.twig';
            $message = 'Login successful!';

            $data = setUserHomeData($db, $errors, $session, $user, $request);
            $title = $data['title'];
            $body = $data['body'];
        }
        else {
            $message = "Login Failed! Either user email or password is incorrect. Try again.";
        }
    }
}

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'path_url' => $path_url, 'session' => $session, 'data' => $data];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
