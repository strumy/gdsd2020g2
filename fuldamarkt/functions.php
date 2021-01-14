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

function getAllUsers(&$db, &$errors)
{
    try {
        $query = $db->from("users");
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
function getSimilarCategoryItems(&$db, &$errors, $category, $post_id) {
    try {
        $query = $db->from("MARKET_TABLE")
        ->where("market_category", $category)
        ->where("post_id != ?", $post_id)
        ->where("Status = ?", 'available');
    } catch (\Exception $ex) {
        $errors[] = "Get Product By Category Error: " . $ex->getMessage();
        return false;
    }
    //print_r($query);

    return $query;
}

function checkIfItemInWishlist(&$dbi, &$errors, $post_id, $user_id){
    $executed = false;
    $sql_query = "SELECT EXISTS (SELECT * FROM  `WISHLIST_TABLE` WHERE market_post_id=$post_id AND wishlist_by=$user_id) AS inWishlist;";
    try{
        $query_result = mysqli_query($dbi, $sql_query);
    }
    catch (\Exception $ex) {
        $errors[] = "Insert query failed: " . $ex->getMessage();
    
        return $executed;
    }
    $query_result_assoc = $query_result->fetch_all(MYSQLI_ASSOC);
    $query_result_final = $query_result_assoc[0];
    $isinWishlist = $query_result_final['inWishlist'];
    return $isinWishlist;


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

function setUserHomeData(&$db, &$errors, &$session, &$user, &$request){
    if ($user['utype'] == 'ADMIN') {
        $title = "Admin Home";
    } else {
        $title = "User Home";
    }

    if ($request->getMethod() == "GET") {
        $data['section'] = trim($request->get('section'));
        $data['action'] = trim($request->get('action'));
        $data['uid'] = trim($request->get('uid'));
        $data['utype'] = trim($request->get('utype'));
        $data['ustatus'] = trim($request->get('ustatus'));
    }

    $inbox_messages = getAllIncomingMessages($db, $errors, $session->get('user_info')['id']);
    $sent_messages = getAllOutgoingMessages($db, $errors, $session->get('user_info')['id']);

    if($user['utype'] == 'ADMIN') {
        if (isset($data['action']) && isset($data['uid']) && isset($data['utype'])) {

            if($data['action'] == 'makeadmintoggle'){
                toggleAdmin($db, $errors, $data['uid'], $data['utype']);
            }
        }
        if (isset($data['action']) && isset($data['uid']) && isset($data['ustatus'])) {
            if($data['action'] == 'ustatus'){
                toggleStatus($db, $errors, $data['uid'], $data['ustatus']);
            }
        }

        if (isset($data['section']) && $data['section'] == 'users'){
            $userlist = getAllUsers($db, $errors);
            $data['userlist'] = $userlist;
        }
    }

    $data['inboxmessages'] = $inbox_messages;
    $data['sentmessages'] = $sent_messages;
    $data['title'] = $title;
    $data['body'] = "Welcome! " .$user['full_name'] ." You are logged in as " . ucwords($user['utype']);

    return $data;
}

function toggleAdmin(&$db, &$errors, $uid, $utype)
{
    if (!isset($utype) || !isset($uid)) {
        return false;
    }

    if($utype != 'ADMIN') {
        $state = 'ADMIN';
    } else {
        $state = 'STUDENT';
    }

    try {
        $query = $db->update('users', array('date_updated' => new \FluentLiteral('NOW()'), 'utype' => $state), $uid);
        $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Error: " . $ex->getMessage();
        return false;
    }

    return $executed;
}

function toggleStatus(&$db, &$errors, $uid, $ustatus)
{
    if (!isset($ustatus) || !isset($uid)) {
        return false;
    }

    if($ustatus == 1) {
        $state = 0;
    } else {
        $state = 1;
    }

    try {
        $query = $db->update('users', array('date_updated' => new \FluentLiteral('NOW()'), 'ustatus' => $state), $uid);
        $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Error: " . $ex->getMessage();
        return false;
    }

    return $executed;
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
