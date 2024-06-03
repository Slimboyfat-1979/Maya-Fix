<?php
//Find out what page is being displayed;
$filename = basename($_SERVER['PHP_SELF']);
$title = '';
$stylesheet = '';

switch ($filename) {
    case 'index.php':
        $title = 'Maya Music Home';
        $stylesheet = 'index.css';
        break;
    case 'shop.php':
        $title = 'Shop Page';
        $stylesheet = 'shop.css';
        break;
    case 'services.php':
        $title = 'Services Page';
        $stylesheet = 'services.css';
        break;
    case 'lessons.php':
        $title = 'Lesson Page';
        $stylesheet = 'lessons.css';
        break;
    case 'team.php':
        $title = 'Team Page';
        $stylesheet = 'team.css';
        break;
    case 'about.php';
        $title = 'About Page';
        $stylesheet = 'about.css';
        break;
    case 'contact.php':
        $title = 'Contact Page';
        $stylesheet = 'contact.css';
        break;
    default:
        echo "Head back to index";
}
?>


