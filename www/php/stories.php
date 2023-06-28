<?php
// filename: php/stories.php
// purpose: differentiates content

switch ($subpage) {
case 'history':
    include 'html/stories/history.html';
    break;
case 'building':
    include 'html/stories/building.html';
    break;

default:
    include 'html/stories.html';
}
