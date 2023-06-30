<?php
// filename: php/stories.php
// purpose: differentiates content

switch ($subpage) {

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
