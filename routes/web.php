<?php

use Illuminate\Support\Facades\Route;



Route::resource('comments', 'CommentController::class');
Route::resource('topics', 'Topic::class');
Route::resource('replies', 'Reply::class');

