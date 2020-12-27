<?php

require 'project.php';




function post_product($dbi, $errors, $input_data,$session)
{
    $executed = false;
    $title_input = $input_data['title'];
    //Input validation to check if input is alphanumeric and less than 40 characters
    if(!empty($title_input)){
        if(!ctype_alnum(str_replace(' ','',$title_input)) || (strlen($title_input)) >= 40){
            return 1;
        }
    }
    else{
        return 1;
    }

    $text_input = $input_data['text_input'];
    $price = $input_data['price'];
    $category = $input_data['category'];
    $user_data = $session->get('user_info');
    $user_id = $user_data['id'];

   
    if(!$dbi ){
        die('Could not connect: ' . mysqli_error());
        $errors[] = "Insert query failed: " . $ex->getMessage();
        return $executed;
        }
         
    mysqli_select_db($dbi, 'fuldamarkt_proddb');   
    
    $sql_query1 = "INSERT INTO `MARKET_TABLE`(`title`,`author_id`,`date_inserted`,`market_category`,`Price`,`Status`,`Sold_to`,`text_body`,`picture`) 
    VALUES('$title_input', $user_id, NOW(), '$category', $price, 'pending', NULL, '$text_input', CONCAT('/uploads/$user_id/posts/', 
    UUID_SHORT(), '/'))";
    $sql_query2 = "SELECT picture from `MARKET_TABLE` WHERE title='$title_input' AND author_id = $user_id AND text_body='$text_input';";
    try {
        $query_result = mysqli_query($dbi, $sql_query1);
        if($query_result){
            $query_result2 = mysqli_query($dbi, $sql_query2);
            $picture_directory = $query_result2->fetch_all(MYSQLI_ASSOC);
            $picture_directory = implode('',$picture_directory['0']);
       }
    } catch (\Exception $ex) {
        $errors[] = "Insert query failed: " . $ex->getMessage();
        
        return $executed;
    }
   
    
    return $picture_directory;
}






$temp_name = 'create_post.twig';
$title = 'Post an item:';
$body = '';
$message = '';
$errors = '';
$hasError = false;





if ($request->getMethod() == "POST") {
   
    $input_data = array(
        'title' => trim($request->get('title_input')),
        'text_input' => trim($request->get('text_input')), 
        'price' => trim($request->get('Price')) ,   
        'category' => trim($request->get('categories')) 
    );
       $picture_directory = post_product($dbi, $errors, $input_data,$session);  /*the query returns a directory for the images, or code 1 if the title is
       not alphanumeric and less than 40 characters, or if its empty*/
       if($picture_directory != 1){
            $targetDir = $_SERVER['DOCUMENT_ROOT'] . $picture_directory;  //append the picture directory to the document root of the server
       
             //create directory for the post
             if (!file_exists($targetDir)) {
                 $created = mkdir($targetDir, 0755, true);  
             }
       
            $fileNames = array_filter($_FILES['picture']['name']);
       
            try{
            if(!empty($fileNames)){ 
                foreach($_FILES['picture']['name'] as $key=>$val){ 
                // File upload path 
                $fileName = basename($_FILES['picture']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName;            
                move_uploaded_file($_FILES["picture"]["tmp_name"][$key], $targetFilePath); 
                } 
            }
            }
            catch (\Exception $ex) {
                $errors[] = "File Upload Error: " . $ex->getMessage();
                return false;
            }
            $temp_name = 'market.twig';
            $message = 'Post created successfully, please wait for approval';
        }
        else{
            $message = 'Post title needs to be alphanumeric and less than 40 characters, and needs to be filled';
        }
    
}

/* Setting Template Variable, $page_data */
$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'session' => $session];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}

