<?php

use App\Start\View;
use App\Start\Route;
use App\Controller\Home\Controller;

/**
* @routes Web
*/

Route::register('/main' , function(){
    Controller::main();
}, "My Main");

Route::register('/main/{user}' , function($user){
    Controller::main($user);
}, "My Main");

Route::register('/about' , function(){
    Controller::about();
}, "About");

Route::register('/contact' , function(){
    Controller::contact();
}, "Contact");

Route::register('/post' , function(){
    Controller::post();
}, "Post");