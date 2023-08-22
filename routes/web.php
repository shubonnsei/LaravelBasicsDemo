<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/posts/{post}',[\App\Http\Controllers\PostController::class,'show']);

Route::get('/', function () {
    $id = request('id');
    return view('test',['id'=>$id]);
});

Route::get('/test', function () {
    return ['foo'=>'bar'];
});

Route::get('/test1', function () {
    return redirect('/test');
});

Route::get('/hello',function(){
    return "Hello World";
});
