<?php

namespace App\Controller\Admin;

use App\Start\View;

/**
* App\Controller\Home Controller Class
*/
class Controller
{
	/**
	* Handles the home page route.
	* @return void
	*/
	
	public static function index ()
	{
	    View::make("admin.index", get_defined_vars());
	}

	public static function resetPassword ()
	{
	    View::make("admin.reset-password", get_defined_vars());
	}
	
}
