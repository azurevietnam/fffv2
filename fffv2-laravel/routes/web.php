<?php

Route::group(['middleware' => 'admin'], function () {

});

Route::group(['middleware' => 'auth'], function () {

    // Home
    Route::get('/', 'HomeController')->name('home');
    Route::post('/change-domain', 'HomeController@change_domain');
    Route::post('/add-domain', 'HomeController@add_domain');
    Route::get('/profile', 'ProfileController@profile');
    Route::post('/profile', 'ProfileController@post_profile');

    Route::get('/click/ip-click-ao', 'VirtualClickController@ip_click_ao');
    Route::get('/click/ajax-block-ip/{id}/{ip}', 'VirtualClickController@ajax_block_ip');
    Route::get('/click/ajax-unblock-ip/{id}/{ip}', 'VirtualClickController@ajax_unblock_ip');
    Route::get('/click/ajax-click-ao-header', 'VirtualClickController@ajax_click_ao_header');
    Route::post('/click/ip-click-ao', 'VirtualClickController@ip_click_ao');

    Route::get('/click/cauhinh-chanclicktac/{domain_id?}', 'VirtualClickController@get_cauhinh_chanclicktac');
    Route::post('/click/cauhinh-chanclicktac', 'VirtualClickController@post_cauhinh_chanclicktac');









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

Route::get('/error-message', 'HomeController@error');


