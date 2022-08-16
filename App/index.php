<?php

include 'Controller/YogController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/Yog':
        
        YogController::index();
    break;

    case '/Yog/form':
        YogController::form();
    break;

    case '/Yog/form/save':
        YogController::save();
    break;

    case '/Yog/delete':
        YogController::delete();
    break;

    default:
         YogController::index();
    break;
}