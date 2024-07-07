<?php
//Find out what page is being displayed;
//$filename = basename($_SERVER['PHP_SELF']);
//$title = '';
//$stylesheet = '';
//
//switch ($filename) {
//    case 'index.php':
//        $title = 'Maya Music Home';
//        $stylesheet = 'index.css';
//        break;
//    case 'shop.php':
//        $title = 'Shop Page';
//        $stylesheet = 'shop.css';
//        break;
//    case 'services.php':
//        $title = 'Services Page';
//        $stylesheet = 'services.css';
//        break;
//    case 'lessons.php':
//        $title = 'Lesson Page';
//        $stylesheet = 'lessons.css';
//        break;
//    case 'team.php':
//        $title = 'Team Page';
//        $stylesheet = 'team.css';
//        break;
//    case 'about.php';
//        $title = 'About Page';
//        $stylesheet = 'about.css';
//        break;
//    case 'contact.php':
//        $title = 'Contact Page';
//        $stylesheet = 'contact.css';
//        break;
//    default:
//        echo "Head back to index";
//}


// Define the mapping of PHP files to titles and stylesheets
$pageDetails = array(
    'index.php' => array('title' => 'Maya Music Home', 'stylesheet' => 'index.css'),
    'shop.php' => array('title' => 'Shop Page', 'stylesheet' => 'shop.css'),
    'services.php' => array('title' => 'Services Page', 'stylesheet' => 'services.css'),
    'lessons.php' => array('title' => 'Lesson Page', 'stylesheet' => 'lessons.css'),
    'team.php' => array('title' => 'Team Page', 'stylesheet' => 'team.css'),
    'about.php' => array('title' => 'About Page', 'stylesheet' => 'about.css'),
    'contact.php' => array('title' => 'Contact Page', 'stylesheet' => 'contact.css')
);

$filename = basename($_SERVER['PHP_SELF']);
$title = isset($pageDetails[$filename]['title']) ? $pageDetails[$filename]['title'] : '';
$stylesheet = isset($pageDetails[$filename]['stylesheet']) ? $pageDetails[$filename]['stylesheet'] : '';

?>


