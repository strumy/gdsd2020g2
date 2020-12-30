<?php

require 'project.php';

//This function should return an array of results. 
function get_product($dbi, $errors, $search_by_data)
{
    $executed = false;
    $text_input = $search_by_data['text_input'];
    $category = $search_by_data['category'];
    $sort_by = $search_by_data['sort_by'];

   
    if(!$dbi ){
        die('Could not connect: ' . mysqli_error());
        $errors[] = "Search query failed: " . $ex->getMessage();
        return $executed;
        }
         
    mysqli_select_db($dbi, 'fuldamarkt_proddb');    
    $sql_query = "SELECT * FROM MARKET_TABLE WHERE TITLE LIKE '%$text_input%' AND market_category LIKE '%$category%' ORDER BY $sort_by ASC LIMIT 10;";
    

    try {
        $query_result = mysqli_query($dbi, $sql_query);
       // $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Search query failed: " . $ex->getMessage();
        
        return $executed;
    }
    
    $query_result2 = $query_result->fetch_all(MYSQLI_ASSOC);
    return $query_result2;
}





$temp_name = 'market.twig';
$title = 'Market Page';
$body = '';
$errors = '';
$message = '';
$hasError = false;
// $user = false;

if ($request->getMethod() == "POST") {
    $search_by_data = array(
        'text_input' => trim($request->get('text_input')),
        'category' => trim($request->get('categories')), 
        'sort_by' => trim($request->get('sort_by'))    
    );

    

$search_data = get_product($dbi, $errors, $search_by_data); //this is a 2d array with index starting at 0 for first row
$search_data_pictures = array(); /*array containing multiple entries of (directory:images), the directory is a string containg the location of a posts' images.
the ['images'] is a subarray containing names of pictures inside the directory */


if(isset($search_data)){ //check if there are results to the search query
    foreach($search_data as $val){ 
        if(isset($val['picture'])){ //check if a post has a picture directory
            if(file_exists($_SERVER['DOCUMENT_ROOT'] . $val['picture'])){ 
                $files = array_diff( scandir( $_SERVER['DOCUMENT_ROOT'] . $val['picture']), array(".", "..") ); //get list of image files found in the post's directory
                $temp_array = array('directory' => $val['picture'],'images' => $files);  
                array_push($search_data_pictures, $temp_array);
            }
        }
    }
unset($val);
}
}

// necessary to forward to the twig template so that the "create post" button only appears when a user is logged in
$check_auth = $session->get('is_authenticated');


/* Setting Template Variable, $page_data */
if(isset($search_data)){
$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'result' => $search_data,
  'search_data_pictures' => $search_data_pictures, 'Doc_root' => $_SERVER['DOCUMENT_ROOT'], 'check_auth' => $check_auth, 'session' => $session];
}
else{
    //$message = "No Data Found";
    $page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'check_auth' => $check_auth, 'session' => $session];
}
try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
