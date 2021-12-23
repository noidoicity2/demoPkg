<?php

use Dat\Demo\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/demo', function () {
    return "Demo Package";
});
Route::get('/test', [TestController::class, 'index']);
