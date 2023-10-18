<?php   
 
    return ([
        '/^username$/' => [\src\Controllers\MainController::class, 'sayHello'],
        '/^$/' => [\src\Controllers\ArticleController::class, 'index'],
        '~^article/(\d+)$~'=>[\src\Controllers\ArticleController::class, 'show'],
    ]);