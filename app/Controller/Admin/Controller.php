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
		global $session, $secure;

		if ($session->isUserLoggedIn())
			redirectTo('./admin/dashboard');
		
	    View::make("admin.index", get_defined_vars());
	}

	/**
	* Log user out of application.
	* @return void
	*/
	public static function logout ()
	{
		global $session;

		if ($session->isLoggedIn()) $session->logout();
			redirectTo('./admin');
	}

	public static function resetPassword ()
	{
	    View::make("admin.reset-password", get_defined_vars());
	}
	
	public static function dashboard ()
	{
		global $secure, $session;

		$session->lockPage('./admin/logout');

		$user = \App\Models\User::findById($session->getID());
	    View::make("admin.dashboard", get_defined_vars());
	}

	public static function storePost ()
	{
		global $secure, $session;

		$session->lockPage('./admin/logout');

	    View::make("admin.post.new-post", get_defined_vars());
	}

	public static function posts ()
	{
		global $secure, $session;

		$session->lockPage('./admin/logout');
		
	    View::make("admin.post.posts", get_defined_vars());
	}

	public static function post ($id)
	{
		global $secure, $session;

		$session->lockPage('./admin/logout');
		
	    View::make("admin.post.post", get_defined_vars());
	}

	public static function editPost ($id)
	{
		global $secure, $session;

		$session->lockPage('./admin/logout');
		
	    View::make("admin.post.edit-post", get_defined_vars());
	}
}
