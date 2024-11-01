<?php

use App\Http\Controllers\API\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "portfolio"], function () {
    Route::apiResources([
        "projects" => ProjectController::class
    ]);
});
