<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$requestDispatcher = new \DVCampus\Framework\Http\RequestDispatcher([
    new \DVCampus\Cms\Router(),
    new \DVCampus\Catalog\Router(),
    new \DVCampus\ContactUs\Router(),
]);
$requestDispatcher->dispatch();




//switch ($requestUri) {
//    case '':
//        $page = 'home.php';
//        break;
//    case 'contact-us':
//        $page = 'contact-us.php';
//        break;
//    default:
//        if ($data = catalogGetCategoryByUrl($requestUri)) {
//            $page = 'category.php';
//            break;
//        }
//        if ($data = catalogGetPostByUrl($requestUri)) {
//            $page = 'post.php';
//            break;
//        }
//}



