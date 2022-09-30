<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/sorter/{num}",[FourFunctions::class,"sorter"]);
Route::get("/binary/{string}",[FourFunctions::class,"binary"]);
Route::get("/order/{string}",[FourFunctions::class,"order"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
