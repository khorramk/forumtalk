<?php

use Illuminate\Support\Facades\Route;

Route::get('/topics', function () {
      return collect([
        __('topics') => [
            __('religion') => [
                __('discussion') => __('Religion came to sort out poeple problems'),
                __('topic_rating_on_site') => 8,
                __('written_by') => 'khorram'
            ],
            __('politics') =>  [
                __('discussion') => __('War is not the solution to all problems'),
                __('topic_rating_on_site') => 6,
                __('written_by') => 'khorram'
            ]
        ],
    ]);
});
