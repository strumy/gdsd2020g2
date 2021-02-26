<?php
require 'project.php';

$user_id = $session->get('user_info')["id"];

try {
     $query = $db->from("messages")->select(null)->select('COUNT(*) as count')->where(array("id_receiver"=> $user_id, "is_read" => 0, "mstatus" => 1))->fetch();

} catch (\Exception $ex) {
     echo "-1";
}

echo $query['count'];

//var_dump($user_id );

//echo "<br>";

//var_dump($query);

