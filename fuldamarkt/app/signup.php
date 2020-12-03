<?php

require '../project.php';

function addUser($db, $errors, $user_data = array()){
    $executed = false;

    if (empty($user_data)) {
        return $executed;
    }

    $user_data['date_inserted'] = new \FluentLiteral('NOW()');

    try {
        $query = $db->insertInto('users')->values($user_data);
        $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Add User Error: " . $ex->getMessage();
    }
    return $executed;
}

function userExists($db, $errors, $email)
{
    try {
        $query = $db->from("users")
            ->select(null)
            ->select(array('id'))
            ->where(array("email" => $email))
            ->fetch();
    } catch (\Exception $ex) {
        $errors[] = "UserExists Error: " . $ex->getMessage();
        return false;
    }

    return $query;
}

$temp_name = 'signup.twig';
$title = 'Signup';
$body = 'Signup Here';
$message = '';
$hasError = false;

if ($request->getMethod() == "POST") {
    $user_data = array(
        'full_name' => trim($request->get('name')),
        'user_name' => trim($request->get('uname')),
        'email' => trim($request->get('email')),
        'pass' => password_hash(trim($request->get('password')), PASSWORD_DEFAULT),
        'utype' => trim($request->get('utype')),
        'gender' => trim($request->get('gender')),
        'ustatus' => 1,
    );

    /*Check if User email has suffix, 'hs-fulda.de' */
    $domain_name = substr(strrchr($user_data['email'], "@"), 1);
    if (strpos($domain_name, 'hs-fulda.de') == false) {
        $message = 'Signup was unsuccessful, try again. The email, '. $user_data['email'] . ' is not a valid HS Fulda Student/Faculty/Staff email.';
        $hasError = true;
    }

    /* Check if User email already exists or not */
    if (userExists($db, $errors, $user_data['email'])) {
        $message = 'Signup was unsuccessful, try again. User with email, '. $user_data['email'] . ' already exists. Try another email.';
        $hasError = true;
    }

    /*Insert new user information to db and redirect to login page.*/
    if(!$hasError) {
        if (addUser($db, $errors, $user_data)) {
            $title = 'Login';
            $message = 'Sign up was successful. You can login now.';
            $temp_name = 'login.twig';
        } else {
            $message = 'Signup was unsuccessful, try again.';
            $hasError = true;
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