<?php

require 'project.php';

$temp_name = 'post_message.twig';
$title = 'Message';
$body = '';
$message = '';
$user = false;

if ($request->getMethod() == "GET") {
    $data = array(
        'post_id' => trim($request->get('post_id')),
        'author_id' => trim($request->get('author_id')),
        'user_id' => $session->get('user_info').id
    );

    $receiver = getUserById($db, $errors, $data['author_id']);
    $product = getProductById($db, $errors, $data['post_id']);
}

if ($request->getMethod() == "POST") {
    $message_data = array(
        'body' => trim($request->get('body')),
        'id_receiver' => trim($request->get('id_receiver')),
        'id_sender' => trim($request->get('id_sender')),
        'id_product' => trim($request->get('id_product')),
        'is_read' => 0,
        'mstatus' => 1
    );

    $receiver = getUserById($db, $errors, trim($request->get('id_receiver')));
    $product = getProductById($db, $errors, trim($request->get('id_product')));

    /*Save new message to db */

    if (sendMessage($db, $errors, $message_data)) {
        $title = 'Message Sent';
        $message = 'Message sent successfully.';
    } else {
        $message = 'Sending message was unsuccessful, try again.';
    }

}

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'path_url' => $path_url, 'message' => $message,
    'session' => $session, 'data' => $data, 'receiver' => $receiver, 'product' => $product];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
