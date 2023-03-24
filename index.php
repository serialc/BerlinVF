<?php

$req = explode("/", ltrim($_SERVER['REQUEST_URI'], "/"));
$url_base = '/' . $req[0] . '/' . $req[1] . '/';
$page = $req[2];

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
    echo 'URL not found';
}

echo '</div>';

include 'html/footer.html';

// EOF
