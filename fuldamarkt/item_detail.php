<?php

require 'project.php';

$temp_name = 'item_detail.twig';
$title = 'Message';
$body = '';
$message = '';

$product_pictures = array();
$related_pictures = array();

if ($request->getMethod() == "GET") {
    $data = array(
        'post_id' => trim($request->get('post_id')),
        'author_id' => trim($request->get('author_id')),
        //'user_id' => $session->get('user_info').id
    );

    $receiver = getUserById($db, $errors, $data['author_id']);
    $product = getProductById($db, $errors, $data['post_id']);
    $related_products = getSimilarCategoryItems($db,$errors,$product['market_category'],$product['post_id']);

    $val = $product;

    if(isset($val['picture'])){ //check if a post has a picture directory
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . $val['picture'])){
            $files = array_diff( scandir( $_SERVER['DOCUMENT_ROOT'] . $val['picture']), array(".", "..") ); //get list of image files found in the post's directory
            $temp_array = array('directory' => $val['picture'],'images' => $files);
            array_push($product_pictures, $temp_array);
        }
    }
    unset($val);
    
        foreach($related_products as $val){
           if(isset($val['picture'])){ //check if a post has a picture directory
              if(file_exists($_SERVER['DOCUMENT_ROOT'] . $val['picture'])){
                  $files = array_diff( scandir( $_SERVER['DOCUMENT_ROOT'] . $val['picture']), array(".", "..") ); //get list of image files found in the post's directory
                  $temp_array = array('directory' => $val['picture'],'images' => $files);
                  array_push($related_pictures, $temp_array);
              }
            }
        }
    unset($val);
}

$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'path_url' => $path_url, 'message' => $message,
    'session' => $session, 'data' => $data, 'receiver' => $receiver, 'product' => $product,'product_pictures' => $product_pictures,
'related_items' =>$related_products,'related_pictures' => $related_pictures];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}