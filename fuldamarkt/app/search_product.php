<?php

require '../project.php';

//This function should return an array of results. I am not sure how the twig template would handle the array :/
function get_product($db, $errors, $search_by_data)
{
    $executed = false;

    if (!isset($search_by_data['text_input_field'])) {
        //I do not know how to fix the syntax error below :(
        $sql_query = "SELECT title, market_category, price FROM Fulda_Markt1.MARKET_TABLE WHERE market_category='$search_by_data['category']' ORDER BY $search_by_data['sort_by'] ASC LIMIT 10;";
        else{
            $sql_query = "SELECT title, market_category, price FROM Fulda_Markt1.MARKET_TABLE WHERE TITLE LIKE '%$search_by_data['text_input_field']' AND market_category='$search_by_data['category']' ORDER BY $search_by_data['sort_by'] ASC LIMIT 10;";
        }
    }

    try {
        $query_result = $db->query($sql_query)
       // $executed = $query->execute(true);
    } catch (\Exception $ex) {
        $errors[] = "Search query failed: " . $ex->getMessage();
        return $executed;
    }

    return $query_result;
}





$temp_name = 'market.twig';
$title = 'Market Page';
$body = 'Search for items';
$message = '';
$hasError = false;
// $user = false;

if ($request->getMethod() == "POST") {
    $search_by_data = array(
        'text_input_field' => trim($request->get('text_input_field')),
        'category' => trim($request->get('category')), //should have a default value in the drop down menu
        'sort_by' => trim($request->get('sort_by'))    //should have a default value in the drop down menu
    );

    

$search_data = get_product($db, $errors, $search_by_data);
}
/* Setting Template Variable, $page_data */
$page_data = ['title' => $title, 'body' => $body, 'errors'=> $errors, 'message' => $message, 'result' => $search_data];

try {
    echo $template->render($temp_name, $page_data);
} catch (\Exception $ex) {
    $errors[] = "Template render error: " . $ex->getMessage();
    var_dump($errors);
}
