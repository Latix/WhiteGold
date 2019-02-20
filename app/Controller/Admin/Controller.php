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
	
	public static function index ($admin = null)
	{
		$admin =$admin ?: true;
	    View::make("admin.index", get_defined_vars());
	}

	public static function resetPassword ($admin = null)
	{
		$admin =$admin ?: true;
	    View::make("admin.reset-password", get_defined_vars());
	}
	
	public static function dashboard ()
	{
		$admin = true;
	    View::make("admin.dashboard", get_defined_vars());
	}
}
