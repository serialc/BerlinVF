<?php
// filename: php/concepts.php
// purpose: differentiates content

switch ($subpage) {

case 'global':
    include 'html/concepts/global.html';
    break;

case 'conservation':
    include 'html/concepts/conservation.html';
    break;

case 'urbang':
    include 'html/concepts/urbang.html';
    break;

case 'histper':
    include 'html/concepts/histper.html';
    break;

case 'place':
    include 'html/concepts/place.html';
    break;

default:
    include 'html/concepts.html';
}
