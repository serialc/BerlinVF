<?php

$req = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));
$page = $req[0];

// start output buffering to save to static html
ob_start();

include 'html/header.html';
include 'php/nav.php';

echo '<div class="container bg-light pb-4">';

switch ($page) {
case '':
    include 'html/main.html';
    break;

case 'stories':
    include 'html/stories.html';
    break;

case 'concepts':
    include 'html/concepts.html';
    break;

case 'methods':
    include 'html/methods.html';
    break;

default:
    echo $page;
    echo 'URL not found';
}

echo '</div>';

include 'html/footer.html';


// write output buffer
$exp_path = '../static/';
$dir_path = $exp_path . $page;
if (!is_dir($dir_path)) {
    mkdir($dir_path, 0777);
}

// export each page to a folder
$file_path = $dir_path . (strcmp($page, '') === 0 ? '' : '/') . 'index.html';
if (!file_put_contents($file_path, ob_get_contents())) {
    echo "ERROR SAVING BUFFER for " . $file_path;
}

// EOF