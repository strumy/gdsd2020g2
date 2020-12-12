<?php

function addUser(&$db, &$errors, $user_data = array())
{
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

function userExists(&$db, &$errors, $email)
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

function updateLoginTime(&$db, &$errors, $uid)
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

function getUser(&$db, &$errors, $user_data)
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
        if(password_verify($user_data['pass'], $user['pass'])){
            return true;
        }
        else {
            return false;
        }
    }

    return false;
}

function clearSession(&$session)
{
    if (!$session->get('is_authenticated')) {
        return false;
    }
    $session->set('is_authenticated', false);
    $session->set('user_info', null);
    return true;
}