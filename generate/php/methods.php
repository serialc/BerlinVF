<?php
// filename: php/methods.php
// purpose: differentiates content

switch ($subpage) {
case 'archives':
    include 'html/methods/archive.html';
    break;

default:
    include 'html/methods.html';
}
