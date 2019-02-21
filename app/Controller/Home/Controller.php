<?php

namespace App\Controller\Home;

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
	public static function homePage ()
	{
    	$title          = APP_NAME;
	    $description    = "whiteGold is a PHP light web application framework with sophisticated syntax and this is inspired by the Laravel Framework with the aim to ease the way components are being installed alongside our project which disrupts scaling and development process. whiteGold attempts to tackle this by tearing down components to make them stand alone so it's easy to remove, add and update different components at any point in time.";
		View::make("home", get_defined_vars());
	}

	public static function main($user = null,$admin = null){
		$show = false;
		$user = $user ?: "kamsi";
		$admin = $admin ?: false;
		View::make("main", get_defined_vars());
	}

	public static function show($id = null, $admin = null){
		$admin = $admin ?: false;
		$show = true;
		$id = $id ?: null;
		View::make("main", get_defined_vars());
	}

	public static function about($admin = null){
		$admin = $admin ?: false;
		View::make("about", get_defined_vars());
	}

	public static function contact($admin = null){
		$admin = $admin ?: false;
		View::make("contact", get_defined_vars());
	}

	public static function post($admin = null){
		$admin = $admin ?: false;
		View::make("post", get_defined_vars());
	}
}
