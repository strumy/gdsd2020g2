<?php

require '../project.php';

$page_data = ['title' => 'Home', 'body' => 'Welcome to FuldaMarkt'];

echo $template->render('index.twig', $page_data);
