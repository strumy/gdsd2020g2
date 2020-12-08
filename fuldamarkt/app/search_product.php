<?php

require '../project.php';

//This function should return an array of results. I am not sure how the twig template would handle the array :/
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
    $sql_query = "SELECT * FROM MARKET_TABLE WHERE TITLE LIKE '%$text_input%' AND market_category='$category' ORDER BY $sort_by ASC LIMIT 10;";
    

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
$body = 'Search for items';
$errors = '';
$message = '';
$hasError = false;
// $user = false;

if ($request->getMethod() == "POST") {
    $search_by_data = array(
        'text_input' => trim($request->get('text_input')),
        'category' => trim($request->get('categories')), //should have a default value in the drop down menu
        'sort_by' => trim($request->get('sort_by'))    //should have a default value in the drop down menu
    );

    

$search_data = get_product($dbi, $errors, $search_by_data); //this is a 2d array with index starting at 0 for first row
}
/* Setting Template Variable, $page_data */
if(isset($search_data)){
$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'result' => $search_data];
}
else{
    $page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message];
}
try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
