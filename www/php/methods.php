<?php
// filename: php/methods.php
// purpose: differentiates content

switch ($subpage) {
case 'storymaps':
    include 'html/methods/storymaps.html';
    break;

case 'visualmedia':
    include 'html/methods/visual_media.html';
    break;

case 'interviews':
    include 'html/methods/interviews.html';
    break;

case 'reflexive':
    include 'html/methods/reflexive.html';
    break;

case 'observations':
    include 'html/methods/observations.html';
    break;

case 'archives':
    include 'html/methods/archive.html';
    break;

default:
    include 'html/methods.html';
}
