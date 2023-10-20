<?php   
 
    return ([
        '/^username$/' => [\src\Controllers\MainController::class, 'sayHello'],
        '/^$/' => [\src\Controllers\ArticleController::class, 'index'],
        '~^article/(\d+)$~'=>[\src\Controllers\ArticleController::class, 'show'],
        '~^article/create$~'=>[\src\Controllers\ArticleController::class, 'create'],
        '~^article/store$~'=>[\src\Controllers\ArticleController::class, 'store'],
        '~^article/edit/(\d+)$~'=>[\src\Controllers\ArticleController::class, 'edit'],
        '~^article/update/(\d+)$~'=>[\src\Controllers\ArticleController::class, 'update'],
        '~^article/delete/(\d+)$~'=>[\src\Controllers\ArticleController::class, 'delete'],
        

    ]);

