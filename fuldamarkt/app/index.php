<?php

require '../project.php';

$page_data = ['title' => 'Home Page', 'body' => 'body content'];

echo $template->render('index.twig', $page_data);
