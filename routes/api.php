<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
   Crud com Laravel 8
   Autor: Isaias Oliveira
   visaotec.com@gmail.com

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
