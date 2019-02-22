<?php

use App\Start\View;
use App\Start\Route;
use App\Controller\Admin\Controller;

/**
* @routes Web
*/

Route::register('/admin' , function(){
    Controller::index();
}, "Admin Page");

Route::register('/admin/reset-password' , function(){
    Controller::resetPassword();
}, "Reset Password Page");

Route::register('/admin/dashboard' , function(){
    Controller::dashboard();
}, "Admin Dashboard");

Route::register('/admin/add-post' , function(){
    Controller::storePost();
}, "Store Post");

Route::register('/admin/posts' , function(){
    Controller::posts();
}, "All Post");

Route::register('/admin/post/{id}' , function($id){
    Controller::post($id);
}, "Show Post");

Route::register('/admin/edit-post/{id}' , function($id){
    Controller::editPost($id);
}, "Edit Post");