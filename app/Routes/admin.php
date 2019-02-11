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