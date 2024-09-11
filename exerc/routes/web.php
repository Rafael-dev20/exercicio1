<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth-login-basic');
});

Route::get('/cartoes', function () {
    return view('cards-basic');
});

Route::get('/alertas', function () {
    return view('ui-alerts');
});

Route::get('/paginacao', function () {
    return view('ui-pagination-breadcrumbs');
});
