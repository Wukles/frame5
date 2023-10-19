<?php   
 
    return ([
        '/^username$/' => [\src\Controllers\MainController::class, 'sayHello'],
        '/^$/' => [\src\Controllers\ArticleController::class, 'index'],
        '~^article/(\d+)$~'=>[\src\Controllers\ArticleController::class, 'show'],
        '~^article/create$~'=>[\src\Controllers\ArticleController::class, 'create'],
        '~^article/store$~'=>[\src\Controllers\ArticleController::class, 'store'],
    ]);