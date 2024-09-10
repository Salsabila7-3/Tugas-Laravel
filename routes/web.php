<?php

use Illuminate\Support\Facades\Route;

Route::get('program', function () {
    $program ['php' , 'java', 'c', 'javascript' , 'dart'];
    return $program;
});
