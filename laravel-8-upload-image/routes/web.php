<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/image-upload', 'App\Http\Controllers\ImageUploadController@show')->name('image.upload');
Route::post('/image-upload', 'App\Http\Controllers\ImageUploadController@upload_post_image')->name('upload.post.image');
