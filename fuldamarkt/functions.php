<?php

/* Table: users */
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

function getUserById(&$db, &$errors, $user_id)
{
    try {
        $query = $db->from("users")
            ->where(array("id" => $user_id))
            ->fetch();
    } catch (\Exception $ex) {
        $errors[] = "Get User By Id Error: " . $ex->getMessage();
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

/* Table: MARKET_TABLE */
function getProductById(&$db, &$errors, $product_id) {
    try {
        $query = $db->from("MARKET_TABLE")
            ->where(array("post_id" => $product_id))
            ->fetch();
    } catch (\Exception $ex) {
        $errors[] = "Get Product By Id Error: " . $ex->getMessage();
        return false;
    }

    return $query;
}

function getAllProducts($db, $errors)
{
    try {
        $query = $db->from("MARKET_TABLE");
    } catch (\Exception $ex) {
        $errors[] = "Get Product By Id Error: " . $ex->getMessage();
        return false;
    }

    return $query;
}

/* Table: messages */
function sendMessage(&$db, &$errors, $message_data = array())
{
    $executed = false;

    if (empty($message_data)) {
        return $executed;
    }

    $message_data['date_inserted'] = new \FluentLiteral('NOW()');

    try {
        $query = $db->insertInto('messages')->values($message_data);
        $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Add Message Error: " . $ex->getMessage();
    }
    return $executed;
}

function getAllIncomingMessages(&$db, &$errors, $user)
{
    try {
        $query = $db->from("messages")->leftJoin('users ON users.id = messages.id_sender')->select('users.full_name')
            ->leftJoin('MARKET_TABLE ON MARKET_TABLE.post_id = messages.id_product')->select('MARKET_TABLE.author_id')
            ->where("id_receiver", $user['id']);

    } catch (\Exception $ex) {
        $errors[] = "Error: " . $ex->getMessage();
        return false;
    }

    return $query;
}

function getAllOutgoingMessages(&$db, &$errors, $user)
{
    try {
        $query = $db->from("messages")->leftJoin('users ON users.id = messages.id_receiver')->select('users.full_name')
            ->leftJoin('MARKET_TABLE ON MARKET_TABLE.post_id = messages.id_product')->select('MARKET_TABLE.author_id')
            ->where("id_sender", $user['id']);

    } catch (\Exception $ex) {
        $errors[] = "Error: " . $ex->getMessage();
        return false;
    }

    return $query;
}

function setUserHomeData(&$db, &$session, &$user){
    if ($user['utype'] == 'ADMIN') {
        $title = "Admin User Home";
    } else {
        $title = "User Home";
    }

    $inbox_messages = getAllIncomingMessages($db, $errors, $session->get('user_info')['id']);
    $sent_messages = getAllOutgoingMessages($db, $errors, $session->get('user_info')['id']);

    $data['inboxmessages'] = $inbox_messages;
    $data['sentmessages'] = $sent_messages;
    $data['title'] = $title;

    return $data;
}

/* Clears Session */
function clearSession(&$session)
{
    if (!$session->get('is_authenticated')) {
        return false;
    }
    $session->set('is_authenticated', false);
    $session->set('user_info', null);
    return true;
}