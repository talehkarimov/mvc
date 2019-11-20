<?php

require __DIR__ . '/database.php';
require __DIR__ . '/model.php';
require __DIR__ . '/controller.php';
require __DIR__ . '/route.php';

Route::run('/',function(){
    echo 'Hellow World!';
});

Route::run('/users','users@index');
Route::run('/users','users@post','post');
Route::run('/user/{url}','user@index');