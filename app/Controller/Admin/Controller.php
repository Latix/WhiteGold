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
	
	public static function dashboard ()
	{
	    View::make("admin.dashboard", get_defined_vars());
	}

	public static function storePost ()
	{
	    View::make("admin.post.new-post", get_defined_vars());
	}

	public static function posts ()
	{
	    View::make("admin.post.posts", get_defined_vars());
	}

	public static function post ($id)
	{
	    View::make("admin.post.post", get_defined_vars());
	}

	public static function editPost ($id)
	{
	    View::make("admin.post.edit-post", get_defined_vars());
	}
}
