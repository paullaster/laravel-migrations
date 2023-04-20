<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function (){
    return 'Welcome to my first application';
});

Route::post('/post', function(Request $request){

});
Route::get('/post/{post_id}', function(string $post_id){
    return 'post_' . $post_id;
});

Route::post('/edit/{id}', function(Request $request, string $user_id){

});

Route::put('/modify/{id}{name?}', function(Request $request, string $id, string $name="Victor"){
    
});