<?php

Route::group(['middleware' => 'admin'], function () {

});

Route::group(['middleware' => 'auth'], function () {

    // Home
    Route::get('/', 'HomeController')->name('home');
    Route::get('/click/ip-click-ao', 'VirtualClickController@ip_click_ao');
    Route::get('/click/ip-khu-vuc', 'VirtualClickController@ip_khu_vuc');
    Route::get('/click/ip-thiet-bi', 'VirtualClickController@ip_thiet_bi');








    // Language
    Route::get('language/{lang}', 'LanguageController')
        ->where('lang', implode('|', config('app.languages')));

    // Admin
    Route::get('admin', 'AdminController')->name('admin');

    // Medias
    Route::get('medias', 'FilemanagerController')->name('medias');

    // Blog
    Route::get('blog/tag', 'BlogFrontController@tag');
    Route::get('blog/search', 'BlogFrontController@search');
    Route::get('articles', 'BlogFrontController@index');
    Route::get('blog/order', 'BlogController@indexOrder')->name('blog.order');
    Route::resource('blog', 'BlogController', ['except' => 'show']);
    Route::put('postseen/{id}', 'BlogAjaxController@updateSeen');
    Route::put('postactive/{id}', 'BlogAjaxController@updateActive');
    Route::get('blog/{blog}', 'BlogFrontController@show')->name('blog.show');

    // Comment
    Route::resource('comment', 'CommentController', [
        'except' => ['create', 'show', 'update']
    ]);
    Route::put('comment/{comment}', 'CommentAjaxController@update')->name('comment.update');
    Route::put('commentseen/{id}', 'CommentAjaxController@updateSeen');

    // Contact
    Route::resource('contact', 'ContactController', ['except' => ['show', 'edit']]);

    // Roles
    Route::get('roles', 'RoleController@edit');
    Route::post('roles', 'RoleController@update');

    // Users
    Route::get('user/sort/{role?}', 'UserController@index');
    Route::get('user/blog-report', 'UserController@blogReport')->name('user.blog.report');
    Route::resource('user', 'UserController', ['except' => 'index']);
    Route::put('uservalid/{id}', 'UserAjaxController@valid');
    Route::put('userseen/{user}', 'UserAjaxController@updateSeen');

    // Notifications
    Route::get('notifications/{user}', 'NotificationController@index');
    Route::put('notifications/{notification}', 'NotificationController@update');


});

// Authentication
Auth::routes();

// Email confirmation
Route::get('resend', 'Auth\RegisterController@resend');
Route::get('confirm/{token}', 'Auth\RegisterController@confirm');






