<?php
use Illuminate\Http\Request;
use App\Http\Middleware\routeconfig;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TodoController;



Route::group('/', function () {
    Route::get('all/todo', [TodoController::class,'index']);
    Route::post('store/todo', [TodoController::class,'store']);
    Route::patch('edit/todo', [TodoController::class,'update']);
    Route::get('show/{todo}', [TodoController::class,'show']);
    Route::delete('delete/todo', [TodoController::class,'destroy']);
})->middleware(routeconfig::class);

