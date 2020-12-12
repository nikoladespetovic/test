<?php

use App\Logic\Router;
use App\Helpers;

// Start routes
Router::get('/', 'HomeController@index');
Router::get('/index.php', 'HomeController@index');

// Route for login page
Router::get('/login', 'LoginController@index');

// Route for Login user
Router::post('/login', 'LoginController@login');

// Route for logout user
Router::get('/logout', function () {
    Helpers::directLogout();
});

//=======================
// PANEL ROUTES
//=======================

// Route for dashboard
Router::get('/dashboard', 'DashboardController@index');

// Route for get all comments
Router::get('/comments', 'CommentsController@index');

// Route for get comment row by POST method
Router::post('/comment-row', 'CommentsController@getRow');

// Route for add comment by POST method
Router::post('/add-comment', 'CommentsController@store');

// Route for edit comment by POST method
Router::post('/edit-comment', 'CommentsController@update');

