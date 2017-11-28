<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cities/{city}',
           'ProvaController@test'
);

Route::get('/posts/create/{user}/{contents}',
           'PostController@createPost'
);

Route::get('/posts/{post}/comments',
          'PostController@getComments'
);

Route::get('/posts/{post_id}/comments/{user}/{contents}',
           'PostController@createComment'
);

Route::get('/posts', 'PostController@getPosts');