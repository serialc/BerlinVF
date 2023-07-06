<?php
// filename: php/stories.php
// purpose: differentiates content

switch ($subpage) {

case 'gardening':
    include 'html/stories/gardening.html';
    break;

case 'conflict':
    include 'html/stories/conflict.html';
    break;

case 'landuse':
    include 'html/stories/landuse.html';
    break;

case 'pioneer':
    include 'html/stories/pioneer.html';
    break;

case 'interview':
    include 'html/stories/interview.html';
    break;

case 'imap':
    include 'html/stories/imap.html';
    break;

case 'history':
    include 'html/stories/history.html';
    break;

case 'building':
    include 'html/stories/building.html';
    break;

default:
    include 'html/stories.html';
}
