
<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {

    case '':
    case '/':
        require __DIR__ . '\Files\index.php';
        break;

    // case '/courses':
    //     require __DIR__ . '/Files/courses.php';
    //     break;

    // case '/views/authors':
    //     require __DIR__ . '/Files/authors.php';
    //     break;

     case '/about':
         require __DIR__ . '\Files\aboutus.php';
         break;

    default:
        http_response_code(404);
        require __DIR__ . '\Files\404.php';
        break;
}
