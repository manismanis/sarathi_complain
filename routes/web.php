<?php

//============frontend login route===============

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//===========Routes to reset the password=====//

Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset')->name('admin.password.request');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//Route::any('/','backend\DashboardController@index')->name('admin.password.update');


//============frontend route===============


Route::group(['namespace' => 'frontend'], function () {   //namespace le kun end ma use hune batauchha..
    Route::any('/', 'ApplicationController@index')->name('index');
    Route::any('/complain', 'ApplicationController@Complain')->name('complain');
    Route::any('add-complain', 'ApplicationController@addComplain')->name('add-complain');
});


//============backend route===============

Route::group(['namespace' => 'backend', 'prefix' => '@admin'], function () {

    Route::any('admin-login', 'AdminLoginController@login')->name('admin-login');

    Route::group(['middleware' => 'auth:admin'], function () {

        Route::any('/', 'DashboardController@index')->name('dashboard');

        Route::any('admin-logout', 'AdminLoginController@logout')->name('admin-logout');

        Route::get('mail', 'MailController@index');
        Route::any('mail/{criteria?}', 'MailController@sendMail')->name('mail');




        //==========user routes============//
        //user_type middleware define garda certain options lai disable gardinchha //ahile lai chai purai hide nai gareko chha
        //the middleware user_type is defined in kernel.php and whose class is in the folder Middleware/UserTypeCheck

        Route::group(['prefix' => 'users', 'middleware' => 'user_type'], function () {
            Route::any('/', 'AdminController@index')->name('users');
            Route::any('add-user', 'AdminController@addUser')->name('add-user');
            Route::any('delete-user/{criteria?}', 'AdminController@deleteUser')->name('delete-user');
            Route::any('update-user-status', 'AdminController@updateUserStatus')->name('update-user-status');
            Route::any('edit-user/{criteria?}', 'AdminController@editUser')->name('edit-user');
            Route::any('edit-user-action', 'AdminController@editUserAction')->name('edit-user-action');

        });

        //===========complain routes==========//
        Route::group(['prefix' => 'complains',], function () {
            Route::any('/', 'ComplainController@index')->name('complains');
            Route::any('view-complain/{criteria?}', 'ComplainController@viewComplain')->name('view-complain');
            Route::any('delete-complain/{criteria?}', 'ComplainController@deleteComplain')->name('delete-complain');
            Route::any('edit-complain/{criteria?}', 'ComplainController@editComplain')->name('edit-complain');
            Route::any('edit-complain-action', 'ComplainController@editComplainAction')->name('edit-complain-action');
            Route::any('download/{file}', 'ComplainController@Download')->name('download');


            //======comments routes==========//
            Route::any('add-comment/{criteria?}', 'CommentController@addComment')->name('add-comment');

            Route::any('show-comments', 'CommentController@index')->name('show-comments');
            Route::any('show-onprocess-comments', 'CommentController@onprocessComment')->name('show-onprocess-comments');

            Route::any('update-complain-status', 'CommentController@updateComplainStatus')->name('update-complain-status');
            Route::any('completed-complains', 'CommentController@CompletedComplains')->name('completed-complains');
            Route::any('delete-comment/{criteria?}', 'CommentController@deleteComment')->name('delete-comment');
            Route::any('view-comment/{criteria?}', 'CommentController@viewComment')->name('view-comment');
            Route::any('edit-comment/{criteria?}', 'CommentController@editComment')->name('edit-comment');
            Route::any('edit-comment-action', 'CommentController@editCommentAction')->name('edit-comment-action');
            Route::any('write-comment/{criteria?}', 'CommentController@writeComment')->name('write-comment');
            Route::any('write-comment-action', 'CommentController@writeCommentAction')->name('write-comment-action');


        });


    });
});


