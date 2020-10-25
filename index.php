<?php

include('./Route.php');

function view($fileName) {
    echo file_get_contents("./".$fileName.".php");
}

Route::add('/', function() {
    view('welcome');
});

Route::add('/upload', function() {
    view('upload');
});

Route::add('/download', function() {
    view('download');
});

Route::run();