<?php
// filename: php/stories.php
// purpose: differentiates content

switch ($subpage) {
case 'building':
    include 'html/stories/building.html';
    break;

default:
    include 'html/stories.html';
}
