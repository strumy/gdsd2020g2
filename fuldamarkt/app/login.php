<?php

require '../project.php';

function updateLoginTime($db, $errors, $uid)
{
    $executed = false;

    if (!isset($uid)) {
        return $executed;
    }

    try {
        $query = $db
            ->update('users', array('date_lastlogin' => new \FluentLiteral('NOW()')), $uid);
        $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Update Login Time Error: " . $ex->getMessage();
        return $executed;
    }

    return $executed;
}

function setSession($user, $request, $session, $errors)
{
    if (!$session->isStarted()) {
        try {
            $request->getSession()->start();
        } catch (\Exception $ex) {
            $errors[] = "Update Login Time Error: " . $ex->getMessage();
            return false;
        }
    }

    $session->set('is_authenticated', true);
    $session->set('user_info', $user);

    return true;
}

function getUser($db, $errors, $user_data)
{
    try {
        $query = $db->from("users")
            ->where(array("email" => $user_data['email'], "ustatus" => $user_data['ustatus']))
            ->fetch();
    } catch (\Exception $ex) {
        $errors[] = "Get User Error: " . $ex->getMessage();
        return false;
    }

    return $query;
}

function authenticateUser($user, $user_data)
{
    if ($user) {
        foreach ($user as $q){
            if(password_verify($user_data['pass'], $q['pass'])){
                return true;
            }
            else {
                return false;
            }
        }
    }

    return false;
}

$temp_name = 'login.twig';
$title = 'Login';
$body = 'Login Here';
$message = '';
$hasError = false;
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
        $hasError = true;
    } else {

        $is_authenticated = authenticateUser($db, $errors, $user, $user_data);
        if ($is_authenticated) {
            $this->setSession($user, $request, $session, $errors);
        }

    }



}


/* Setting Template Variable, $page_data */
$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
