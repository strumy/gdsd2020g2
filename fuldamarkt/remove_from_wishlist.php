<?php

require 'project.php';

function remove_from_wishlist($dbi, $errors, $input_data){

    $executed = false;
    $market_post_id = $input_data['market_post_id'];
    $user_id = $input_data['user_id'];


    if(!$dbi ){
        die('Could not connect: ' . mysqli_error());
        $errors[] = "Insert query failed: " . $ex->getMessage();
        return $executed;
        }
         
    mysqli_select_db($dbi, 'fuldamarkt_proddb'); 

    $sql_query = "DELETE FROM `WISHLIST_TABLE` WHERE market_post_id=$market_post_id AND wishlist_by=$user_id;";

    try {
        $query_result = mysqli_query($dbi, $sql_query);
        
    } catch (\Exception $ex) {
        $errors[] = "Insert query failed: " . $ex->getMessage();
        
        return $executed;
    }
    return true;

}

$temp_name = 'market.twig';
$title = 'Market Page';
$body = '';
$message = '';
$errors = '';
$hasError = false;

if ($request->getMethod() == "GET") {
    $user_info = $session->get('user_info');
    $wishlist_data = array(
        'market_post_id' => trim($request->get('post_id')),
        'user_id' => $user_info['id']
    );
    if(remove_from_wishlist($dbi, $errors, $wishlist_data)){
        $message = "Item removed from wishlist";

    }
    else{
        $message = "Item was not removed from wishlist";
    }


}

$check_auth = $session->get('is_authenticated');

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'session' => $session,'check_auth' => $check_auth];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
