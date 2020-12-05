<?php

require '../project.php';

//need to include user data somehow into product data


function post_product($db, $errors, $product_data)
{
    
        $executed = false;
    
        if (empty($product_data)) {
            return $executed;
        }
        try {
            $query = $db->insertInto('MARKET_TABLE')->values($product_data);
            $executed = $query->execute(true);
        } catch (\Exception $ex) {
            $errors[] = "Add Product Error: " . $ex->getMessage();
        }
        return $executed;
}


$temp_name = 'market.twig';
$title = 'Market Page';
$body = 'Search for items';
$message = '';
$hasError = false;


if ($request->getMethod() == "POST") {
    $product_data = array(
        'title' => trim($request->get('title_input_field')),
        'category' => trim($request->get('category')), //should have a default value in the drop down menu
        'price' => trim($request->get('price'))    //should have a default value in the drop down menu
    );

    if ($is_authenticated){
        if (post_product($db, $errors, $product_data)) {
        $title = 'Create Post';
        $message = 'Your post was successfully added';
        $temp_name = 'market.twig';
        }
        else 
        {
        $message = 'Your post was not added, try again.';
        $hasError = true;
        } 
    //VS Code tells me this is an unexpected else :/ 
    else        
    {
    $message = 'You need to be logged in in order to post on the market. Please login or sign up.';
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
